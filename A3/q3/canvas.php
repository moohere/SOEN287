<?php
session_start();
if(!isset($_COOKIE["visits"])){
  $_COOKIE["visits"] = 0;
  setcookie("visits", $_COOKIE["visits"]+1, time() + 60);
} else {
  $_COOKIE["visits"]++;
}
setcookie("visits", $_COOKIE["visits"], time() + 60);
?>

<!DOCTYPE html>
<html>
<head>
<title>Canvas</title>
<link rel="stylesheet" type="text/css" href="q1.css">
</head>
<body>
  <form method="post" action="">
    <div class="body">
      <input type="text" name="text" class="text" placeholder="Enter"><br/>
      <input type="range" min="1" max="50" value="12" class="slider" name="font"><br/>
      <input type="color" name="color" value="#ff0000"><br/>
      <input type="checkbox" name="visibility" value="visible" checked>Visible<br/>
      <input type="checkbox" name="visibility" value="hidden">Invisible<br/>
      <input type="submit" name="submit" value="Make Changes" id="submit"><br/>
    </div>
  </form>
  <a href="canvasOut.php"><button type="button">View</button></a>
</body>
</html>

<?php
if (isset($_POST['text'])){
  $_SESSION['text'] = $_POST['text'];
}
if (isset($_POST['font'])){
  $_SESSION['font'] = $_POST['font'];
}
if (isset($_POST['color'])){
  $_SESSION['color'] = $_POST['color'];
}
if (isset($_POST['visibility'])){
  $_SESSION['visibility'] = $_POST['visibility'];
}
?>
