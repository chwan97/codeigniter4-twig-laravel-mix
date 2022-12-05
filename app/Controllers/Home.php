<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function page1()
    { 
        $template = $this->twig->load('page1.html.twig');
        
        return $template->render();
    }

    public function page2()
    { 
        $template = $this->twig->load('page2.html.twig');
        return $template->render();
    }
}
