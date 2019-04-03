<!DOCTYPE html>
<html>
<head>
  <title>Contact</title>
  <?php 
      include 'include/Header.php';
   ?>
</head>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
input[type=tel] {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=email] {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
button[type=submit]:hover {
  background-color: #136E9A;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

  <?php 
    include "include/Navbar.php";
   ?>

  <header class="text-center">
    <h2>Contact</h2>
  </header>
<div class="container">
<?php if( isset($_GET["mailsend"])){
    echo "Mail is succesvol verzonden. Ik neem zo snel mogelijk contact met u op.";
} 

else{


?>

  <form action="contactForm.php" method="post">
    <label for="fname">Voor naam</label>
    <input type="text" id="fname" name="firstname" placeholder="Uw naam..">

    <label for="lname">Achternaam</label>
    <input type="text" id="lname" name="lastname" placeholder="Uw achternaam..">

    <label for="tel">Telefoon nummer</label>
    <input type="tel" id="tel" name="tel" placeholder="Telefoon nummer..">

    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="Hier uw Email..">

    

    <label for="subject">Vraag</label>
    <textarea id="subject" name="subject" placeholder="stel hier uw vraag.." style="height:200px"></textarea>

    <button name="submit" type="submit">verzenden</button>
  </form>
 <?php } ?>
</div>

<?php 
    include "include/Footer.php";
 ?>
</body>
</html>