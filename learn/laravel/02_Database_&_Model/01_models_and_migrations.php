<?php

// what is models:
/*
 * model is a php a classes. they represent the database tables
 *
 * to create a new model
 *  - php artisan make:model Task -m
 *
 * the laravel model use
 *  - ORM => object relational mapping
 *  - which mean you are mapping classes to the database tables
 *  - this used in different language and frameworks
 *  - so instead of writing sql directly, you just use the model method
 */

// what is migrations:
/*
 *  migrations is used to manipulate the tables schema
 *  like adding tables, columns or remove them even update them
 *
 * migration by default will have:
 *  - up method && down() method
 *
 * to create a new migration class:
 *  - php artisan make:migration create_tasks_table
 *
 * naming convention
 *  - it should be the plural name of its model class and if it contains
 *    of multiple words, separate them with underscore '_'
 *
 *
 * migration create:
 *  - id() => bigint(20) PK auto increment unsigned
 *
 *  - timestamps() => created_at && updated_at columns
 *
 *  - string() => varchar(255)
 *  - text()   => text type
 *  - nullable => Null
 *  - boolean  => tinyint (1) default (0)
 *  - enum     => second para will contain the enum value in array
 *  - default  => to set the default value
 *
 *
 * migrations table
 *  - will follow the migration
 */


// Rolling Back migration
/*
 * to roll back the latest migration
 *  => php artisan migrate:rollback
 *
 *
 * to roll back limited number of migration
 *  => php artisan migrate:rollback --step=5
 *
 *
 * to roll back a specific batch
 *  => php artisan migrate:rollback --batch=3
 *
 *
 * to se the sql without execute the migration
 *  => php artisan migrate:rollback --pretend
 *
 *
 * to rollback all the migrations
 *  => php artisan migrate:reset
 */


// rollback and migrate using single command
/*
 * to rollback and migrate using single command
 *  => php artisan migrate:refresh
 *
 *
 * to do the previous and run all database seeds...
 *  => php artisan migrate:refresh --seed
 *
 *
 * to rollback and re-migrate a limited number of migration
 *  => php artisan migrate:refresh --step=5
 */


// to drop all the tables
/*
 *
 * to drop the all the tables and then execute the migrate command
 *  => php artisan migrate:fresh
 *
 *
 * do the previous and then run seed
 *  => php artisan migrate:fresh --seed
 *
 *
 * you may use database option to specify the database connection
 *  => php artisan migrate:fresh --database=admin
 */