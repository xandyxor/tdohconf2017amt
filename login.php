<?php
//$flag = "TDOHCONF{}";
if (isset($_POST["username"]) and isset($_POST["password"]) )
{
    if( ($_POST["username"]) == "" or ($_POST["password"]) == "" ){
        echo "plz input username and password!";
        echo '<meta http-equiv="refresh" content="3;url=amt.php">';               
        exit;

    }else{
        $username = (string)$_POST["username"];
        $password = (string)$_POST["password"];
        $token = (string)$_POST["token"];
        
        if(strncmp($token,sha1(rand()),strlen($token)) === 0){
            if(strncmp($username,"root",strlen($username)) === 0){
                if( strncmp($password,"9487",strlen($password)) === 0){
                    echo $flag;
                }else{
                    echo "password error";
                    echo '<meta http-equiv="refresh" content="3;url=amt.php">';               
                    exit;
                }
            }else{
                echo "username cant not find!";
                echo '<meta http-equiv="refresh" content="3;url=amt.php">';               
                exit;
            }
        }else{
            echo "token error!";
            echo '<meta http-equiv="refresh" content="3;url=amt.php">';               
            exit;
        }

    }
}
?>
