<?php
setcookie('nome', '', time() - 3600);

header('location: login.php');
exit;