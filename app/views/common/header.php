<html>
<head>
    <title><?php echo $title?></title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url();?>">CustomMVC</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="<?php if($active == "home"){echo "active";}?>"><a href="<?php echo base_url('HomeController/home')?>">Home</a></li>
                <li class="<?php if($active == "user"){echo "active";}?>"><a href="<?php echo base_url('HomeController/user')?>">User</a></li>
            </ul>
        </div>
    </div>
</nav>


<div class="container">
    <h1>You currently in <?php echo $page.', '.$controller;?></h1>