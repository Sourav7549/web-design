<?php

$con=mysqli_connect("localhost","root","","mentalhealth");

if (mysqli_connect_error())
    {
        echo"<script>alert('Connection Failed.');</script>";
    }
?>
