<?php

class AuthorController extends Controller
{
    static function index()
    {
        return self::view("./views/author.php");
    }

    static function create()
    {
        return self::view("./views/author/create.php");
    }

    static function store($data)
    {
        if($data == '') {
            $_SESSION['validation_name'] = "Name field required!";
            header("Location: /author/create");
            return;
        }
        
        session_destroy();
        header("Location: /author");
    }
}