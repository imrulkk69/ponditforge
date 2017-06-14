<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index()
    {
    	$actionName = request()->route()->getActionName();
        $method = request()->route()->methods()[0];
        $action = substr($actionName, strpos($actionName, '@') + 1); 
        $namespace = substr($actionName, 0, strrpos($actionName, '\\'));
        $controller = substr($actionName, strrpos($actionName, '\\') + 1, -(strlen($action) + 1));

        dd(request()->user()->isAdmin());
        return "This  is from post controller";
    }
}
