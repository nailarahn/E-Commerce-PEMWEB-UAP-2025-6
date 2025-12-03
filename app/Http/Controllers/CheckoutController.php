<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\UserBalance;
use App\Models\VirtualAccount;
use Illuminate\Support\Str;

class CheckoutController extends Controller
{
    public function checkoutPage()
    {
        return view('checkout.index');
    }

    public function processCheckout(Request $request)
    {
       $request->validate([
            'address' => 'required',
            'shipping' => 'required',
            'payment_method' => 'required'
        ]);
        
        $user = auth()->user();

        $transaction = Transaction::create([
            'code' => 'TRX-' . time(),
            'buyer_id' => $user->id,
            'store_id' => $request->store_id,
            'address' => $request->address,
            'shipping' => $request->shipping,
            'shipping_cost' => $request->shipping_cost,
            'tax' => 0,
            'grand_total' => $request->total,
            'payment_status' => 'unpaid'
        ]);

        // Insert details
        foreach ($request->items as $item) {
            TransactionDetail::create([
                'transaction_id' => $transaction->id,
                'product_id' => $item['id'],
                'qty' => $item['qty'],
                'subtotal' => $item['subtotal'],
            ]);
        }

        // Bayar dengan Wallet
        if ($request->payment_method === 'wallet') {

            $balance = UserBalance::where('user_id', $user->id)->first();

            if (!$balance || $balance->balance < $transaction->grand_total) {
                return redirect()->back()->with('error', 'Saldo tidak cukup');
            }

            $balance->balance -= $transaction->grand_total;
            $balance->save();

            $transaction->payment_status = 'paid';
            $transaction->save();

            return redirect()->route('history')->with('success', 'Pembayaran berhasil dari saldo!');
        }

        // Bayar dengan Virtual Account
        if ($request->payment_method === 'va') {

            $va = VirtualAccount::create([
                'user_id' => $user->id,
                'transaction_id' => $transaction->id,
                'type' => 'transaction',
                'code' => 'VA' . time() . rand(100,999),
                'amount' => $transaction->grand_total,
                'status' => 'pending'
            ]);

            return redirect()->route('payment.page')->with('success', 'VA berhasil dibuat: ' . $va->code);
        }
    }
}
