<!-- <?php
session_start();
session_destroy();
header("Location: owner-login.php");
?> -->




<?php
session_start();
session_unset();
session_destroy();
header("Location: owner-login.php");
exit;
?>
