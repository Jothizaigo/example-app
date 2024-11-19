<?php

namespace Vendor\ExamplePackage\Http\Controllers;

use Illuminate\Http\Request;
use ExamplePackage\Http\Controller;

class ExampleController extends Controller
{
    public function index()
    {
        return "Hello from the Example Package!";
    }
}
