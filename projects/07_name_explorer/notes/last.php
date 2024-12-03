<?php
// highlight the letter
/*
 * - if the page is the active one add the class active to it
 * - add the css file the implement the active class
 *
 * the active style
 *   a.active,
 *   a.active:visit {
 *      border-color: var(--accent);
 *   }
 *
 * the html
 *    <?php if(!empty($char) && $char === $character): ?>
 *      class="active"
 *    <?php endif ?>
 *
 * NOte
 *  - for the name page $char is not exist so we add it by access the
 *    first index of the name => name[0]
 */


// pagination
/*
 * adding it to fetch_names_by_initial()
 *
 * function fetch_name_by_initial(string $char, int $page = 1,
 *      int $perPage = 15) : array)
 *
 * - you should check that the page is less than the higher page and
 *  bigger than or equal to 1 if it -1 this will case a problem
 */


// improve DB performance with indexes
/*
 * the query might take amount of times depending on the query it self
 * and the amount of entry in the table to make it much more faster
 *  - you can add index to the name for example so it will be more faster
 *     => to do this go to structure then add column index then add one
 *  - to test it you can add to the query
 *     => ignore index (index)
 *  - note that this will not affect the group
 *
 *
 */


// Improve group by performance
/*
 * to do that you need to add an index to multiple columns
 *   - create an index on 2 columns (go)
 *    - then add index to
 *
 */

// notes:
/*
 * it depending on the queries that is might be applied to some
 *  queries but with other queries will not be applied
 */

// fix one bug:
/*
 * with fetch_names_by_initial($char)
 *  - what if you pass % to it that will fetch all the data in the table
 *  - to solve that check that the char is in_array of the alphabets
 */