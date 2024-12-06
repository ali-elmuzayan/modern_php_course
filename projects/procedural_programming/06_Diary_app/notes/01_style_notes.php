<?php

// normalize.css
/*
 * using this file to make browsers render all elements more consistently
 *  and in line with modern standards. It precisely targets only the
 *  styles that need normalizing
 */


// style.css:
/*
 * - system-ui => which mean the system font
 *
 * vertical-align: middle; or bottom and increase the height
 *
 *
 * Note1:
 *  - when we are creating a flexbox, by default all the elements will
 *    have exactly the same height
 *    => to solve this use  "align-items"
 *  - when you use display flex so the item will of type flex item even
 *    if you change it to display inline-block or anything flex item
 *    will override
 */


// logo
/*
 *  - logo is svg and there is a code in the file so instead of embed
 *    it with the <img> you can directly add the code
 *  - nowadays we can just add SVG code directly in our html file
 *
 * Note:
 *  - it will have additional attribute and boilerplate if you embed
 *    it as code
 *    => id, data-name, xmlns, width, and height
 *  - if you you have one element so no need to <g> it is like a div
 *  - also instead of using a style as internal you can inline it
 *    with element path
 */


// main content
/*
 * it is a good practice to
 *  - nest the main content into a main element
 */


// image
/*
 * if we want to style an image that user will add so we don't know
 * how the size will be so we need to use this property
 *  => object-fit: cover;
 * note 1:
 *  - it might not show the whole image but this is the proper way
 *
 * note2 :
 *  - you will need a border radius again instead use overflow:hidden
 *    to the parent
 *
 * note 3:
 *  - the image by default take care about the text around it so,
 *    you could see a gap after it (baseline)
 *      => to fix it turn to  display: block;
 *
 * note 4 (img in card) :
 *  - set the height to 2rem for example of fixed value but if the
 *    card bigger set it to the height of the card to solve this use
 *    2 value
 *      => height: 2rem;  and min-height:100%;
 */


// container
/*
 * you can set the container and instead of wrapping it with all
 * the elements wrap it with
 *  - elements nested in nav
 *  - elements nested in main
 * so they have the big design of the theme
 */


// responsive card
/*
 * flex-direction
 *  - use flex direction so the card will show horizontally in desktop
 *    while in mobile it will show vertically
 */


// Submit button
/*
 *  - we were about to create it as input:submit, but we need to add svg
 *    code in that case we need to use button type="submit"
 */

// implement the pagination :
/*
 * 1) tha pagination should be in <ul>
 *  - each li should contain a link
 *  - set a default value
 *
 * 2) search for arrows:
 *  - you can search for Unicode arrow for pagination:
 *  - you can copy and paste  or use your own svg
 *
 * 3) add classes:
 *  - pagination => for the ul
 *  - pagination-li => for the li
 *  - pagination-li-action => for the active link
 *  - pagination-link => for <a>
      => You should access this class of link for the body of link to
        make all the aria clickable while if you set the style to li then
        all the word will be clickable
 */


// background lines:
/*
 *  - we add it in the style with background-image
 *  - also we used pseudo before and after
 *
 * position: absolute
 *  - to make it shown on the content not before the main
 *  - the main should be of position relative
 *  - we use z-index to be under the elements
 *
 */

// Naming classes:
/*
 * the instructor advice me to
 *  - when he's naming a class use - between words while when
 *    naming a class that sub element use __ in the additional words
 *    => example: nav-brand, nav-brand__img, nav-brand__text
 */


// General Notes
/*
 * Note I:
 *  - if you add an item and give it big height for example of width
 *    and this make the page look bigger how to solve this without
 *    change the dimension
 *      => by just making the parent (overflow:hidden);
 *
 * remove additional whitespace
 *  - shift + tap
 */



