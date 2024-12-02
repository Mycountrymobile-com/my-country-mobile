<?php

namespace MyCountryMobile\TextlocalChannel\User;

class User
{
    protected $id;
    protected $name;
    protected $phone;

    public function __construct($id, $name, $phone)
    {
        $this->id = $id;
        $this->name = $name;
        $this->phone = $phone;
    }
}
