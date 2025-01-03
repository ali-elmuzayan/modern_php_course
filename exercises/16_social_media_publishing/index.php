<?php
// Background Scenario:
/*
 * To streamline social media management, imagine a scenario where you're
 * developing a PHP application that can publish content across different
 * platforms, such as Facebook and LinkedIn, using a common interface.
 * This exercise challenges you to create a flexible system that can
 * accommodate publishing mechanisms for any social media platform
 * by adhering to a defined interface. Your goal is to define this
 * interface and implement it in classes representing different
 * social media publishers. 🌐✍️
 */

// Defines a contract for social media publishing classes
interface SocialMediaPublisher
{
    // Declares a method for publishing content. Requires content and a token for authentication.
    public function publish(string $content, string $token): bool;
}

class FacebookPublisher implements SocialMediaPublisher
{
    public function publish(string $content, string $token): bool
    {
        // Simulate token verification first for Facebook
        if ($token !== "valid_facebook_token") {
            echo "Failed to publish to Facebook: Invalid Token\n";
            return false;
        }
        // Simulate publishing to Facebook using an API token after verification
        echo "Publishing to Facebook: $content\n";
        return true;
    }
}

class LinkedInPublisher implements SocialMediaPublisher
{
    public function publish(string $content, string $token): bool
    {
        // Simulate token verification first for LinkedIn
        if ($token !== "valid_linkedin_token") {
            echo "Failed to publish to LinkedIn: Invalid Token\n";
            return false;
        }
        // Simulate publishing to LinkedIn using an API token after verification
        echo "Publishing to LinkedIn: $content\n";
        return true;
    }
}

// Function to attempt publishing content to a social media platform through a publisher instance
function publishPost(SocialMediaPublisher $publisher, string $content, string $token): bool
{
    $success = $publisher->publish($content, $token);

    if ($success) {
        echo "Post published successfully.\n";
        return true;
    } else {
        echo "Failed to publish post.\n";
        return false;
    }
}
