<?php

namespace App\Http\Middleware;

use App\Models\Dish;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckDishRestaurant
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();
        $dish = $request->route('dish');
        if($user->restaurant->id != $dish->restaurant_id){
            abort(404);
        }
        return $next($request);
    }
}
