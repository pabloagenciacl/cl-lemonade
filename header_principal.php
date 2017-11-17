<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow|Raleway" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/lib/font-awesome/css/font-awesome.min.css">

        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">

        <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>

        <!-- CSS -->
        <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        <?php wp_head(); ?>
    </head>

    <body>

        
        
        <nav class="cl-navbar_principal  navbar-static-top">
            <div class="container-nav_principal">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <i class="fa fa-bars fa-lg" style="color: #fff;" aria-hidden="true"></i>
                    </button>
                    <a id="#cl-logo" href="<?php echo site_url(); ?>"><?php logonav() ?></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse " >
                    <ul class="nav navbar-nav">
                        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
                    </ul>
                </div><!--/.navbar-collapse -->
            </div>
        </nav>

        <div class="cl-container-full">