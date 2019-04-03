<!DOCTYPE html>
<html>
<head>
  <title>Skils</title>
    <?php 
        include "include/Header.php";
     ?>
</head>
<body>

<?php 
    include 'include/Navbar.php';
 ?>


  <header class="text-center">
    <h3 class="mb-5 pb-2">
       Dit zijn mijn vaardigheden.
    </h3>
  </header>

<div class="container" id="progressOne">
              <div class="progress" style="height: 4%;">
                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="5" style="width: 80%; background-color: rgb(241, 101, 41);">
                          <span>HTML5</span>
                    </div>
            </div>
            <div class="progress mt-3" style="height: 4%;">
                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="5" style="width: 65%; background-color: rgb(27, 131, 190);">
                          <span>CSS</span>
                    </div>
              </div>
              <div class="progress mt-3" style="height: 4%;">
                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="5" style="width: 50%; background-color: rgb(255, 218, 62);">
                          <span>JavaScript</span>
                    </div>
              </div>
              <div class="progress mt-3" style="height: 4%;">
                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="5" style="width: 30%; background-color: rgb(79, 91, 147);">
                          <span>PHP</span>
                    </div>
              </div>
        </div>
  <footer class="mt-5">
        <?php 
            include 'include/Footer.php';
         ?>
  </footer>
</body>
</html>

