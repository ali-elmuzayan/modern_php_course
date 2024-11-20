<?php
/*
 * Background scenario:
 *  - Dive into the world of digital marketing as a specialist tasked
 *    with crafting personalized email campaigns.
 *
 *  - Your objective is to refine email templates, ensuring they
 *    resonate personally with each segment of the audience.
 *
 *  - Through creative manipulation of content, your mission is to
 *    enhance engagement, personalize communication, and strengthen
 *    the connection between brand and customer.
 */

// The content of an email provided as a single string
$emailContent = "Subject: Unlock Your Potential with Us!\n\nDear Alex,\n\nWe hope this message finds you well.\n\nQuote of the Month:\n\nDr. Albert Szent-Györgyi: 'Innovation is seeing what everybody has seen and thinking what nobody has thought.'\n\nBest wishes,\nYour Discovery Network Team\nP.S. Don't miss our special announcement next month!";

// my way
$emailContent = explode("\n\n", $emailContent);


$quote = $emailContent[array_search("Quote of the Month:", $emailContent)];;
$author = explode(':', $emailContent[4]);
$author = array_reverse($author);
$emailContent[4] = implode(" - ", $author);
$emailContent = implode("\n\n", $emailContent);

echo $emailContent;


/*
 * ----------------------------------------------------------
 *
 * Jannis solution
 */

$emailContent = "Subject: Unlock Your Potential with Us!\n\nDear Alex,\n\nWe hope this message finds you well.\n\nQuote of the Month:\n\nDr. Albert Szent-Györgyi: 'Innovation is seeing what everybody has seen and thinking what nobody has thought.'\n\nBest wishes,\nYour Discovery Network Team\nP.S. Don't miss our special announcement next month!";

// Explode the email content into sections
$sections = explode("\n\n", $emailContent);

// Find the index of the "Quote of the Month:" line
$quoteIndex = array_search('Quote of the Month:', $sections) + 1;

// Assuming the quote follows immediately after "Quote of the Month:"
$quoteSection = $sections[$quoteIndex];

// Split the quote section into the author and quote parts
$parts = explode(': ', $quoteSection);
$author = $parts[0];
$quote = $parts[1];

// Reconstruct the quote with the author and quote reversed
$sections[$quoteIndex] = $quote . ' - ' . $author;

// Rebuild the email content from the sections array.
$modifiedEmailContent = implode("\n\n", $sections);
