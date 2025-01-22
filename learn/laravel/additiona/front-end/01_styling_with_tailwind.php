<?php

// How to add tailwind by CDN
/*
 * // adding to the top
 * <script src="https://cdn.tailwindcss.com"></script>
 *
 * Note:
 *  - CDN => Content delivery network
 */

// Tailwind
/*
 * - when adding tailwind, paginate will take a special style by default
 *
 * - by using tailwind all the element will have the same styling
 *   even h1 and p they will be the same
 *
 */

// Tailwind Classes
/*
 * - container
 *
 * - max-w-lg
 *   => max width to large
 *
 * - w-full
 *   => which will take the full width
 *
 * - mx-auto
 *   => to set it to middle
 *
 * - mt
 *   => give it margin top
 *
 * - mb
 *   => margin bottom
 *
 * - text-xl, text-sm
 *   => text size (sm, xl, 2xl, lg, ...)
 *
 * - font-medium
 *   => for weight
 *
 * - text-gray-700, text-slate, red, green
 *   => for the text color
 *
 * - underline
 *   => to give it a text decoration underline
 *
 * - line-through
 *    => text decoration line throw
 *
 * - decoration-pink-500
 *   => color for the decoration
 *
 * - font-bold
 *   => font bold
 *
 * - rounded-md
 *   => add a medium rounded border
 *
 * - px
 *   => padding horizontal
 *
 * - py
 *   => padding vertically
 *
 * - shadow
 *   => to add shadow (shadow-xs)
 *
 * - appearance
 *   - to specific the appearance => appearance-none to remove
 *     the default appearance
 *
 * - ring
 *   => a thin border around the element
 *
 * - flex class
 *   => to apply the flex layout
 *   => additional classes related to the flex
 *      - gap
 *      - items-center
 *
 * - leading
 *   => to set the line height => leading-tight
 *
 * - outline
 *   => outline-none
 *
 * - border-color-size
 *   => border-red-500
 *
 * - uppercase
 *   => to transform the text into uppercase
 *
 * - relative
 *   => to relative position
 *
 * - absolute
 *   => to absolute position
 *   => classes related to it
 *      - bottom   => bottom-0
 *      - right    => right-0
 *      - left
 *      - top
 */


// pseudo classes
/*----------------
 * - hover
 *   => to trigger something hover:bg-slate-500
 *
 * - focus
 *   => to trigger something when focussing
 */


/*
 * how can you extract some styles to a common class
 *  - add style element in the head between this
 *    {{-- blade-formatter-disable --}}
 *      // write your style element and code here
 *      // example
 *         => .btn {
 *                      @apply // write the classes here
 *                  }
 *    {{--  blade-formatter-enable --}}
 *
 *  - you can apply style for a specific class or for a specific element
 *  - you should be careful because if you write something wrong
 *    everything will break down
 *
 */

// additional
/*
 *
 * Note for consistent
 *  - add the same amount of the margin
 *
 * when addslashes to color or text
 *  - then you will access the opacity
 *    => ring-slate-700/10   => which mean 10%
 *
 * for SEO
 *  - add role="alert"
 *    => for the alert (flash message) to tell that this is for alert
 */