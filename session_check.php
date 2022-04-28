<?php

if($_SESSION['bio']==NULL)
{
    header('location:index2.php?msg=LoginFirst');
}
?>