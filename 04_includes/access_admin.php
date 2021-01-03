<?php
if(!$_SESSION['state'] && !$_SESSION['state'] === 'Loged in as Admin'){
    header('Location: login.php');
}
?>