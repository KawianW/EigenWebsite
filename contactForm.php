<?php 
  if(isset($_POST["submit"])){
    $firstname = $_POST["firstname"];
     $lastname = $_POST["lastname"];
      $subject = $_POST["subject"];
      $email = $_POST["email"];

      $mailTo = "KawianWali@hotmail.com";
      $headers = "from: " . $email;
      $text = "Je hebt een mail ontvangen van " . $firstname . " " . $lastname;

      mail($mailTo, $text, $subject, $headers);
      header("Location: Contact.php?mailsend=1");
  }
 ?>