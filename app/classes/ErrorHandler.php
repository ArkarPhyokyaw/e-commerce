<?php
namespace App\Classes;

use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;

class ErrorHandler
{
    public function handelErrors($error_number,$error_message,$error_line,$error_file)
    {
        $whoops= new Run();
        $whoops->pushHandler(new PrettyPageHandler());
        $whoops->register();
    }
}
?>