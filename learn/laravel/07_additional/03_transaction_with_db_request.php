<?php

// when you do some change in the database and there is a lot of query
// user transaction to not lose data

// how to do that
/*
 * // start transaction
 *  - DB::beginTransaction()
 *   try {
 *      DB::commit()
*
 *  } catch ( \Exception $e) {
 *       DB::rollback()
 *  }
 */