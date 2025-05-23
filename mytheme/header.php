<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title(); ?> | <?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php
$quotes = [
  "Nie musisz być wielki, żeby zacząć, ale musisz zacząć, żeby być wielki.",
  "Każda porażka to krok do sukcesu.",
  "Sukces to suma małych wysiłków powtarzanych każdego dnia.",
  "Działaj teraz – idealny moment nie istnieje.",
  "Twój czas jest ograniczony, więc nie marnuj go na bycie kimś, kim nie jesteś."
];
$random_quote = $quotes[array_rand($quotes)];
?>

<a href="https://zenquotes.io/" target="_blank" class="inspirational-banner">
  <div class="banner-text">
    „<?php echo $random_quote; ?>” 💬
  </div>
</a>


<header class="hero-header">

  <div class="container hero-container">
   

    <nav class="main-nav">
      <?php wp_nav_menu([
        'theme_location' => 'main-menu',
        'container' => false,
        'menu_class' => 'menu'
      ]); ?>

      <div class="cart-icon">
        <a href="<?php echo wc_get_cart_url(); ?>" class="cart-link">
          <img src="<?php echo get_template_directory_uri(); ?>/images/cart-icon.png" alt="Koszyk">
          <span class="cart-count"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
        </a>
      </div>

      <div class="hamburger" id="hamburger">
        <span></span><span></span><span></span>
      </div>
    </nav>
  </div>

  <div class="hero-content">
  <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
  <p>Znajdź inspirację na zdrowe i pyszne dania</p>

  <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="hero-button">Zobacz przepisy</a>
</div>

</header>
