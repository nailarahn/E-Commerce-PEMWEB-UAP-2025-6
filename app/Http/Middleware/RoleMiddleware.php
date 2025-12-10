<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMiddleware
{
    public function handle($request, Closure $next, ...$roles)
    {
        if (!auth()->check()) {
            return redirect('/login');
        }

        $user = auth()->user();

        if (!in_array($user->role, $roles)) {
            abort(403, 'Access denied');
        }

        // Khusus role seller
        // Seller = member YANG memiliki store
        if (in_array('seller', $roles)) {
            if ($user->role !== 'member') {
                abort(403, 'Seller harus berasal dari role member.');
            }

            if (!$user->store) {
                abort(403, 'Anda belum memiliki toko untuk mengakses halaman seller.');
            }
        }

        return $next($request);
    }
}
