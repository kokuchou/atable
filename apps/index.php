<?php

require_once 'apps_core.php';

class index extends apps_core{

    
    public function index()
    {
        $this->smarty->assign('title', 'Vous d&eacute;sirez?～創作フレンチレストラン ア・ターブル～');
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