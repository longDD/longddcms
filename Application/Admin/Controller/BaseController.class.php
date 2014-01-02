<?php

// +------------------------------------------------------------------------------------------
// | LongCMS
// +------------------------------------------------------------------------------------------
// | Before finding the right people, the only need to do is to make yourself good enough.
// +------------------------------------------------------------------------------------------
// | Author: longDD <longdd_love@163.com> O(∩_∩)O
// +------------------------------------------------------------------------------------------
// | 后台基类
// +------------------------------------------------------------------------------------------
namespace Admin\Controller;
use Think\Controller;

class BaseController extends Controller {

	//测试数据
	public $test = 'Hello World!';

	//构造函数
	public function __construct(){
		parent::__construct();
	}
}