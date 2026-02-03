<?php include(get_template_directory().'/includes/meta.php');?>

<!DOCTYPE html>
<html lang="ja">
<head prefix="og: https://ogp.me/ns#">
  <meta charset="UTF-8">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="none" />
  <title><?php echo $title ?></title>
  <meta name="description" content="<?php echo $description ?>">
  <link rel="icon" href="/wp-content/themes/wp/assets/images/common/favicon.ico">

  <meta property="og:url" content="">
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?php echo $title ?>">
  <meta property="og:description" content="<?php echo $description ?>">
  <meta property="og:site_name" content="">
  <meta property="og:image" content="">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo $title ?>">
  <meta name="twitter:description" content="<?php echo $description ?>">
  <meta name="twitter:image" content="">

  <?php if($pageid === 'top') { ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script
      src="https://kit.fontawesome.com/60e197bf03.js"
      crossorigin="anonymous"
    ></script>
  <?php } ?>

  <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"
  />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">

  <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
  <script
    src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"
  ></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/common/index.js" defer></script>
  <?php if($scripts){ ?>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/pages/<?php echo $pageid ?>/index.js" defer></script>
  <?php } ?>
<?php wp_head(); ?>
</head>