<?php

// run the server:
/*
 * php artisan serve
 */


// show list of routing
/*
 * php artisan r:l
 * php artisan route:list
 */

// to create table and database in the database
/*
 */

// to create a modal and migration
/*
 * php artisan make:model ModelName -m
 */

// migrations:
/*
 * php artisan migrate
 *  => to execute all up() method in migrations
 *
 *
 * php artisan migrate:rollback
 *  => to execute down() in last migrations
 *
 *
 * php artisan migrate:refresh --seed
 *  => this will re-create the migrations and run seed
 *  => never run this in the production deployment
 *
 */


// Model Factory:
/*
 * php artisan make:factory TaskFactory --model=Task
 *   => to link it with the task model
 */

// to run seeder:
/*
 * php artisan db:seed
 */
