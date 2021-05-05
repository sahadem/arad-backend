<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;

class AdminMiddleware
{
    /**
     * Run the request filter.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $admin = User::where('user_name', $request->userName)->first();

        if ($admin['role'] == 'member') {
            return redirect('/');
        }

        return $next($request);
    }

}
