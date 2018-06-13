<?php
namespace App;

use Src\Messages;

class App
{
    public static function run()
    {
        $twits = self::getTweets(self::getSettings());
        include BASE_DIR . '/public/views/index.php';
    }

    private static function getSettings() : array
    {
        $settings = json_decode(file_get_contents(BASE_DIR.'/config.json'));
        return [
            'consumer_key' => $settings->consumer_key,
            'consumer_secret' => $settings->consumer_secret,
            'oauth_token' => $settings->oauth_token,
            'oauth_secret' => $settings->oauth_secret,
            'twitter_username' => $settings->twitter_username,
            'tweet_limit' => $settings->tweet_limit
        ];
    }

    private static function getTweets($settings)
    {
        $twitter = new Messages($settings);
        return $twitter->getMessages();
    }
}