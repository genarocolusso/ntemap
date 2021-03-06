<!DOCTYPE html>
<html>

<head>
    <title>Polos Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
    <!-- CSS Libs -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>flatadmin/bower_components/bootstrap/dist/css/bootstrap.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>flatadmin/bower_components/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>flatadmin/bower_components/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>flatadmin/bower_components/iCheck/skins/flat/_all.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>flatadmin/bower_components/DataTables/media/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>flatadmin/bower_components/select2/dist/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>flatadmin/vendor/css/dataTables.bootstrap.css">
    <!-- CSS App -->

  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.10/css/dataTables.bootstrap.min.css">   
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>flatadmin/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>flatadmin/css/themes.css">
    <style>
        #map2{ 
            height: 350px;
            border: 4px solid #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 9px rgba(0,0,0,0.6);    }
         
    </style>
    <script type="text/javascript">
    var BASE_URL = "<?php echo base_url();?>";
    </script>
</head>

<body class="flat-blue">
    <div class="app-container">
        <div class="row content-container">
            <nav class="navbar navbar-default navbar-fixed-top navbar-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-expand-toggle">
                            <i class="fa fa-bars icon"></i>
                        </button>
                        <ol class="breadcrumb navbar-breadcrumb">
                            <li class="active">NTE Polos Painel</li>
                        </ol>
                        <button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
                            <i class="fa fa-th icon"></i>
                        </button>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
                            <i class="fa fa-times icon"></i>
                        </button>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-comments-o"></i></a>
                            <ul class="dropdown-menu animated fadeInDown">
                                <li class="title">
                                    Notification <span class="badge pull-right">0</span>
                                </li>
                                <li class="message">
                                    No new notification
                                </li>
                            </ul>
                        </li>
                         
                        <?php if($logado){ ?>
                        <li class="dropdown profile">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Admin Menu <span class="caret"></span></a>
                            <ul class="dropdown-menu animated fadeInDown">
                                 
                                <li>
                                    <div class="profile-info">
                                        <h4 class="username">Clique para sair</h4>
                                         
                                        <div class="btn-group margin-bottom-2x" role="group"> 
                                            <a href="<?php echo base_url();?>Login/logout"><button type="button" class="btn btn-default"><i class="fa fa-sign-out"></i> Logout</button></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                         <?php } ?>
                    </ul>
                </div>
            </nav>
            <div class="side-menu">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="side-menu-container">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="#">
                                <div class="icon fa fa-paper-plane"></div>
                                <div class="title">NTE Polos Admin</div>
                            </a>
                            <button type="button" class="navbar-expand-toggle pull-right visible-xs">
                                <i class="fa fa-times icon"></i>
                            </button>
                        </div>
                        <ul class="nav navbar-nav">
                            <li class="active">
                                <a href="<?php echo base_url(); ?>painel">
                                    <span class="icon fa fa-tachometer"></span><span class="title">Novos Polos</span>
                                </a>
                            </li>
                            <li class="panel panel-default dropdown">
                                <a   href="<?php echo base_url(); ?>painel/poloinfos">
                                    <span class="icon fa fa-desktop"></span><span class="title">Polos</span>
                                </a>
                                <!-- Dropdown level 1 -->
                                
                            </li>
                            <li class="panel panel-default dropdown">
                                <a  href="<?php echo base_url(); ?>painel/polocursos">
                                    <span class="icon fa fa-table"></span><span class="title">Cursos</span>
                                </a>
                                <!-- Dropdown level 1 -->
                                
                            </li>
                             
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
            </div>
            <div class="msgaviso"></div>