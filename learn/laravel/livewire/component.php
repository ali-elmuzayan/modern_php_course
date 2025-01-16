<?php


// how to create a livewire component
/*
 * php artisan make:livewire ComponentName
 *
 *
 * where the component will exist:
 * - app/Http/Livewire
 *   => which will return the view
 * - resources/view/livewire
 *   => will contain the view part
 *
 *
 */


// to create an inline component:
/*
 * php artisan make:livewire ComponentName --inline
 */

// how to render the livewire component:
/*
 * using @livewire('component') directive
 */

// note:
/*
 * all the public property in the component class
 * will be available in the view without needing to pass it
 *
 * add
 *  wire:model='property'
 */