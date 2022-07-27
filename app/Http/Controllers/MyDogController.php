<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyDogController extends Controller
{
    public function index () {
        return 'my dog - mops, tis is name Bady';
    }
};
