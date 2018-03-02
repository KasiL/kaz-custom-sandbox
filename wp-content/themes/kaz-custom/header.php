<!-- header template file -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <?php wp_head(); ?>
</head>
<?php if( is_front_page() ) {
        $awesome_classes = [ 'awesome-class', 'my-class'];
    } else {
        $awesome_classes = ['not-awesome-class'];
    } 
?>

<body <?php body_class( $awesome_classes );?> >
    <header class="bs-docs-nav navbar navbar-static-top" id="top">
        <div class="container">
            <div class="navbar-header">
                <button aria-controls="bs-navbar" aria-expanded="false" class="collapsed navbar-toggle" data-target="#bs-navbar" data-toggle="collapse"
                    type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="../" class="navbar-brand">Bootstrap</a>
            </div>
            <nav class="collapse navbar-collapse" id="bs-navbar">
                <?php wp_nav_menu( 
                            array(
                                'theme_location' => 'primary',
                                'container' => false,
                                'menu_class' => 'nav navbar-nav navbar-right'
                            ) 
                        );
                    ?>
            </nav>
        </div>
    </header>

    <div class="container">
