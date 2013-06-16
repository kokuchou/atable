<?php

class apps_core 
{
    // smarty変数
    protected $smarty;
    protected $agentPC;

    public function getPostData()
    {
        if (is_array($_POST)) {
            $sec = array_map(array($this, '_htmlentities'), $_POST);
        } else {
            $sec = $this->_htmlentities($_POST);
        }

        return $sec;
    }
    
    public function getGetData()
    {
        if (is_array($_GET)) {
            $sec = array_map(array($this, '_htmlentities'), $_GET);
        } else {
            $sec = $this->_htmlentities($_GET);
        }

        return $sec;
    }

    private function _htmlentities($value)
    {
        if (is_array($value)) {
            $value = array_map(array($this, '_htmlentities'), $value);
        } else {
            $value = htmlentities($value, ENT_QUOTES, 'UTF-8');
        }
        return $value;
    }

    public function __construct()
    {
        $this->smarty = new Smarty();
        $this->smarty->template_dir = BASE_DIR . 'templates/';
        $this->smarty->compile_dir = BASE_DIR . 'templates_c/';
	$ua=$_SERVER['HTTP_USER_AGENT'];
        if((strpos($ua,'iPhone')!==false)||(strpos($ua,'iPod')!==false)||(strpos($ua,'Android')!==false)) {
            $this->agentPC = false;
        } else {
            $this->agentPC = true;
        }
        $this->smarty->assign('agent', $this->agentPC);
        $this->smarty->assign('cur', '');
    }
}