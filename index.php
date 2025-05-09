<?php

   echo"v1";
   echo"v2";
   echo"v3";
   
   include "classes/encrypt.php";
   include "thirdparty/enc.php";

   // using the namespace with the class to avoid the classes collision
   use encrypt\encrypt as projectenc;
   use thirdparty\encrypt as thirdparty;

   $project_enc = new projectenc;
   $thirdparty_enc = new thirdparty;

   $project_enc->enc();
   $thirdparty_enc->tp_enc();
?>