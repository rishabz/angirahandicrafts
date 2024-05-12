<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    // protected $middleware = [
    //     // Middleware classes that run on every HTTP request
    //     // 'role' => \App\Http\Middleware\CheckRole::class,
    // ];
    
    // protected $routeMiddleware = [
    //     // Middleware classes that you can assign to routes
    //     // 'auth' => \App\Http\Middleware\Authenticate::class,
    //     'role' => \App\Http\Middleware\CheckRole::class,
    // ];

    // protected $middlewareGroups = [
        // 'web' => [
        //     // Other middleware...
        //     \App\Http\Middleware\CheckRole::class,
        // ],
        // 'role' => [
        //     \App\Http\Middleware\CheckRole::class,
        // ],
    // ];

    protected $routeMiddleware = [
        // 'auth' => \App\Http\Controller\Authenticate::class,
        'role' => \App\Http\Middleware\Role::class, 
    ];
    // protected $routeMiddleware = [
    //     'role' => \App\Http\Middleware\RoleMiddleware::class,
    // ];

    // protected $middlewareGroups = [
        // 'role' => [
        //     CheckRole::class,
        // ],
    //     'web' => [
    //         \Illuminate\Auth\Middleware\Authenticate::class,
    //     ],
    // ];
    
    // protected $routeMiddleware = [
    //     'auth' => \Illuminate\Auth\Middleware\Authenticate::class,
    // ];
}