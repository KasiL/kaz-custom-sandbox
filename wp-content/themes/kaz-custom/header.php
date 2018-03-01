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
    <?php wp_nav_menu( array('theme_location' => 'primary') );    ?>
    <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height ?>" width="<?php get_custom_header()->width ?>" alt='' >