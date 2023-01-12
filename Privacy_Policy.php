<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Privacy</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <style>

       .justi{
        text-align: justify;   
        }
        .psize{
            font-size: 15px;
        }
        .lsize{
            font-size: 13px;
            margin-left: 4%;
            padding: 1%;
        }
    </style>

</head>
<body>
   
<?php include 'header.php'; ?>
<div style="margin-top: 2%;"></div>

<div><center><p style="font-size: 35px; font-weight:500;">Privacy Policy</p></center></div>

<div style="text-align:justify; width:45%; margin-left:27%; ">

<br>
<br>
<br>
<center><p class="psize">Welcome to shop21!</p></center>
<br>
<br>

<h2><strong>Reservation of Rights</strong></h2>
<br>
<p class="psize">We reserve the right to request that you remove all links or any particular link to our Website. You approve to immediately remove all links to our Website upon request. We also reserve the right to amen these terms and conditions and it’s linking policy at any time. By continuously linking to our Website, you agree to be bound to and follow these linking terms and conditions.</p>
<br>
<h2><strong>Removal of links from our website</strong></h2>
<br>
<p class="psize">If you find any link on our Website that is offensive for any reason, you are free to contact and inform us any moment. We will consider requests to remove links but we are not obligated to or so or to respond to you directly.</p>
<br>
<p class="psize">We do not ensure that the information on this website is correct, we do not warrant its completeness or accuracy; nor do we promise to ensure that the website remains available or that the material on the website is kept up to date.</p>
<br>
<h2><strong>Disclaimer</strong></h2>
<br>
<p class="psize">To the maximum extent permitted by applicable law, we exclude all representations, warranties and conditions relating to our website and the use of this website. Nothing in this disclaimer will:</p>
<br>
<ul class="lsize">
    <li>limit or exclude our or your liability for death or personal injury;</li>
    <li>limit or exclude our or your liability for fraud or fraudulent misrepresentation;</li>
    <li>limit any of our or your liabilities in any way that is not permitted under applicable law; or</li>
    <li>exclude any of our or your liabilities that may not be excluded under applicable law.</li>
</ul>
<br><br>
<p class="psize">The limitations and prohibitions of liability set in this Section and elsewhere in this disclaimer: (a) are subject to the preceding paragraph; and (b) govern all liabilities arising under the disclaimer, including liabilities arising in contract, in tort and for breach of statutory duty.</p>
<br>
<p class="psize">As long as the website and the information and services on the website are provided free of charge, we will not be liable for any loss or damage of any nature.</p>

</div>

<div style="margin-bottom: 5%;"></div>
<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>