<?php
namespace Src;

use Abraham\TwitterOAuth\TwitterOAuth;

class Messages
{
    private $consumer_key, $consumer_secret, $oauth_token, $oauth_secret;

    public function __construct(array $config)
    {
        $this->consumer_key = $config['consumer_key'];
        $this->consumer_secret = $config['consumer_secret'];
        $this->oauth_token = $config['oauth_token'];
        $this->oauth_secret = $config['oauth_secret'];
    }

    public function getConnection()
    {
        $connection = new TwitterOAuth(
            $this->consumer_key,
            $this->consumer_secret,
            $this->oauth_token,
            $this->oauth_secret
            );
        var_dump($connection);
    }
}