<!DOCTYPE html>
<html>
<head>
	<title><?php echo $meta_title; ?></title>
	<!-- Bootstrap -->
	<link href="/jmiams/css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">
		.bigger_text {
			font-size: 16px;
		}
	</style>
	<script src="/jmiams/js/jquery-1.11.1.min.js"></script>
	<script src="/jmiams/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-static-top navbar-inverse" role="navigation">
	    <div class="container-fluid">
		    <div class="navbar-header">
		    	<a class="navbar-brand" href="<?php echo site_url('teacher/'); ?>"><?php echo $meta_title; ?></a>
		    </div>
		    <div class="collapse navbar-collapse">
			    <ul class="nav navbar-nav">
				    <li <?php if($page == 0) echo 'class="active"' ?>><a href="<?php echo site_url('teacher/'); ?>">Dashboard</a></li>
				    <li <?php if($page == 1) echo 'class="active"' ?>><?php echo anchor('teacher/teachers', 'Teachers'); ?></li>
				    <li <?php if($page == 2) echo 'class="active"' ?>><?php echo anchor('teacher/students', 'Students'); ?></li>
			    </ul>
			    <ul class="nav navbar-nav pull-right">
			    	<li class="dropdown pull-right">
				        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $name ?> <span class="caret"></span></a>
				        <ul class="dropdown-menu" role="menu">
				            <li><?php echo anchor('teacher/account', 'Account'); ?></li>
				            <li class="divider"></li>
				            <li><?php echo anchor('teacher/logout', 'Logout'); ?></li>
				        </ul>
			        </li>
			    </ul>
			</div>
	    </div>
    </nav>