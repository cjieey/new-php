<?php
    include("dbconnect.php");

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM admin_acc where username = '$username' and password = '$password'";

        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array ($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if($count == 1)
        {
            header("Location:home.php");
        }
        else{
            echo '<script>
            window.location.href = "../index.php";
            alert("Login Failed. Invalid username or password!!!");
            </script>';
        }

    }
?>




