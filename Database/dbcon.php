<?php
    $server='sql211.ultimatefreehost.in';
    $user='ltm_25547228';
    $password='bipulrinku';
    $db='ltm_25547228_coronadb';
    $con=mysqli_connect($server,$user,$password,$db);
    if($con){
        ?>
        <script>
           alert("connection successfull");
        </script>
        <?php
    } else{
        ?>
        <script>
           alert("connection unsuccessfull");
        </script>
        <?php
    }








?>