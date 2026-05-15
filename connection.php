<?php
         $server      ="localhost";
         $user        ="root";
         $password    ="";
         $dbname       ="medpro_wll";

         $conn =mysqli_connect($server, $user,$password,$dbname);
if(!$conn)
    {echo "not connected";}


?>