<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "credittwo";

    $con = mysqli_connect($server,$username,$password,$db);
    
    if($con){
        //echo "connection successfull";
?>
        <script>
            alert("Connection successfull!");
        </script>
<?php
    }else{
        echo "no connection";
        // use another method to show error----------o
        // die("no connection".mysqli_connect_error());
    }

?>