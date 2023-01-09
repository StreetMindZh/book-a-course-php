<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/styles.css">
     


     </head>

     <body>


     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="icon-bar">
  <a class="home" href="index.php"><i class="fa fa-home"></i></a>
  <a class="active" href="form.php"><i class="fa fa-arrows"></i></a>
  
</div>


    <img src="https://streetmindz.com/wp-content/uploads/2022/12/logo_streetmindz.com_the_pro_art_inc_gold_ac9975.svg" alt="StreetMindz Logo" class="center">
    <div class="content">

    <!-- The video -->
    <video autoplay muted loop id="myVideo">
        <source src="video/bg.mp4" type="video/mp4">
    </video>

  <?php
    $fname = htmlspecialchars(trim($_GET['fname']));
    $lname = htmlspecialchars(trim($_GET['lname']));
    $age = htmlspecialchars(trim($_GET['age']));
    $street = htmlspecialchars(trim($_GET['street']));
    $gender = htmlspecialchars(trim($_GET['gender']));
  ?>
  <div class="alert alert-success" role="alert">
    Thank you for submitting the form! Here is the information you provided:
    <ul>
      <li>First name: <?php echo $fname; ?></li>
      <li>Last name: <?php echo $lname; ?></li>
      <li>Age: <?php echo $age; ?></li>
      <li>Street: <?php echo $street; ?></li>
      <li>Gender: <?php echo $gender; ?></li>
    </ul>
  </div>
  <!-- rest of the page content -->
</body>

     </html>