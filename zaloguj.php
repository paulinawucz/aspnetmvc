<?php

session_start();


require_once "connect.php";
$connect = @new mysqli($host, $db_user, $db_password, $db_name);

if($connect->connect_errno!=0)

{
echo "Error: ".$connect->connect_errno;
}

else
{
$login = $_POST['login'];
$password = $_POST['password'];

$sql = "SELECT * FROM uzytkownicy WHERE user='$login' AND pass='$password'";
if ($result=@$connect->query($sql))
{
	$how_user = $result->num_rows;
	if ($how_user>0)
	{
        $_SESSION['remember'] = true;
		$line=$result->fetch_assoc();
        $_SESSION['id'] = $line['id'];
		$_SESSION['user']=$line['user'];
        $_SESSION['email']=$line['email'];
        $_SESSION['dnipremium']=$line['dnipremium'];

        unset($_SESSION['error']);
		$result->close();
		header('Location: close.php');
	}
	else
	{
        $_SESSION['error'] = '<span style = "color:red"> Wrong login or password! Please try again!</span>';
        header('Location: index.php');
    }
}

$connect->close();
}
?>