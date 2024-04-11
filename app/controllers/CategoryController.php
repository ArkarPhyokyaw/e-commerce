<?php

namespace App\Controllers;

use App\Classes\CSRFToken;
use App\Classes\Redirect;
use App\Classes\Request;
use App\Classes\Session;
use App\Classes\UpdateFile;
use Illuminate\Support\Facades\Redis;

class CategoryController extends BaseController
{
    public function index()
    {
        //Redirect::to("/");
        view("admin/category/created");
    }

    public function store()
    {
        $post=Request::get("post");
        //beautify(Request::get("post")->token);
        if(CSRFToken::checkToken($post->token)){
            beautify(Request::get("file"));
            $uploadFile= new UpdateFile();
            var_dump($uploadFile->move(Request::get("file")));
        }else{
            Session::flash("error","CSRF attack occur");
            Redirect::back();
        }
       
    }
}
?>