<?php
session_start();
session_unset();
session_destroy();
header("Location: login.html"); // o donde tengas tu página de login
exit();
?>
