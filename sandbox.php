<?php 

  // superglobals

  // echo $_SERVER['SERVER_NAME'] . '<br>';
  // echo $_SERVER['REQUEST_METHOD'] . '<br>';
  // echo $_SERVER['SCRIPT_FILENAME'] . '<br>';
  // echo $_SERVER['PHP_SELF'] . '<br>';

  if (isset($_POST['submit'])) {
    
    // cookie for gender
    setcookie('gender', $_POST['gender'], time() + 86400);

    session_start();

    $_SESSION['name'] = $_POST['name'];

    header('Location: index.php');
  }

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PHP TUTS</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <form action="<?php  echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <input type="text" name="name">
    <select name="gender" id="">
      <option value="male">Male</option>
      <option value="female">Female</option>
    </select>
    <input type="submit" name="submit" value="submit">
  </form>
</body>
</html>