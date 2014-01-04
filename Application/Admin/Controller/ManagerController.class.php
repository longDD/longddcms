<?php

// +------------------------------------------------------------------------------------------
// | LongCMS
// +------------------------------------------------------------------------------------------
// | Before finding the right people, the only need to do is to make yourself good enough.
// +------------------------------------------------------------------------------------------
// | Author: longDD <longdd_love@163.com> O(∩_∩)O
// +------------------------------------------------------------------------------------------
// | 用户管理
// +------------------------------------------------------------------------------------------
namespace Admin\Controller;
use Admin\Controller;

class ManagerController extends BaseController {
    public function index(){
    	$this->assign('name','longDD');
    	$this->display();
    }
}