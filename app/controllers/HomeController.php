<?php 

namespace App\Controllers;


use Core\View;

class HomeController 
{
    public function index()
    {  var_dump($_SESSION);
        // ověří se, že user je zalogovaný 
        if (isset($_SESSION['user_id'])){
            //pokud ano tak ukaž view 
            return View::render('Introduction');
            
        }
        
        
        else{
            //pokud ne tak ho přesměruj na login formulář 
            return header('location: /Projekty/Grill/login');
            echo":-(";
        }
    }
}