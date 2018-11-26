<?php

namespace App;



class SessionResult
{
    public $results = null;

    public function __construct($oldResult)
    {
      if($oldResult){
        $this->results = $oldResult->results;
      }
    }

    public function add($result, $id)
    {
      $storedResult = $result;
      $this->results[$id] = $storedResult;
    }
}
