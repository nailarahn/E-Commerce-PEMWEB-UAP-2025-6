<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Product;

class CustomerProductController extends Controller
{
    public function show($slug)
    {
        $product = Product::with(['images', 'store', 'reviews.user'])
                    ->where('slug', $slug)
                    ->firstOrFail();

        return view('customer.product', compact('product'));
    }
}
