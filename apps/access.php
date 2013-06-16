<?php

require_once 'apps_core.php';

class access extends apps_core{

    
    public function index()
    {
        $this->smarty->assign('title', 'アクセス');

        $this->smarty->display('access.tpl');
    }
    
    public function __construct()
    {
        parent::__construct();
        if ($this->agentPC) {
            $this->smarty->assign('css', '/css/style.css');
        } else {
            $this->smarty->assign('css', '/css/smart.css');            
        }
        $this->smarty->assign('cur', 'access');
    }

}