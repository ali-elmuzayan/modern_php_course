<?php
echo '<pre>';
// Nested Arrays:
/*
 * IN PHP, Arrays can contain any possible value
 * An Array is also a value...this allows us to nest arrays into each other
 * The Advantage:
 *      - We get additional flexibility to model our data
 *      - We can use this to better model our data
 *
 *
 * // example of the problem
 *      - you have course array that should contain name, desc, date, flag
 *      => $courses = [ name => ['desc' => '', 'date' => '', 'flag' => ''] ]
 */


// define a nested array
$languages = [
    [
        'title' => 'PHP',
        'description' => 'PHP is a Scripting language.',
        'date' => '2024-02-12',
    ],
    [
        'title' => 'JavaScript',
        'description' => 'JavaScript is a Scripting language.',
        'date' => '2024-02-12',
    ],
    [
        'title' => 'HTML',
        'description' => 'HTML is a Markup language.',
        'date' => '2024-02-12',
    ],
];

$courses = [
    'algorithm' => [
        'desc' => 'algorithm description.',
        'flag' => '💥',
    ],
    'data structure' => [
        'desc' => 'data structure description.',
        'flag' => '📅📅',
    ],
    'system design' => [
        'desc' => 'system design description.',
        'flag' => '🔣',
    ],
];


// access a nested array
var_dump($languages[0]);
var_dump($languages[1]['description']);
echo '<hr>';
echo '</br>';


var_dump($courses['system design']);
var_dump($courses['algorithm']['desc']);
echo '<hr>';
echo '</br>';


$systemDesignCourse = $courses['data structure'];
var_dump($systemDesignCourse);
echo '<hr>';
echo '</br>';


// extracted from nested arrays by foreach loops
foreach ($languages as $language) {
    echo '<details>';
    echo '<summary>' . $language['title'];
    echo '</summary>';
    echo '<p>';
    echo $language['description'] . ' its course will start at ' . $language['date'];
    echo '</p>';
    echo '</details>';
}


// Navigate Multi-level Data with nested 'foreach' loops
// the provided data
$courses = [
    [
        'title' => 'German for Beginners',
        'desc' => 'Learn basic German vocabulary, grammar, and everyday phrases.',
        'flag' => '🇩🇪',
        'topics' => [
            'Introduction to German Alphabet and Sounds',
            'Basic Greetings and Farewells',
            'Numbers and Counting',
            'Common Verbs and Basic Sentence Structures',
            'Everyday Phrases for Simple Conversations',
            'Asking and Giving Directions',
            'Food and Dining Vocabulary',
            'Basic Grammar Rules: Articles and Cases'
        ],
    ],
    [
        'title' => 'French for Beginners',
        'desc' => 'Master fundamental French skills including basic vocabulary and conversational techniques.',
        'flag' => '🇫🇷',
        'topics' => [
            'Basics of French Pronunciation',
            'Introducing Yourself and Others',
            'Numbers, Time, and Dates',
            'Everyday Phrases for General Conversations',
            'Basic French Grammar: Subject-Verb Agreement',
            'Travel-Related Vocabulary and Phrases',
            'Food, Drinks, and Dining Out',
            'Clothing and Shopping Vocabulary'
        ]
    ],
    [
        'title' => 'Spanish for Beginners',
        'desc' => 'Acquire essential Spanish vocabulary and gain proficiency in daily conversations.',
        'flag' => '🇪🇸',
        'topics' => [
            'Spanish Alphabets and Sounds',
            'Basic Greetings and Introductions',
            'Numbers and Basic Mathematics',
            'Essential Phrases for Everyday Use',
            'Common Verbs and Their Conjugations',
            'Navigational Vocabulary: Directions and Locations',
            'Basic Food Vocabulary and Ordering at a Restaurant',
            'Understanding Gender and Articles in Spanish'
        ]
    ]
];

// nested foreach loops
foreach ($courses as $course) {
    echo '<details>';

    echo '<summary>' . $course['title'] . '</summary>';
    echo '<p>' . $course['desc'] . '</p>';

    // in case there is one course without topics
    if (!empty($course['topics'])) {
        echo '<ul>';
        foreach ($course['topics'] as $topic) {
            echo '<li>' . $topic . '</li>';
        }
        echo '</ul>';
    }

    echo '</details>';
}


// for irregular Data in nested arrays;
/*
 * in case for one course you don't have topics
 * so you should check first if it set or it is not empty
 */