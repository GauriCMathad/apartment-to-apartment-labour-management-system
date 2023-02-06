<?php
session_destroy();
session_unset();
session_destroy();
header("Location:first-login.php");
exit;