<?php

require_once 'apps_core.php';

class group extends apps_core{

    
    public function index()
    {
        $this->smarty->assign('title', '団体様メニューについて');

        $this->smarty->display('group.tpl');
    }
    
    public function __construct()
    {
        parent::__construct();
        if ($this->agentPC) {
            $this->smarty->assign('css', '/css/style.css');
        } else {
            $this->smarty->assign('css', '/css/smart.css');            
        }
        $this->smarty->assign('cur', 'course');
    }

}