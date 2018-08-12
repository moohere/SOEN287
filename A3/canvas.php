<?php
  $title = "Home";
  $email = $password = "";
  $email_error = $password_error = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // email validation
    if (empty($_POST['email'])){
      $email_error = "You have not entered an email.";
    } else {
      $email = test($_POST['email']);
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email_error = "Please enter a valid email.";
      }
    }
    // pwd validation
    if (empty($_POST['password'])){
      $password_error = "You have not entered a password.";
    } else {
      $password = test($_POST['password']);
      if (!preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[@#$%^&+*!=|?><])(?=.{8,}).*$/",$password)){
        $password_error = "Please enter a valid password. (Must contain 1 upper case, 1 lower case, 1 digit, 1 special character, and be at least 8 characters long.)";
      }
     }
  }

  // Function used to to test the inputs
  function test($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  // Question 2, verifying data
  $users = "key.txt";
  $username = $pass = "";
  if (file_exists($users) && is_file($users) && is_readable($users)) {
    //echo $username;
    $file = file("$users");
    $user = array();
    foreach($file as $line_num => $line){
      $user[] = $line;
    }
    $username = test($user[0]);
    $pass = $user[1];
  }

  if ($username == $email && $pass == $password){
    unset($email_error);
    unset($password_error);
    session_start();
    $_SESSION['email'] = $username;
    $_SESSION['password'] = $pass;
  }

 ?>
<!DOCTYPE html>
<html>
<head>
  <title><?php echo $title; ?></title>
</head>
<body>
  <?php if(isset($email_error) && strlen($email_error) > 1){?>
          <p>Error:<br/>
          <?php echo $email_error; ?><br/>
          Please go back and try again.</p>
  <?php } elseif (isset($password_error) && strlen($password_error) > 1){?>
            <p>Error:<br/>
            <?php echo $password_error; ?><br/>
            Please go back and try again.</p>
  <?php } elseif (!isset($email_error) && !isset($password_error)) { ?>
            <p>
            Welcome! You have successfully logged in.<br/>
            <?php echo $username;?>
            </p>
  <?php } else {?>
            <p>
            It looks like you have not registered for an account yet!<br/>
            </p>
            <?php }?>
  <a href="q1.html"><button type="button">Back</button></a>
</body>
</html>
