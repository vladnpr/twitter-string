<?php
namespace App;

use Src\Messages;
use App\View;
class App
{
    private static $view_path = BASE_DIR . '/public/views/';

    public static function run()
    {
        $twits = self::getTweets();
        self::render('index', ['twits' => $twits]);
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

    private static function getTweets()
    {
        $twitter = new Messages(self::getSettings());
        return $twitter->getMessages();
    }

    private static function render($template, array $data)
    {
        $view = new View($template);
        foreach ($data as $key => $value){
            $view->assign($key, $value);
        }
    }
}