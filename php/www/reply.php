<?php session_start(); ?>
<?php include './inc/language-prep.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
  <link rel="stylesheet" type="text/css" href="./inc/style.css" />
  <!-- SJCL -->
  <script type="text/javascript" src="./sjcl/sjcl.js"></script>
  <!--- CryptoJS AES Libraries --->
  <script src="./cryptojs/aes.js"></script>
  <script src="./cryptojs/enc-base64-min.js"></script>
  <!-- postilotta core -->
  <script src="general.js"></script>
</head>
<body>
<?php include 'module-head.php'; ?>
<div id="container" class="container">
  <h1><?php echo $ln['header'];?></h1>
  <div class="txt">
  <p id="out"></p>
  <p id="inf" class="inf"></p>
  <p id="err" class="err"></p>
  <p id="fileup"></p>
  </div>
</div>
<?php include 'module-banner-small.php'; ?>
<?php include 'module-footer.php'; ?>
<script>
  checkParaOn();
  checkLang();        // Prepare for multilanguage
  var str = window.location.href;
  var lnk = str.slice(str.indexOf("?")+1, str.length);
  loadRpl(lnk);
</script>
</body>
</html>
