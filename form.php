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
    <h1>Bitte trage deine vollständigen Angaben ein!</h1>


    <!-- The video -->
    <video autoplay muted loop id="myVideo">
        <source src="video/bg.mp4" type="video/mp4">
    </video>
    


    <div class="alert alert-success" role="alert">
         
        <form action="thankyou.php" onsubmit="return validateForm()">
            <!--Start First Name input field-->
            <label for="fname">FirstName:</label><br>
            <input type="text" id="fname" name="fname"><br>
            <!-- End Firstname input field-->

            <!-- Start Last Name input field-->
            <p id="message-1"></p>
            <label for="lname">LastName:</label><br>
            <input type="text" id="lname" name="lname" value=""><br><br>
            <p id="message-2"></p>
            <!-- End Last Name input field-->


            <!-- Start Age input field-->
            <label for="age">age:</label><br>
            <input type="number" id="age" name="age" value=""><br><br>
            <p id="message-3"></p>
            <!-- End Age input field -->

            <!-- Start Street input field-->
            <label for="street">Street:</label><br>
            <input type="text" id="street" name="street"><br>
            <p id="message-4"></p>
            <!-- End Street input field-->

            <!-- Start HTML greeting input field-->
            <label for="gender">Gender:</label>
                <select id="gender" name="gender">
                    <option value=""></option>  
                    <option value="man">Man</option>
                    <option value="woman">Woman</option>
                    <option value="other">Other</option>
                </select>
                <p id="message-5"></p>
            <!-- End HTML greeting input field-->
            
            <input type="submit" value="Submit">

            
            <!-- <input type="submit" value="Submit"> -->
        </form>

      <!---  <button onclick="validateFirstName();validateLastName();validateAge();validateStAdress();">Validieren</button> -->

    

      <?php

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $errors = array();

                $fname = trim($_POST['fname']);
                $lname = trim($_POST['lname']);
                $age = trim($_POST['age']);
                $street = trim($_POST['street']);
                $gender = trim($_POST['gender']);

            if (empty($fname)) {
                $errors[] = 'First name is required';
            }
            if (empty($lname)) {
                $errors[] = 'Last name is required';
            }
            if (empty($age)) {
                $errors[] = 'Age is required';
            }
            if (empty($street)) {
                $errors[] = 'Street is required';
            }
            if (empty($gender)) {
                $errors[] = 'Gender is required';
            }

            if (empty($errors)) {
                // form is valid, redirect to thank you page
                header('Location: thankyou.php?fname=' . urlencode($fname) . '&lname=' . urlencode($lname) . '&age=' . urlencode($age) . '&street=' . urlencode($street) . '&gender=' . urlencode($gender));
                exit;
            }
            }

        ?>


        <!-- The rest of the HTML code for the form goes here -->

        
    </div>

</div>


</body>
</html>