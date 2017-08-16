<!DOCTYPE html>
<html>
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php echo esc_attr( get_bloginfo( 'name' ) ); ?></title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>

</head>
<body class="<?php hybrid_body_class(); ?>">
