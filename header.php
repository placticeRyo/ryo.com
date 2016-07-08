<!DOCTYPE html>
<html lang="ja">
<head>
  <?php include('meta.php'); ?>
</head>
<body>
<script>
  $(function(){
    var windowH = $(window).height();
    var headerH = $("#header").height();
    var footerH = $("#footer").height();
    var contentH = windowH - footerH - headerH;


    $(function(){
      $("#main").backstretch([
        "<?php echo get_template_directory_uri(); ?>/image/image1.jpeg",
        "<?php echo get_template_directory_uri(); ?>/image/image2.jpeg",
        "<?php echo get_template_directory_uri(); ?>/image/image3.jpeg",
        "<?php echo get_template_directory_uri(); ?>/image/image4.jpeg"
      ], {duration : 3000, fade: 2000
      });
    });
  });
</script>
  <div id="wrapper">
    <header id="header" class="clearfix">
      <h1><a href="index.html">Ryo.com</a></h1>
      <div id="menu">
        <ul>
          <li><a href="#about">About me</a></li>
          <li><a href="#blog">Blog</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
    </header>
