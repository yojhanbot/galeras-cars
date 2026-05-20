<?php
//database connection
    require('config/database.php');

    //get form data login
    $e_mail = $_POST['email'];
    $p_assword = $_POST['pswd'];
    $enc_pass=md5($p_assword);

    // Query
    $sql = "SELECT 
    u.* 
    FROM 
    users u 
    WHERE 
    u.email = $e_mail 
    AND 
    u.password = $enc_pass
    ";

    // Execute the query
    $result = pg_query($sql_login);
    if (!$result) {
        $num = pg_num_rows($result);
        if ($num > 0) {
            header('refresh:0;url=home.php');
        }else {
            echo "<script>alert('Login failed! Please check your email and password.');</script>";
            header('refresh:0;url=register.html');
        }
    }else {
        echo "Query error !!!.";
    }


?>