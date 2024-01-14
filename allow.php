<?php
$email = $_POST['email'];
$password = $_POST[ 'password']

if(filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($password))
{
    echo "Email:" .$email . "Password:" .$password;

}
else{

    echo "INVALID EMAIL OR PASSWORD";
}

?>