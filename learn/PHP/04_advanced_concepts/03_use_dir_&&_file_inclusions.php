<?php

/*
 * In PHP, using the __DIR__ magic constant with include (or require) is
 * a best practice when working with file paths. Here's why:
 *
 *  1. Ensures Correct File Path
 *       Using __DIR__ ensures that the file path is always resolved
 *       correctly, regardless of the current working directory.
 *
 *  2. Avoids Path Manipulation Errors
 *      When you use relative paths, it's easy to accidentally reference
 *      incorrect levels in the directory tree. __DIR__ removes this
 *      ambiguity by providing the exact directory path.


 *
 *  3. Improves Code Portability
 *      Using __DIR__ makes your code more portable, as it works
 *      reliably across different environments (e.g., local development,
 *      staging, production). If you move your application to another
 *      server, you don't have to adjust file paths.
 *
 *  4. Enhances Maintainability
 *      Explicit paths using __DIR__ are easier to debug because they
 *      clearly show the file's directory. This reduces confusion for
 *      developers maintaining the code.
 *
 *
 * How to include the file with __DIR__
 *  include __DIR__ . '/file'
 *
 * Just try this
 *      - __FILE__
 */

var_dump(__DIR__);


/*
 * file inclusions
 *  - include
 *  - include_once
 *      => if the file cannot be included it will show an error which will be
 *         confusing with bugs later
 *
 * - require
 * - require_once
 *      => if the file cannot be included it generate an error
 *
 *
 * Note:
 *    - file.inc.php mean this file only meant for including not for
 *      executed directly, but php doesn't care
 */