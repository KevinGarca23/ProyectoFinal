<?php

if (isset($_SESSION['auth'])) {
    if ($_SESSION['auth']=="ok") {
    }else{
        redirect("login.php");
    }
}else {
    redirect("login.php");
}

?>