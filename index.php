<?php
include_once('./index.html');
include_once('./connection.php');

$name=$_POST['username'];
$mobile=$_POST['usermobile'];
$email=$_POST['usermail'];

if(isset($_POST['username'])){
    $insert=mysqli_query($conn,"INSERT INTO userdetails (name,mobile,email) VALUES ('$name','$mobile','$email')");
    if($insert){
        echo'
        <script>
        window.location="./thanks.html";
        </script>
        ';

    }
}

?>