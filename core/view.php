<?php
namespace core;

class view

{
    public static function render($viewName)
    {
        require_once "Projekty/Grill/views/". $viewName . ".php";

    }
}