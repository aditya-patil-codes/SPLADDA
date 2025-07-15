<?php
session_start();
require('connection.php');




if (isset($_POST['admin_login'])) {
  $query = "SELECT * FROM `admin` WHERE  `username`='$_POST[email]'";
  $result = mysqli_query($con, $query);

  if ($result) {
    if (mysqli_num_rows($result) == 1) {
      $result_fetch = mysqli_fetch_assoc($result);
      if ($_POST['password'] == $result_fetch['password']) {
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $result_fetch['username'];
        header("location: admin.php");
      } else {
        echo "
          <script>
            alert('Incorrect Password');
            window.location.href='login.php';
          </script>
        ";
      }
    } else {
      echo "
        <script>
          alert('Email or Username Not Registered');
          window.location.href='index.php';
        </script>
      ";
    }
  } else {
    echo "
      <script>
        alert('Cannot Run Query');
        window.location.href='index.php';
      </script>
    ";
  }
}









if (isset($_POST['upload'])) {


  echo $name = $_POST['name'];
  echo $category = $_POST['category'];
  echo $file = $_FILES['file']['name'];


  $target_file2 = basename($file);
  $imageFileType2 = strtolower(pathinfo($target_file2, PATHINFO_EXTENSION));
  $check2 = $_FILES['file']['tmp_name'];
  $extension2 = substr($file, strlen($file) - 4, strlen($file));
  $image_ext2 = pathinfo($file, PATHINFO_FILENAME);
  $Final_image_name2 = $image_ext2 . date("mjYHis") . "." . $imageFileType2;
  $destination2 = "uploaddocs/.$Final_image_name2";


  move_uploaded_file($check2, $destination2);







  $sql = "INSERT INTO `news`( `name`, `category`, `file`) VALUES ('$name','$category','$Final_image_name2')";

  $result = $con->query($sql);

  if ($result) {
    echo "
              <script>
                alert('Your News Latter has been uploaded successfully');
                window.location.href='admin.php';
              </script>
            ";
  } else {
    echo "
              <script>
                alert('Error Try again Later...');
                window.location.href='admin.php';
              </script>
            ";
  }
}
