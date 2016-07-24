<?php
 session_start();
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <title>Library</title>
   </head>
<body>
<h1 align="center"> <font color="red">БИБЛИОТЕКА</font></h1>    
<hr>
<?php
$user="admin";
$pass="admin";
/*if ( isset ($user) AND isset ($pass))
$users = file("registr.txt");    
foreach ($users as $user)    
 if ($u['login'] == $user and $u['pass1'] == $pass)
    {
     break;   
    }*/
if ($_POST['logout']==12)
{
 unset($_SESSION['user']);
}

if (
    ($user==$_POST['user'])&&
    ($pass==$_POST['pass'])
   )
{

 $_SESSION['user']=$user;
}
else if (isset($_POST['user']))
{
 echo "<b>Логин или пароль введены не верно!<b><br>";
 exit(0);
}


if (!isset($_SESSION['user']))
{
echo '    
<form action="" method="POST">
     <fieldset style="width: 100px">
    <legend>Вход на сайт</legend>
    <p> Логин: <input name="user" required></p>
    <p> Пароль:<input type="password" name="pass" required></p>
    <p><input type="submit" value="Вход"></p>
</form>        
<form action="http://localhost/M14_yu/registrationform.html" method="POST">     
    <p><a ><input type="submit" value="Регистрация"></a></p>     
     </fieldset>
    </form>
';
    exit(0);
}
else
{
echo "
<form action='' method=POST>
 <input type=hidden name=logout value='12'>
 <input type=submit value='Выход'><br>
</form>
<hr>
";
}
if (!isset($_SESSION['user']))
{
 exit(0);
}
echo "<b>Добро пожаловать на сайт,</b> ".$_SESSION['user']."!"."<br>!";

echo "<img src='http://evo-m.ru/wp-content/uploads/2013/09/150.jpg' width='300px' alt='This is a Library'>";
?>
</body>
</html> 