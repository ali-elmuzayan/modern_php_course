<?php

// there are 4 ways to do that
/*
 * 1- by the middleware
 * 2- using a service provider
 * 3- by using helper function
 * 4- by using a singleton or service container
 *
 */

// step 1:
/*
 * create a middleware
 */


//step2:
/*
 * fetch and share the date

 // Fetch the company name from the settings table
        $companyName = Setting::where('key', 'company_name')->value('value');

        // Share the data with all views
        view()->share('companyName', $companyName);

        return $next($request);

 */


// step 3;
/*
 * Register the middleware
 *
 * in bootstrap/app.php
 *
     ->withMiddleware(function (Middleware $middleware) {
        $middleware->appendToGroup('web', [
            \App\Http\Middleware\ShareSettings::class,
        ]);
    })
 */


// step 3
/*
 * access the data in the view
 */