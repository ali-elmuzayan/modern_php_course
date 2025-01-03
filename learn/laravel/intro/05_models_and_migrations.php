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
 *  - php artisan make:migration tasks
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
 *
 *
 * migrations table
 *  - will follow the migration
 */