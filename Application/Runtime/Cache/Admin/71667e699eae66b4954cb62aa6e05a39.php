<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="cn">
<head>
  <title>LongCMS</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="/Public/matrix/css/bootstrap.min.css" />
<link rel="stylesheet" href="/Public/matrix/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="/Public/matrix/css/fullcalendar.css" />
<link rel="stylesheet" href="/Public/matrix/css/matrix-style.css" />
<link rel="stylesheet" href="/Public/matrix/css/matrix-media.css" />
<link href="/Public/matrix/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="/Public/matrix/css/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
  <!--Header-part-->
<div id="header">
  <h1><a href="/index.php/Admin">Admin</a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" >
      <a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle">
        <i class="icon icon-user"></i>
        <span class="text">Welcome User</span>
        <b class="caret"></b>
      </a>
      <ul class="dropdown-menu">
        <li>
          <a href="#">
            <i class="icon-user"></i> My Profile</a>
          </li>
        <li class="divider"></li>
        <li>
          <a href="#"><i class="icon-check"></i> My Tasks</a>
          </li>
        <li class="divider"></li>
        <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
    <li class="dropdown" id="menu-messages">
      <a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle">
        <i class="icon icon-envelope"></i>
        <span class="text">Messages</span> 
        <b class="caret"></b>
      </a>
      <ul class="dropdown-menu">
        <li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>
        <li class="divider"></li>
        <li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>
        <li class="divider"></li>
        <li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>
        <li class="divider"></li>
        <li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>
      </ul>
    </li>
    <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
    <li class="">
      <a title="" href="#"><i class="icon icon-share-alt"></i> 
        <span class="text">Logout</span>
      </a>
    </li>
  </ul>
</div>
<!--close-top-Header-menu-->

  <!--sidebar-menu-->
  <div id="sidebar">
  <a href="#" class="visible-phone"><i class="icon icon-home"></i>首页</a>
  <ul>

    <li class="active submenu">
      <a href="#">
        <i class="icon icon-home"></i>
        <span>首页</span>
      </a>
      <ul>
        <li><a href="/index.php/Admin">网站状态</a></li>
      </ul>
    </li>

    <li class="submenu">
      <a href="#">
        <i class="icon icon-cog"></i>
        <span>网站设置</span>
      </a>
      <ul>
        <li><a href="/index.php/Admin/Setting">网站设置</a></li>
        <li><a href="">系统设置</a></li>
      </ul>
    </li>

    <li class="submenu">
      <a href="#">
        <i class="icon icon-group"></i>
        <span>用户管理</span>
      </a>
      <ul>
        <li><a href="/index.php/Admin/Manager">管理员列表</a></li>
        <li><a href="#">管理员组列表</a></li>
        <li><a href="#">权限节点列表</a></li>
      </ul>
    </li>

    <li class="submenu">
      <a href="#">
        <i class="icon icon-inbox"></i>
        <span>模块管理</span>
      </a>
      <ul>
        <li><a href="/index.php/Admin/Module">模块列表</a></li>
      </ul>
    </li>

    <li class="submenu">
      <a href="#">
        <i class="icon icon-th-list"></i>
        <span>内容管理</span>
      </a>
      <ul>
        <li><a href="/index.php/Admin/Content">栏目管理</a></li>
        <li><a href="#">内容管理</a></li>
      </ul>
    </li>

  </ul>
</div>
  <!--sidebar-menu-->

  <!--main-container-part-->
  
    <div id="content">

      <!--breadcrumbs-->
      <div id="content-header">
  <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
</div>
      <!--End-breadcrumbs-->

      <!--End-breadcrumbs-->
        
	<div class="container-fluid">
		<div class="row-fluid">
		  <div class="span12">
		    <div class="widget-box">
		      <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
		        <h5>用户列表</h5>
		      </div>
		      <div class="widget-content nopadding">
		        <table class="table table-bordered table-striped">
		          <thead>
		            <tr>
		              <th>ID</th>
		              <th>用户名</th>
		              <th>所属用户组</th>
		              <th>创建时间</th>
		              <th>操作</th>
		            </tr>
		          </thead>
		          <tbody>
		          	<?php foreach ($list as $v):?>
			            <tr class="odd gradeX">
			              <td><?php echo ($v["id"]); ?></td>
			              <td><?php echo ($v["name"]); ?></td>
			              <td><?php echo ($v["group"]); ?></td>
			              <td class="center"><?php echo ($v["createtime"]); ?></td>
			              <td class="center">
			              	<a href="#">编辑</a>
			              	<a href="#">删除</a>
			              </td>
			            </tr>
		        	<?php endforeach; ?>
		          </tbody>
		        </table>
		      </div>
		    </div>
		    <div class="dataTables_paginate fg-buttonset ui-buttonset fg-buttonset-multi ui-buttonset-multi paging_full_numbers">
		    	<a class="first ui-corner-tl ui-corner-bl fg-button ui-button ui-state-default ui-state-disabled">First</a>
		    	<a class="previous fg-button ui-button ui-state-default ui-state-disabled">Previous</a>
		    	<span>
		    		<a class="fg-button ui-button ui-state-default ui-state-disabled">1</a>
		    		<a class="fg-button ui-button ui-state-default">2</a>
		    		<a class="fg-button ui-button ui-state-default">3</a>
		    		<a class="fg-button ui-button ui-state-default">4</a>
		    		<a class="fg-button ui-button ui-state-default">5</a>
		    	</span>
		    	<a class="next fg-button ui-button ui-state-default">Next</a>
		    	<a class="last ui-corner-tr ui-corner-br fg-button ui-button ui-state-default">Last</a></div>
		  </div>
		</div>
	</div>

      <!--End-breadcrumbs-->

    </div>
  <!--end-main-container-part-->
  

  <!--Footer-part-->
  
	<script src="/Public/matrix/js/jquery.min.js"></script> 
	<script src="/Public/matrix/js/jquery.ui.custom.js"></script> 
	<script src="/Public/matrix/js/bootstrap.min.js"></script> 
	<script src="/Public/matrix/js/matrix.js"></script> 

  <!--end-Footer-part-->

</body>
</html>