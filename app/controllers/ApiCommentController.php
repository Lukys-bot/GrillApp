<?php

/*namespace App\Controllers;

use App\Models\comment;
use Core\Dump;

class ApiController
{
    public function index()
    {
        $commentModel = new comment();

        if (isset($_GET['comment_id'])) {
            $response = $commentModel->find($_GET['comment_id']);
            echo json_encode($response);
        } else {
            $response = $commentModel->all();
            echo json_encode($response);
        }
    }
}
