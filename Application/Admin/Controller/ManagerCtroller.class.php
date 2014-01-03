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

	//管理员列表页面
    public function index(){
    	//判断超级管理员
    	//分页
    	//读取用户列表
   		$this->assign('name','longdd');
   		
    	$this->display();
    }
}