<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select user</title>
    <?php include 'links.php'?>
    <script>

    </script>
</head>
<body>
    <div class="tfc">
    <form action="" method="post">
        <h2>Transfer Credit</h2>
            <div class="trans_tbl">
            <div>
                <lable for="sender">Sender's Name</lable>
                    <select name="sender">
                    <option value="select sender">Select Sender</option>
                    <option value="Arav">Arav</option>
                    <option value="Aksh">Aksh</option>
                    <option value="Akash">Akash</option>
                    <option value="Anav">Anav</option>
                    <option value="Anupama">Anupama</option>
                    <option value="Anika">Anika</option>
                    <option value="Ayana">Ayana</option>
                    <option value="Arya">Arya</option>
                    <option value="Ansh">Ansh</option>
                    <option value="Aadi">Aadi</option>
                    </select><br><br>
            </div>
            <div> 
                <lable for="receiver">Receiver's Name</lable>
                    <select name="receiver">
                        <option value="select receiver">Select Receiver</option>
                        <option value="Arav">Arav</option>
                        <option value="Aksh">Aksh</option>
                        <option value="Akash">Akash</option>
                        <option value="Anav">Anav</option>
                        <option value="Anupama">Anupama</option>
                        <option value="Anika">Anika</option>
                        <option value="Ayana">Ayana</option>
                        <option value="Arya">Arya</option>
                        <option value="Ansh">Ansh</option>
                        <option value="Aadi">Aadi</option>
                        </select>
                        <br><br>
            </div>
                    <div>
                    <lable for="credit">Credit : </lable><input type="text" name="credit"><br><br>
                    </div>
            
            <div class="choose_4">
                <input type="submit" name="transfer credit" class="btn" value="Transfer Credit"></button>
                <a href="view_user.php"><input type="button"  name="back" class="btn" value="Back"></button></a>
            </div>

    </form>
    </div>
</body>
</html>
<?php
    include 'connection.php';
    if(isset($_POST["transfer credit"])){
        $sender = $_POST["sender"];
        $receiver = $_POST["receiver"];
        $credit = $_POST["credit"];

        $insertquery = $con->prepare("insert into  transaction(sender,receiver,credit) values('$sender','$receiver','$credit') ");
        $insertquery->execute();
        echo "success!";
        $insertquery->close();
        $con->close();
       
    }
?>