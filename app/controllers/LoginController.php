<?php

namespace App\Controllers;

use Core\View;
use App\Models\User;
use App\Services\Auth;

class LoginController
{
    public user $userModel;

    public $errors =  [
        "wrong_credentials" => "Špatné přihlašovací údaje",
       ];


    public function __construct()
    {
        $this->userModel = new user();
    }

  public function showLogin()
    {
        return View::render('login',[
        'title' => "Přihlášení",]);
    }

    public function loginUser($data) {
        $error = $_GET['error'] ?? null;
        $user = $this->userModel->exist($data);
    
        if ($user) {
            // Kontrola hesla
            $inputPassword = $data['password'];
            $dbPassword = $user['password'];
    
           if ($inputPassword === $dbPassword) 
            {
                // Heslo je platné
    
                // Zápis uživatelských údajů do SESSION
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['password'] = $user['password'];
                var_dump($data);
                die();
            
                // Přesměrování na 'Introduction'
                header('Location: Introduction');
                
                exit();
            } else {
                // Neplatné heslo
                header('location: login?error=invalid_password');
                exit();
            }
        } else {
            // Uživatel neexistuje
            header('location: login?error=user_not_found');
            exit();
        }
    }
    
   /* public function loginUser($data) {
        $error = $_GET['error'] ?? null;
        $user = $this->userModel->exist($data);

        if ($user) {
            

            //pokud je , zapsat jej do $SESSION

            // přesměrování na 'Introduction'
                var_dump($data);
            
    
        }else{
            //  přesměrovat na login page
        }
    
        
    }*/
    
    public function registerUser(array $data)

    {  
        $user = $this->userModel->emailExists($data['email']);
        

        
        if ($user) {
            //stop registerace
            return header('location: /Projekty/Grill/register?error=user_exists');
        } else {
            //provedu registraci / vytvořím záznám v tabulce users 
            $this->userModel->create($data);
            $registered_user = $this->userModel->emailExists($data['email']);
            
            Auth::login($registered_user['id']);
            

            return header('location: /Projekty/Grill/');
        }
    }

    function showRegisterForm()
    {
        $error = $_GET['error'] ?? null;

        return View::render('register', [
            'title' => "Grill",
            'error' => $this->errors[$error] ?? "",
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return header('location: /Projekty/Grill/');
        
    }

}