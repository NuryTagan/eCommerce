<?php

use App\Http\Middleware\AGE;
use App\Http\Middleware\AgeCheck;
use App\Http\Middleware\CountryCheck;
use App\Http\Middleware\GlobalMW;
use App\Http\Middleware\LAST;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // $middleware->append(AgeCheck::class);
        // $middleware->append(CountryCheck::class);

    //   $middleware->append(GlobalMW::class);
      $middleware->appendToGroup('check', [
            GlobalMW::class,
            AGE::class, 
      ]);

      $middleware->appendToGroup('last', [LAST::class]);
    
        
    })

    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
