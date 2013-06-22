<?php

require_once 'apps_core.php';

class about extends apps_core{

    
    public function index()
    {
        $this->smarty->assign('title', 'ア・ターブルについて');
        $this->smarty->display('about.tpl');
    }
    
    public function __construct()
    {
        parent::__construct();
        if ($this->agentPC) {
            $this->smarty->assign('css', '/css/style.css');
        } else {
            $this->smarty->assign('css', '/css/smart.css');            
        }
        $this->smarty->assign('cur', 'about');
    }

}