<?php

// why we need live wire
/*
 * to make the website dynamic without using javascript
 */

// creating a project using livewire
/*
 * to require livewire library
 *  - composer require livewire/livewire
 */

// how livewire works:
/*
 * - livewire expects some specific syntax in the blade view
 *
 * - @livewire component will run the view and the view will call
 *   the component
 *
 * - wire:model => means we ask synchronize the value of the property
 *
 * it will do change after amount of seconds you can change it by
 * debouncing
 *  => view:model.debounce.500ms
 *  => by default it is 150ms
 *
 * to see that in inspect:
 *  - Network => Fetch/XHR
 *  - you will notice that livewire send request to the backend
 *  - the request will send to the livewire endpoint which will be added
 *    automatically
 *
 * so you should know that:
 *  - in the example we had built in the poll project, once you type any
 *    text, then livewire makes a request which essentially tells the
 *    backend server we've got a new value for the title please rerender
 *    this component
 *  - because the job of every live wire component essentially in the end
 *    is to rerender some html output
 *
 *
 */


// what is the pros
/*
 * - you can do a client side effects without using javascript
 * - no refresh needed you can add whatever you want
 *
 */


// libraries that build with livewire
/*
 * filament
 */

// libraries for js;
/*
 * motion.dev
 * albine.js
 */