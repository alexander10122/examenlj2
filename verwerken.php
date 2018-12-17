<html>


</html>
<head>


</head>
<header>

</header>
<body>






<p>hi</p>



<?php

require("config.php");
session_start();

if (isset($_GET['submit']))
{

    $uname=$_GET['username'];
    $pass=$_GET['password'];

    mysqli_query($conn,"SELECT username FROM account WHERE username='$uname' and password='$pass');");
    if (mysqli_num_rows($conn) != 0


    )
    {
        echo 'nice';
        header('location beveiligd.php');
    }
    else
    {
        echo "fout in ingevoerde gegevens";
    }
}
?>










<footer>

</footer>
</body>
</html>
