<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$roles): Response
    {
        $user = $request->user();

        if (! $user) {
            return redirect()->route('login');
        }

        $userRoleId = (int) $user->role_id;
        $userRoleName = strtolower($user->role->nombre ?? '');

        foreach ($roles as $role) {
            $roleLower = strtolower(trim($role));

            // Coincidencia directa con el ID de rol
            if ((string) $userRoleId === $roleLower) {
                return $next($request);
            }

            // Coincidencia con el nombre del rol registrado en la BD
            if ($userRoleName === $roleLower) {
                return $next($request);
            }

            // Mapeo por roles comunes
            if ($roleLower === 'admin' || $roleLower === 'administrador') {
                if ($userRoleId === 1 || str_contains($userRoleName, 'admin')) {
                    return $next($request);
                }
            }

            if ($roleLower === 'vendedor') {
                if ($userRoleId === 2 || str_contains($userRoleName, 'vendedor')) {
                    return $next($request);
                }
            }

            if ($roleLower === 'cliente') {
                if ($userRoleId === 3 || str_contains($userRoleName, 'cliente')) {
                    return $next($request);
                }
            }
        }

        abort(403, 'No tienes permisos para acceder a esta sección.');
    }
}
