<html>
<head>
  <meta charset="UTF-8">
  <title>Test</title>
  <link type="text/css" rel="stylesheet" href="<?php echo URL; ?>public/css/jquery-ui.css">
  <link type="text/css" rel="stylesheet" href="<?php echo URL; ?>public/css/default.css">
  <script type="text/javascript" src="<?php echo URL; ?>public/js/jquery-3.1.1.js"></script>
  <script type="text/javascript" src="<?php echo URL; ?>public/js/jquery-ui.js"></script>
  <script type="text/javascript" src="<?php echo URL; ?>public/js/custom.js"></script>
<!--  <script>-->
<!--    $(function() {-->
<!--      $('#test2').datepicker();-->
<!--    });-->
<!--  </script>-->
  <?php
  if (isset($this->js)) {
    foreach ($this->js as $js) {
      echo "<script type=\"text/javascript\" src=\"".URL."views/".$js."\"></script>";
    }
  }
  ?>
</head>
<body>
<!--<input id="test2" />-->
<?php Session::init(); ?>
<div id="header">
  <?php if (Session::get('loggedIn') == false): ?>
  <a href="<?php echo URL; ?>index">Index</a>
  <a href="<?php echo URL; ?>help">Help</a>
  <?php endif; ?>

  <?php if (Session::get('loggedIn') == true) { ?>
    <a href="<?php echo URL; ?>dashboard">Dashboard</a>

    <?php if (Session::get('role') == 'owner'): ?>
      <a href="<?php echo URL; ?>user">Users</a>
    <?php endif; ?>

    <a href="<?php echo URL; ?>dashboard/logout">logout</a>
  <?php } else { ?>
    <a href="<?php echo URL; ?>login">Login</a>
  <?php } ?>
</div>
<div id="content">

  <!--</div>-->
  <!--</body>-->
  <!--</html>-->
