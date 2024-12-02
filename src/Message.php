<?php

namespace MyCountryMobile\TextlocalChannel\Message;

class Message
{
    protected $userId;
    protected $content;

    public function __construct($userId, $content)
    {
        $this->userId = $userId;
        $this->content = $content;
    }


}
