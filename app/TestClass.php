<?php

namespace App;

use core\view;

class TestClass
{
    public function index()
    {
       // $comment = new comment();
        //$comments = $comment->all();


        return view::render('Introduction');
    }
}