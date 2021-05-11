<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blank
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="http://localhost/Wordpress2/home/">TEEGEEPRINTS</a>
    </div>
    <ul class="nav navbar-nav"
    style="float:right;">
      <li class="active"><a href="http://localhost/Wordpress2/home/">HOME</a></li>
      <li><a href="http://localhost/Wordpress2/shop/">SHOP</a></li>
       <li><a href="http://localhost/Wordpress2/cart/">CART</a></li>
      <li><a href="http://localhost/Wordpress2/about-us/">ABOUT US</a></li>
      <li><a href="http://localhost/Wordpress2/contact-us/">CONTACT US</a></li>

    </ul>
  </div>
</nav>
  


</body>
</html>
