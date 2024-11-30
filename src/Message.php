<?php

namespace MyCountryMobile;

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
