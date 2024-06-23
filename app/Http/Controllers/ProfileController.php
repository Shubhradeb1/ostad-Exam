<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id)
    {
        // Declare variables
        $name = "Donald Trump";
        $age = "75";


        // Create an associative array
        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age,
        ];




        $name = 'access_token';
        $value = '123-XYZ';
        $minutes = 1;
        $path = '/';
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;

        // Create the response
        return response($data)->cookie($name, $value, $minutes, $path, $domain, $secure, $httpOnly);

    }
}
