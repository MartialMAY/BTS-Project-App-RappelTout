<?php
    
  
    session_start();
    session_destroy();
  
    header("Location: Page_login.php");
?>