<?php
class SessionStorage implements Storage
{
   
    function __construct(public $name)
    {
      
       session_start();
      
    }
function save($figures)
{
  $_SESSION['name'] = $figures;
}
function load()
{
        return $_SESSION['name'];
    
}

}