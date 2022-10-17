<?php
session_start();

if (empty($_POST['email']) || empty($_POST['password'])) {
  throw new Exception("Bạn cần nhập đẩy đủ email và password");
} else {
  $email = htmlspecialchars($_POST['email']);
  $password = htmlspecialchars($_POST['password']);
}

try {
  require "./connect.php";
  $sql = "select * from admin
  where email = '$email' and password = '$password'";
  $arr_result = mysqli_query($connect, $sql);

  if (mysqli_num_rows($arr_result) === 1) {
    $result = mysqli_fetch_array($arr_result);
    $_SESSION['id'] = $result['id'];
    $_SESSION['name'] = $result['name'];
    $_SESSION['level'] = $result['level'];
    echo json_encode(["login" => true]);
  } else {
    echo json_encode(["login" => false]);
  }
} catch (Exception $e) {
  echo $e->getMessage();
}
mysqli_close($connect);
