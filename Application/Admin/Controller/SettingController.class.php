<?php

// +------------------------------------------------------------------------------------------
// | LongCMS
// +------------------------------------------------------------------------------------------
// | Before finding the right people, the only need to do is to make yourself good enough.
// +------------------------------------------------------------------------------------------
// | Author: longDD <longdd_love@163.com> O(∩_∩)O
// +------------------------------------------------------------------------------------------
// | 网站设置
// +------------------------------------------------------------------------------------------
namespace Admin\Controller;
use Admin\Controller;

class SettingController extends BaseController {
    public function index(){
    	$this->assign('test',$this->test);
    	$this->display();
    }
}