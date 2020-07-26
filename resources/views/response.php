<?php
  // The global $_POST variable allows you to access the data sent with the POST method by name
  // To access the data sent with the GET method, you can use $_GET

  //echo "<script>alert(\"Ваша заявка принята\");</script>";
    $number = htmlspecialchars($_POST['number']);
    echo "<script>alert(\"Ваша заявка принята\");</script>";
    header("refresh:0.1; url= http://localhost:8000/");
    exit();
//return redirect('name')->withSuccess('Ваша заявка принята');
?>
