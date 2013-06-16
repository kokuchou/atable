<?php

require_once 'apps_core.php';

class info extends apps_core{

    
    public function index()
    {
        $this->smarty->assign('title', 'インフォメーション');

        $this->smarty->display('info.tpl');
    }
    
    public function __construct()
    {
        parent::__construct();
        if ($this->agentPC) {
            $this->smarty->assign('css', '/css/style.css');
        } else {
            $this->smarty->assign('css', '/css/smart.css');            
        }
        $this->smarty->assign('cur', 'info');
    }

}