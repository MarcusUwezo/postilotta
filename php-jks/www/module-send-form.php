<?php include './inc/language-prep.php'; ?>
<form id="sendInbox">
  postilotta inbox address:<br>
  <input type="text" name="p_to" id="p_to" list="adds"  autocomplete="on" size="20" onchange="adrSelect(this);">#postilotta.org
  <img id="adr-typ" src="">
  <div class="tooltip">
    <img id="adr-idv" src="">
    <span class="tooltiptext"><?php echo $ln['tt_idv']; ?></span>
  </div>
  <datalist id="adds">
  </datalist>
  <br><br>
  Message:<br>
  <textarea name="p_text" id="p_text" cols="50" rows="10"></textarea>
  <br><br>
  Attachment: <p id="attReady"></p>
  <input type="file" class="button" id="attach" size="50" onchange="upAttach()">
  <br><br>
  When you hit the submit button, the following things will happen:
  <ul>
    <li>The message will be encrypted immediately. Recipients key will be the only way to decrypt it.</li>
    <li>The encrypted message will be signed with your key, so the recipient can be sure about who sent it (coming soon for premium).</li>
    <li>The signed message will be transferred as cipher data to the recipients inbox.</li>
    <li>The message will expire after 120 hours (resp. value of your settings) and then deleted automatically without any recovery option.</li>
  </ul>
  <br>
  <button type="button" id="send" class="button" onclick="sendNewMessage()">Submit</button>
</form>