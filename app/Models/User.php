<?php

namespace App\Models;

use Core\Model;

class User extends Model
{   
    protected $table = "users";
    
    public function create($data)
    {
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT );

        return $this->database->query("INSERT INTO $this->table (email, password)
        VALUES (?, ?)", $data);
    }
    
    public function emailExists($email)
    {
        $email = isset($_POST['email']) ? $_POST['email'] : null;

       return $this->database->query("SELECTED * FROM $this->table WHERE EMAIL = '$email'");
    }
}
