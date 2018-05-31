<?php

session_start();

if(isset($_POST['email']))
{
    $everything_OK = true;

    //nick
    $nick = $_POST['nick'];

    //nick's lenght
    if ((strlen($nick)<3) || (strlen($nick)>20))
    {
    $everything_OK = false;
    $_SESSION['e_nick'] = "the nickname must be between 3 and 20 characters long";
    }

    if (ctype_alnum($nick)==false)
    {
    $everything_OK=false;
    $_SESSION['e_nick']="A nickname can consist of letters and numbers only";
    }

    //email
    $email = $_POST['email'];
    $emailB = filter_var($email, FILTER_SANITIZE_EMAIL);
    if((filter_var($emailB, FILTER_VALIDATE_EMAIL)==false) || ($emailB!=$email))
    { 
    $everything_OK=false;
    $_SESSION['e_email'] = "Provide a valid email address";
    }

    //password
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];

    if((strlen($pass1)<8) || (strlen($pass1)>20))
    {
       $everything_OK=false;
    $_SESSION['e_pass'] = "The password must be between 8 and 20 characters long";
    }

    if ($pass1!=$pass2)
    {
    $everything_OK=false;
    $_SESSION['e_pass']="The entered passwords are not identical";
    }

    $pass_hash = password_hash($pass1, PASSWORD_DEFAULT);
   
    //regulamin
    if(!isset($_POST['regulamin']))
    {
    $everything_OK=false;
    $_SESSION['e_regulamin']="Confirm acceptance of the regulations";
    }

    require_once "connect.php";   
    mysqli_report(MYSQLI_REPORT_STRICT);


    try
    {
    $connect = new mysqli($host, $db_user, $db_password, $db_name );
    if ($connect->connect_errno!=0)
    { 
    throw new Exception(mysqli_connect_errno());
    }
    else
    {
        //does the e-mail already exist?
            $result = $connect->query("SELECT id FROM uzytkownicy WHERE email='$email'");

            if (!$result) throw new Exception($connect->error);
            $how_many_email = $result->num_rows;
            if($how_many_email>0)
            {
            $everything_OK=false;
            $_SESSION['e_email']="an account with this email address already exists";
            }

            //does nick already exist?
            $result = $connect->query("SELECT id FROM uzytkownicy WHERE uder ='$nick'");

            if (!$result) throw new Exception($connect->error);
            $how_many_nicks = $result->num_rows;
            if($how_many_nicks>0)
            {
            $everything_OK=false;
            $_SESSION['e_nick']="an account with this nick already exists";
            }
       
                 if ($everything_OK == true)
                {
                if ($connect->query("INSERT INTO uzytkownicy VALUES(NULL, '$nick', '$pass_hash', '$email', 14)"))
                {
                $_SESSION['successfulreg']=true;
                header('Location: close.php');
                }
                else
                {
                throw new Exception($connect->error);
                }
            }


    $connect->close();
    }
   }
   
    catch(Exception $e)
    {
    echo '<span style="color:red;">Server error</span>';
    
    }
       
}

?>