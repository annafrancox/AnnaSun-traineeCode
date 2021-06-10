<?php
namespace App\Controllers;


class Controller
{
    public function home()
    {
        return view ('index');
    }
    public function contato()
    {
        return view ('site/contact');
    }
}