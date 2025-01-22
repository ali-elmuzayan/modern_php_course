<?php


// to create a new directive
/*
 * Step1:
 *  - is to create a service provider (if not already exists)
 *    => php artisan make:provider BladeServiceProvider
 *
 * step2:
 *  - is to register the service provider
 *    => in tha config/app.php
 *    => 'providers' => [App\Providers\BladeServiceProvide::class,\,
 *
 *
 * step3:
 * - Define the custom directive in the bladeServiceProvider
 *   => define the directive => @isAdmin
        public function boot(): void
            {
                Blade::directive('isAdmin', function () {
                    return "<?php if(auth()->check() && auth()->user()->role === 'admin'): ?>";
                });

                Blade::directive('endIsAdmin', function () {
                    return "<?php endif; ?>";
                });
            }
 *
 * step4:
 *  - Clear cache (if necessary)
 *    => php artisan view:clear
 *
 */