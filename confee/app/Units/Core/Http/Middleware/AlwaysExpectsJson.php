<?php
/**
 * Created by PhpStorm.
 * User: Cleiton
 * Date: 09/01/2017
 * Time: 23:18
 */

namespace Confee\Units\Core\Http\Middleware;


use Closure;

// middleware
class AlwaysExpectsJson
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $request->headers->add(['Accept' => 'application/json']);

        return $next($request);
    }
}