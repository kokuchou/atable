<?php

require_once 'apps_core.php';

class comment extends apps_core{

    
    public function index()
    {
        $this->smarty->assign('title', 'コメント');

        $this->smarty->display('comment.tpl');
    }
    
    public function check()
    {
        $errFlag = false;
        $post = $this->getPostData();
        
        $month = $post['Date_Month'];
        $day = $post['Date_Day'];
        $year = $post['Date_Year'];
        $post['date'] = "{$year}-{$month}-{$day}";
        if (!checkdate($month, $day, $year)) {
            $errFlag = true;
            $err['date'] = "入力された日が正しくありません。";
        }
        
        if ($post['comment'] == "") {
            $errFlag = true;
            $err['comment'] = "コメントを入力してください。";
        }
        
        if ($errFlag) {
            $this->smarty->assign('err',$err);
            $this->setMessage('入力ミスがあります。', ERROR);
            $this->smarty->assign('data', $post);
            $this->index();
            exit;
        }
        
        if ($post['name'] == "") {
            $post['name'] = "匿名";
        }
        
        $this->smarty->assign('data', $post);
        $this->smarty->assign('title', 'コメント');
        $this->smarty->display('comment_check.tpl');
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