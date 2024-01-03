<?php
if (isset($_GET["id"])){
    $id =$_GET["id"];

    $servername = "localhost";
    $username = "root";
    $password ="";
    $database ="";

    $connection =new mysqli($servername,$username,$password,$database);

    $sql = DELETE FROM   WHERE id=$id;
    $connection->query($sql);
}
?>