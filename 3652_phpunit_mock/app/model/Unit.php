<?php

namespace App\Model;

use Nette;

class Unit
{
    use Nette\SmartObject;

    private $db;

    public function __construct(Nette\Database\Context $db)
    {
        $this->db = $db;
    }

    /**
    * check if json is valid
    *
    * @param string $string
    * @author hydroxid
    */
    public function checkJson(string $string)
    {
         json_decode($string);
         return json_last_error() === JSON_ERROR_NONE;
    }
}
