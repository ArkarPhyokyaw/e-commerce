<?php
use Philo\Blade\Blade;
function view($path,$data=[])
{
    $view=APP_ROOT."/resources/views/";
    $catch=APP_ROOT."/bootstrap/cache/";

    $blade=new Blade($view,$catch);
    echo $blade->view()->make($path)->render();

}

function make($filename,$data)
{
    extract($data);

    require_once APP_ROOT."/resources/views/mails/".$filename.".php";

    $content=ob_get_contents();
    ob_start();

    return $content;
}

function beautify($data)
{
    echo "<pre>".print_r($data,true)."</pre>";
}

function asset($link)
{
    echo URL_ROOT."/assets/".$link;
}