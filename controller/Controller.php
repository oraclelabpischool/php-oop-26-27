<?php 

class Controller 
{
    static function view(
        string $page
    ){
        require $page;
    }
}