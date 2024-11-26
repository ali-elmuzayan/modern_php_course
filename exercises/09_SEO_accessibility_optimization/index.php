<?php


// Background scenarion:
/*
 * Dive into the task of revamping a classic website, with your
 * sights set on boosting its search engine visibility and making
 * it more accessible to all users. Your assignment involves
 * auditing and refining the site's HTML content to align with
 * contemporary web standards and accessibility principles.
 * This task requires you to extract vital data for review and
 * adjust or update HTML elements, thereby elevating the site's
 * overall quality and compliance. 🌐 🛠️
 *
 * NOte:
 *  Do not assume the presence of line breaks between HTML elements
 *  in the $htmlContent string; they are included in the example for
 *  readability purposes only!
 */


// instructions:
/*
 *  1) Extract Hyperlinks: Isolate all hyperlinks (the href attribute
 *     values) from the <a> tags present within $htmlContent. Store
 *     these URLs in an array named $links.
 *       => Example: $links = ["http://example.com/services",
 *                    "http://example.com/contact"]
 *
 *  2) Replace Deprecated Tags: Transform all deprecated <i> tags to <em>
       tags, ensuring the encapsulated content remains intact. Save the
       modified HTML content in a new variable called $emphasizedHtmlContent
 *
 *   3) Enhance Image Accessibility: For any <img> tag lacking an alt
 *      attribute, append a generic alt attribute with the value
 *      "placeholder image" to enhance accessibility. This adjustment
 *      must preserve the existing HTML structure. Store the updated
 *      content in a new variable named $accessibleHtmlContent.
 */


$htmlContent = '<div class="main-section">
<p>Explore the wonders of our <i>unique</i> platform. Below are key links for navigation:</p>
<a href="http://example.com/services">Our Services</a>
<a href="http://example.com/contact" title="Get in touch">Get in Touch</a>
<img src="welcome.png">
<img src="our-mission.jpg" alt="Our Mission">
</div>';


// Write your code here
// Task 1: Extract Hyperlinks
// Use preg_match_all to find all occurrences of href attributes within <a> tags
preg_match_all('/<a href="([^"]+)"/', $htmlContent, $matches);

$links = $matches[1]; // The first subpattern contains the URLs

// Task 2: Replace Deprecated Tags
// Use preg_replace to find <i> tags and replace them with <em> tags
$emphasizedHtmlContent = preg_replace('/<i>(.*?)<\/i>/', '<em>$1</em>', $htmlContent);

// Task 3: Enhance Image Accessibility
// Step 1: Find all <img> tags in the HTML content
preg_match_all('/<img[^>]+>/', $htmlContent, $imgTags);

// Step 2: Iterate through all found <img> tags
foreach ($imgTags[0] as $imgTag) {
    // Check if the current <img> tag lacks an alt attribute
    if (!preg_match('/alt=("[^"]*")/', $imgTag)) {
        $newImgTag = preg_replace('/>$/', ' alt="placeholder image">', $imgTag);
        $htmlContent = str_replace($imgTag, $newImgTag, $htmlContent);
    }
}

// The $htmlContent now contains updated <img> tags with placeholder alt attributes where needed
$accessibleHtmlContent = $htmlContent;