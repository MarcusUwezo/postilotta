<?php include 'inc/settings.inc'; ?>
<div class="lang" style="">
  <select id="p_lang" name="p_lang" onchange="changeLang(this);">
    <option id="o_ln_de" value="de">de</option>
    <option id="o_ln_en" value="en">en</option>
  </select>
  <script>
    document.getElementById('o_ln_' + '<?php echo $_SESSION['plang']; ?>' ).selected = true;
  </script>

</div>
  <div id="logoframe" style="display:inline;">
  <a href="index.php"><img id='logo' src='<?php echo $logo; ?>' alt='postilotta'></a>
  </div>


<!-- Large Top Nav-->
<ul class="topnav">
  <li><a id="tn-li-send" class="hide-small" href="send.php"><?php echo $ln['sendto']; ?></a></li>
  <li><a id="tn-li-login" class="hide-small" href="login.php"><?php echo $ln['login']; ?></a></li>
  <li><a id="tn-li-signup" class="hide-small" href="signup.php"><?php echo $ln['signup']; ?></a></li>
  <li><a id="tn-li-premium" class="hide-small" href="premium.php"><?php echo $ln['premium']; ?></a></li>
  <li><a id="tn-li-contact" class="hide-small" href="contact.php"><?php echo $ln['contact']; ?></a></li>
  <li><a id="tn-li-donate" class="hide-small" href="donate.php"><?php echo $ln['donate']; ?></a></li>
  <li style="float:right"><a id="tn-li-para" class="hide-small" href="paranoia.php"><?php echo $ln['extrasecure']; ?></a></li>
  <li><a id="tn-li-menu" href='#' style="display:none" class="show-small" onclick="replaceNav()">&#9776;</a></li>
</ul>
<!-- Mobile Top Nav-->
<ul id="monnav" class="topnav" style="display:none">
  <li><a id="mn-li-send" href="send.php"><?php echo $ln['sendto']; ?></a></li>
  <li><a id="mn-li-login" href="login.php"><?php echo $ln['login']; ?></a></li>
  <li><a id="mn-li-signup" href="signup.php"><?php echo $ln['signup']; ?></a></li>
  <li><a id="mn-li-premium" href="premium.php"><?php echo $ln['premium']; ?></a></li>
  <li><a id="mn-li-contact" href="contact.php"><?php echo $ln['contact']; ?></a></li>
  <li><a id="mn-li-donate" href="donate.php"><?php echo $ln['donate']; ?></a></li>
  <li><a id="mn-li-para" href="paranoia.php" id="tn-li-para"><?php echo $ln['extrasecure']; ?></a></li>
</ul>
