<?php

// query builder:
/*
 * this query builder lets you construct complicated queries using
 *  object-oriented way, without writing row sql
 *
 * Notes:
 *  - php artisan tinker will help you to write queries
 */


// select:
/*
 * to select
 *  - select()
 *   => select('id','name')
 */


//retrieve
/*
 * to return all the data
 *  - all()
 *
 * to return a specific id
 *  - find()
 *  - findOrFail
 *
 * to retrieve the result
 *  - get()
 *
 */


// updates:
/*
 * // to update
 *  - first you should find it
 *  - then do changes
 *  - then update it
 *
 * update with update()
 *  - Task::find($id)->update(['title' => 'hello'])
 *
 * update or create:
 *  - if the value exist will update it otherwise it will create it
 *  - updateOrCreate()
 *
 *
 * additional:
 *  - getOriginal => will return the value before updated
 *  - wasChanged => will return true if the value changed
 *  - isDirty() => will return true if one of the value changed
 *  - isClean() => will return true if the value doesn't change
 *
 */