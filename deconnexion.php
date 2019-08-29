<?php

    // CREATION D'UNE SESSION
    session_start();

    include 'include/bdd.inc.php';
 
 ?>
 
<!DOCTYPE html>
<html>


<!--  INCLUSION DU HEAD -->
<?php     include 'include/head.inc.html'; ?>

    <body>
 
    <!-- INCLUSION DU HEADER -->
<?php  
    include 'include/nav.inc.php'; ?>
 
    <div class="container-fluid">
        <div class="row">
 
<?php


        session_destroy();
        header("Location: index.php");
    
?>

        </div>
    </div>
    
    <!-- INCLUSION DU FOOTER -->
<?php include 'includes/footer.inc.html'; ?>
 
    </body>
</html>