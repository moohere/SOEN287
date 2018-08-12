<?php
  session_start();
  $body=$h1=$h4=$header=$table=$rows=$p=$button="";

  if ($_SESSION['text'] == "body") {
    $body_color = $_SESSION['color'];
    $body_font = $_SESSION['font'];
    $body_visibility = $_SESSION['visibility'];
  }
  if ($_SESSION['text'] == "bodyDiv") {
    $bodyd_color = $_SESSION['color'];
    $bodyd_font = $_SESSION['font'];
    $bodyd_visibility = $_SESSION['visibility'];
  }
  if ($_SESSION['text'] == "header") {
    $header = 1;
  }
  if ($_SESSION['text'] == "h1"){
    $h1_color = $_SESSION['color'];
    $h1_font = $_SESSION['font'];
    $h1_visibility = $_SESSION['visibility'];
  }
  if ($_SESSION['text'] == "h4") {
    $h4_color = $_SESSION['color'];
    $h4_font = $_SESSION['font'];
    $h4_visibility = $_SESSION['visibility'];
  }
  if ($_SESSION['text'] == "table") {
    $table_color = $_SESSION['color'];
    $table_font = $_SESSION['font'];
    $table_visibility = $_SESSION['visibility'];
  }
  if ($_SESSION['text'] == "tr") {
    $tr_color = $_SESSION['color'];
    $tr_font = $_SESSION['font'];
    $tr_visibility = $_SESSION['visibility'];;
  }
  if ($_SESSION['text'] == "p") {
    $p_color = $_SESSION['color'];
    $p_font = $_SESSION['font'];
    $p_visibility = $_SESSION['visibility'];
  }
  if ($_SESSION['text'] == "button") {
    $button_color = $_SESSION['color'];
    $button_font = $_SESSION['font'];
    $button_visibility = $_SESSION['visibility'];
  }
  if ($_SESSION['text'] == "submit") {
    $submit_color = $_SESSION['color'];
    $submit_font = $_SESSION['font'];
    $submit_visiblity = $_SESSION['visibility'];
  }

//echo $_SESSION['text'];
?>
<!DOCTYPE>
<html>
<head>
  <title>Canvas Out</title>
</head>
<body style="background-color:<?php echo $body_color;?>;font-size:<?php echo $body_font;?>; visibility:<?php echo $body_visibility;?>;">
  <div class="bodyDiv" style="background-color:<?php echo $bodyd_color;?>;font-size:<?php echo $bodyd_font;?>; visibility:<?php echo $bodyd_visibility;?>;">
    <div class="header">
      <h1 style="color:<?php echo $h1_color;?>;font-size:<?php echo $h1_font;?>; visibility:<?php echo $h1_visibility;?>;">Paypal</h1>
      <h4 style="color:<?php echo $h4_color;?>;font-size:<?php echo $h4_font;?>; visibility:<?php echo $h4_visibility;?>;">Please login below:</h4>
    </div>
    <table border="2" style="background-color:<?php echo $table_color;?>;font-size:<?php echo $table_font;?>; visibility:<?php echo $table_visibility;?>;">
      <tbody>
          <tr style="color:<?php echo $tr_color;?>;font-size:<?php echo $tr_font;?>; visibility:<?php echo $tr_visibility;?>;">
            <td>Email:</td>
            <td><input type="email" name="email" class="email" placeholder="Email"/></td>
          </tr>
          <tr style="color:<?php echo $tr_color;?>;font-size:<?php echo $tr_font;?>; visibility:<?php echo $tr_visibility;?>;">
            <td> Password:</td>
            <td><input type="password" name="password" class="password" placeholder="Password"/></td>
          </tr>
          <tr>
            <td colspan="2"><input type="submit" name="submit" id="submit" value="Login" style="color:<?php echo $submit_color;?>;font-size:<?php echo $submit_font;?>; visibility:<?php echo $submit_visibility;?>;"/></td>
          </tr>
      </tbody>
    </table>
    <p style="color:<?php echo $p_color;?>;font-size:<?php echo $p_font;?>; visibility:<?php echo $p_visibility;?>;"> New to Paypal? Sign Up </p>
  </div>
</body>
<br/>
<a href="canvas.php"><button type="button">Edit</button></a>
</html>
