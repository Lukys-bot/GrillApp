<?php

namespace App\Controllers;

use Core\View;
use App\Models\User;
use App\Services\Auth;

class LoginController
{
    public user $userModel;

    

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
    
        if (isset($data['email']) && isset($data['password'])) {
            $user = $this->userModel->emailExists($data['email']);
    
            if ($user && password_verify($data['password'], $user['password'])) {
                // Přihlášení uživatele
                Auth::login($user['id']);
                return header('location: /Projekty/Grill/Introduction');
            } else {
                $error = 'wrong_credentials';
            }
        }
     /*
        return View::render('login', [
            'title' => "Grill",
           ]);
    }
    

    public function registerUser($data)

    {   $email = isset($_POST['email']) ? $_POST['email'] : null;

        $user = $this->userModel->emailExists($data['email']);

        if ($user) {
            //stopnu registeraci a vrátím ho zpět na registrační formulář s chybou
            return header('location: /Projekty/TodoApp/register?error=user_exists');
        } else {
            //provedu registraci / vytvořím záznám v tabulce users 
            $this->userModel->create($data);
            $registered_user = $this->userModel->emailExists($data['email']);
            Auth::login($registered_user['id']);
            

            return header('location: /Projekty/Grill/');
        }
    }

     function showRegisterForm(): View
    {
        $error = $_GET['error'] ?? null;

        return View::render('register', [
            'title' => "Grill",
            'error' => $this->errors[$error] ?? "",
        ]);
    }

   /* public function logout()
    {
        Auth::logout();
        return header('location: /Projekty/Grill/');
    }*/
}


