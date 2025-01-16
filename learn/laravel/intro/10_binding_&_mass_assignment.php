<?php

// route model binding:
/*
 * this feature
 *  - when laravel automatically resolves a model instance based on the
 *    type hinted variable name in the route definition
 *
 *  - the route parameter give it the model name {task}
 *  - the action parameter should be of the model name show(Task $task)
 */


// mass assignment
/*
 * means that you set or change multiple attributes of a model at once
 * and by default that disabled
 *
 * to enable that, pass this to model
 *  - protected $fillable = [//add the column name that should be
 *     fillable] // this much more secure
 *
 *  - protected $guarded = [// add the column you to not able it ]
 *     it is the opposite of fillable
 */