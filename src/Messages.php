<?php
namespace Src;

use Abraham\TwitterOAuth\TwitterOAuth;
class Messages
{
    private $consumer_key, $consumer_secret, $oauth_token, $oauth_secret, $twitter_username, $tweet_limit;

    public function __construct(array $config)
    {
        $this->consumer_key = $config['consumer_key'];
        $this->consumer_secret = $config['consumer_secret'];
        $this->oauth_token = $config['oauth_token'];
        $this->oauth_secret = $config['oauth_secret'];
        $this->twitter_username = $config['twitter_username'];
        $this->tweet_limit = $config['tweet_limit'];

    }

    public function getMessages()
    {
        $connection = new TwitterOAuth(
            $this->consumer_key,
            $this->consumer_secret,
            $this->oauth_token,
            $this->oauth_secret
            );
        $tweets = $connection->get('statuses/user_timeline', array('screen_name' => '@Vladnpr', 'exclude_replies' => 'true', 'include_rts' => 'false', 'count' => $this->tweet_limit));
        $twitter = [];
        if(!empty($tweets)){
            foreach($tweets as $tweet) {
                $twitter[] = [
                    'screen_name' => $tweet->user->screen_name,
                    'profile_image_url' => $tweet->user->profile_image_url,
                    'text' => $tweet->text,
                    'created_at' => $tweet->created_at
                ];
//                $twitter .= '<article>
//            <aside class="avatar">
//                <a href="http://twitter.com/'.$tweet->user->screen_name.'" target="_blank">
//                    <img alt="'.$tweet->user->screen_name.'" src="'.$tweet->user->profile_image_url.'" />
//                </a>
//            </aside>
//            <p>'.$tweet->created_at.'</p>
//            <p>'.$tweet->text.'</p>
//        </article>';
            }
        }

        return $twitter;
    }
}