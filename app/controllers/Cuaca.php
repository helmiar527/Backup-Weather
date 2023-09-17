<?php

class Cuaca extends Controller
{
    public function index()
    {
        $_POST['daerah'] = "aceh";
        // $row = $this->model('Bmkg')->cuaca($_POST);
        var_dump($_POST);
    }
}
