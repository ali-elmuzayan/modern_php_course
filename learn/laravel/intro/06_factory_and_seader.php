<?php

// to generate a fake data:
/*
 * using model factories and seeding
 *  - model factoring will generate fake data for this user when you
 *    calling it in the seeder
 *  - factory class could contain definition and unverified class
 *
 *
 *
 * to create a new model factory
 * ------------------------------
 *  - php artisan make:factory NameFactory
 *  ex:
 *  - php artisan make:factory TaskFactory --model=Task
 *
 *
 * fake()
 * -------
 *  - this using library called Faker
 *  - it returns an object which has methods
 *  - it can generate fake names, emails, date
 *  - you can use
 *      => fake()->method() or
 *      => fake()->property
 *
 *
 * fake() method or property: Ex
 * -------------------------
 *  - fake()->sentence
 *  - fake()->paragraph
 *  - fake()->paragraph(7, true)
 *  - fake()->boolean
 *
 *
 * Note;
 * --------
 *  - Str::
 *     => is a str class that contain some useful function
 *     => Str::random()
 */


// load the data into the database using seeder:
/*
 *
 * what is seeder:
 * ---------------
 *  - is the actual place where you would load something into the database
 *    so we can actually do
 *  - seeder responsible for loading the model into the database
 *
 *
 * in run function
 * ----------------
 *  - to run definition
 *    => you can run the User::factory(10)->create() to run 10 entries
 *  - to run unverified:
 *    =>  User::factory()->unverified->create()
 *
 *
 * to load this into the database:
 * ------------------------------
 *  - php artisan db:seed
 *
 *
 * Note:
 * -----
 *  - seeding is very helpful for local development, so you don't have to
 *    work on an empty database
 *  - you can have multiple seeder or in small apps you can just have one

 */