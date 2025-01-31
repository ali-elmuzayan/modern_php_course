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
 *  - is the actual place where you would load something into the
 *    database so we can actually do
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



// factory with relationships;
/*
 * in definition function
 *  => return []
 *  => we use a fake() function to create the data
 * EX:
    public function definition():array
    {
        return [
            'book_id' => null
            'title' => fake()->sentence(3),
            'author' => fake()->name,
            'review' => fake()->paragraph
            'rating' => fake()->numberBetween(1,5)
            'created_at' => fake()->dateTimeBetween('-2 years'),
            'created_at' => fake()->dateTimeBetween('created_at', 'now')
        ]
    }
 * to define a custom state methods
 * The purpose of it
 *      => is to override some fo the columns that this general
 *         definition generate

   public function good() {
      return $this->state(function (array $attributes) {
        return [
            'rating' => fake()->numberBetween(4,5)
        ]
      });
   }
 */

// in seeder after creating the factories
/*
 * call this factor in run function
 *   => which will create 33 books with random number of reviews
 *
  public function run():void
  {
        Book::factory(33)->create()->each(function ($book) {
                $numReviews = random_int(5, 30)
            Review::factory()->count($numberReview)
                ->good()
                ->for($book)
                ->create()
        }
  }
 */