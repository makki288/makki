<?php
session_start();
session_unset();
session_destroy();
echo '<meta http-equiv="refresh" content="2;url=home.php" />';
?>
<center>
    <h1>تم تسجيل الخروج بنجاح ، الى اللقاء</h1>
</center>