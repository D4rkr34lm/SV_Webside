<?php 
    require "../dbAccess.php";

    $input_username = $_POST["username"];
    $input_password = $_POST["password"];


    if($input_username == "" || $input_password == ""){
        header("Location: \\index.php?go=admin_login&status=unfinished");
    }

    $database = mysqli_connect($db_host, $db_username, $db_pw, $db_name);

    $login_data_query = "SELECT * FROM admins";

    $result = mysqli_query($database, $login_data_query);

    while($row = mysqli_fetch_row($result)){
        $login_data[$row[1]] = $row[2];
        $admin_emails[$row[1]] = $row[3];
    }

    if(key_exists($input_username, $login_data) && password_verify($input_password, $login_data[$input_username])){
        $_SESSION["admin_login"] = true;
        $_SESSION["admin_name"] = $input_username;
        $_SESSION["admin_email"] = $admin_emails[$input_username];
        header("Location: \\index.php");
    }
    else{
        header("Location: \\index.php?go=admin_login&status=wrong");
    }

    mysqli_close($database);

?>