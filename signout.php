<?php
if(!isset($_SESSION['username']))
{
session_destroy();
header("Location: home.htm");
}
?>