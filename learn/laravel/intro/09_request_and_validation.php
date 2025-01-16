<?php

// add validation to the action
/*
 * $validate = $request->validate([])
 *
 * in the associative array
 *  - add the name and the validated value
 *  Ex
 *  - ['title' => 'required|max:255', 'description' => 'required']
 *
 *
 * note:
 *  - if the user enter a wrong value then the request will redirect back
 *    to the form then show the errors
 *    => to handle that error by
 *       => {{ $errors}}
 *       => @error('name of the input')
 *
 *  - how to create:
 *    by create an object of the model then assign the value,
 *    then save()
 */

// add validation to the request
/*
 * first create the request
 *  - authorize()
 *    => to determine if the user is authorized to make this request
 *    => make it true
 *  - rules
 *    => to set the validation
 *  - messages
 *    => to set the messages of the error that shown
 *
 * to validate the request in the action
 *  => pass the request of type this request
 *  => and then use $request->validated()
 */