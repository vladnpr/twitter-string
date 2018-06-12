<?php
namespace Src;

class Messages
{
    private $consumer_key, $consumer_secret, $oauth_token, $oauth_secret;

    public function __construct(array $config)
    {
        var_dump($config);
    }
}