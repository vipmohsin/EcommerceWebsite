<?php
include("conf.php");


session_destroy();

echo "<script>alert('Logged Out')
            document.location='index.php'</script>";

?>