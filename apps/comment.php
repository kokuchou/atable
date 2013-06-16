<?php

require_once 'apps_core.php';

class comment extends apps_core{

    
    public function index()
    {
        $this->smarty->assign('title', '掲示板');

        $this->smarty->display('index.tpl');
    }
    
    public function __construct()
    {
        parent::__construct();
        if ($this->agentPC) {
            $this->smarty->assign('css', '/css/style.css');
        } else {
            $this->smarty->assign('css', '/css/smart.css');            
        }
    }

}