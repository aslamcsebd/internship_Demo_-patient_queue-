<?php
 define('HOST','localhost');         //hostname
 define('USER','root'); //username
 define('PASS','');        //user password
 define('DB','queue');  //database name
 
 $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');

?>