<?php

namespace App\Models;

use Core\Model;
use PDOStatement;

class comment extends Model
{
    protected $table = 'comments';

   

    public function create($values): PDOStatement
    {
        return $this->database->query("INSERT INTO $this->table (title, description, user_id) VALUES (?, ?, ?, ?)", $values);
    }

   
    public function delete($comment_id)
    {
        return $this->database->query("DELETE FROM $this->table WHERE id = $comment_id");
    }
}
