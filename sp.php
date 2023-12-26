
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing the php bool status</title>
</head>
<link rel="stylesheet" href="style.css">
<body>
    <form action="<?php htmlspecialchars($_SERVER[PHP_SELF]); ?>" method="POST">
         
    <input type="checkbox" name="staus" id="status">
      



    </form>
</body>
</html>
<?php
  $status = false;

  if(isset($_POST['status'])){
       $check_status = $_POST['status'];
        echo $check_status;

  }
?>