<?php
  session_start();
  session_destroy();
  header("location:../?akses=logout"); // mengambalikan ke form_login.php
 ?>