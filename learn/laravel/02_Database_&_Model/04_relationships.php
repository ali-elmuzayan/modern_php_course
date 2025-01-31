<?php
// relationships:
/*
 * - one to one
 * - one to many
 * - many to many
 */

// one-to-many relationships:
/*
 * What is one-to-many relationship
 *  - each record in the parent table can be associated with multiple
 *    records in the child table.
 *  - each record in the child table can be associated with one record in
 *    the child table
 *
 *
 * to add the relationship
 * First: in migration create the model:
 *  - $table->unsignedBigInteger('book_id')
 *  - $table->foreign('book_id')->references('id')->on('books')
 *          ->onDelete('cascade')
 *  OR
 *  - $table->foreignId('book_id')->constrained()->cascadeOnDelete()
 *
 * Second: in model
 *  - tell laravel about the relationship:
 *  - create those kind of function
 *    => in the parent
 *      public function reviews()  {
 *          return $this->hasMany(Review::class);
 *      }
 *    => in the child
 *      public function book() {
 *          return $this->belongsTo(Book::class);
 *      }
 *  - Notes:
 *     - to specify a different id in has many
 *      => $this->hasMany(Review::class, 'book_id')
 *          we need it in different versions or in different convention
 */