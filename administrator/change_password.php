<?php
    session_start();

    if ( !isset($_SESSION['logged']) )
    {
        header('Location: index.php');
        exit();
    }

    require_once "connect.php";

    $connection = @new mysqli($host, $db_user, $db_password, $db_name);

    if ($connection->connect_errno != 0) {
        echo "Error: " . $connection->connect_errno;
    }
    else
    {
        $old_password = $_POST['old_password'];
        $new_password = $_POST['new_password'];

        if (($old_password == "") || ($new_password == ""))
        {
            header('Location: user_panel.php');
        }

        $sql = "UPDATE `administrators` SET `pass` = '$new_password' WHERE `pass` = '$old_password';";

        if ( $connection->query($sql) != true )
        {
            echo "Error: " . $connection->connect_errno;
        }

        $connection->close();
        header('Location: logout.php');
    }
?>