<?php

//
/*
 * Scenario:
 *   You are the curator of a series of digital playlists dedicated to enhancing focus while coding. It's time for some routine maintenance on your playlists to ensure they continue to provide the perfect backdrop for coding excellence. 🎵🔄
 *
 */


$playlist = ['Starry Night', 'Moonlit Walk', 'Whispering Wind', 'Golden Horizon'];
$songRecommendations = ['Ocean Waves', 'City Nights', 'Rising Sun', 'Dancing Shadows', 'Eclipse'];

// Keep in mind that the $playlist array is typically initialized before you start working with them
// However, for testing purposes, there might be instances where $playlist is not declared
// Ensure your script is robust enough to handle such scenarios

// Write your code here

if (empty($playlist)) {
    echo 'Your playlist needs an update. Time to discover more music!';
} else {

    if (in_array('Sunny Days', $playlist)) {
        echo 'You have great taste! \'Sunny Days\' always lifts the mood!';
    } // Task 3: Playlist Update
    else if (count($playlist) > 1) {
        // If 'Sunny Days' is not in the playlist and there are more than one song,
        // replace the second song with 'Solar Whispers'
        $playlist[1] = 'Solar Whispers';
    }
}


// part 2
// if your playlist has any songs output the name of the last song


$lengthOfSongs = count($playlist);
$lastIndex = $lengthOfSongs - 1;
if ($lengthOfSongs > 1) {
    $lastSong = $playlist[$lastIndex];
    echo "Your lastly added song was: '$lastSong'.";
}

// keep your play list fresh
if ($lengthOfSongs < 3) {

    $playlist[] = $songRecommendations[array_rand($songRecommendations)];
}


// task 3 remove if the count is more than
if (count($playlist) > 10) {
    unset($playlist[0]);
}
var_dump($playlist);