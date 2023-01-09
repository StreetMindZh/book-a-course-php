<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FrontPage - StreetMindz Academy</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/styles.css">

</head>
<body> 

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="icon-bar">
  <a class="active" href="#"><i class="fa fa-home"></i></a>
  <a class="form" href="form.php"><i class="fa fa-arrows"></i></a>
  
</div>

    <div>


    <!-- The video  2-->
      <video autoplay muted loop id="myVideo2">
        <source src="video/szm.mp4" type="video/mp4">
      </video>

      <!-- Optional: some overlay text to describe the video -->
      <div class="content2">
        <h1>Welcome @ StreetMindz Academy the place to be while learning the future!</h1>
        <p>"the professional artist incubator"</p>
        <!-- Use a button to pause/play the video with JavaScript -->
        <button id="myBtn2" onclick="myFunction()">SIGN UP FORM</button>
      </div>

    </div>

    <script>
      // Get the video
      var video = document.getElementById("myVideo2");
      
      // Get the button
      var btn = document.getElementById("myBtn2");
      
      // Pause and play the video, and change the button text
      function myFunction() {
     window.location.href = "form.php";
      
      }
      </script>
    

</body>
</html>