<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <title>M14_2_YU</title>
 <style>
     .gk {
          color: gray;
          font-style: italic; 
          }
  </style> 
<?php
function my_fopen($fname,$fmode)
{
 $f=fopen($fname,$fmode);
 if ($f===false)
 {
  echo "Error when opening file (".$fname."), exiting...<br>";
  exit(0);
 }
 return $f;
}

function my_opendir($fname)
{
 $f=opendir($fname);
 if ($f===false)
 {
  echo "Error when opening folder (".$fname."), exiting...<br>";
  exit(0);
 }
 return $f;
}

function my_file($fname)
{
 $a=file($fname);
 if ($a===false)
 {
  echo "Error when reading from file (".$fname."), exiting...<br>";
  exit(0);
 }
 return $a;
}
?>    

<?php 
$fname="registr.txt";
$f=my_fopen($fname,"a+");
$a="";
foreach($_POST as $kk=>$vv)
{
 $a=$a.$kk."=>".$vv.";";
}
$a=$a."\n";
echo $a."<br>";
fwrite($f,$a);
fclose($f);
echo "<hr>";
echo "Contents of ".$fname."<br>";
$a=my_file($fname);
$i=1;
foreach($a as $kk=>$vv)
{
echo $i++.": ".$vv."<br>";
}

echo "<hr>";
$e=null;
echo "<b>Логин:</b><br>";
    print  $_POST["login"];
    if($_POST["login"]=="$e")
    print "<font class='gk'>Не запoлнено!</font>";
    print "<br>";
echo "<b>Пароль:</b><br>";
    print  $_POST["pass1"];
    if($_POST["pass1"]=="$e")
    print "<font class='gk'>Не запoлнено!</font>";
    print "<br>"; 
echo "<b>Повторите Пароль:</b><br>";
    print  $_POST["pass2"];
    if($_POST["pass2"]=="$e")
    print "<font class='gk'>Не запoлнено!</font>";
    print "<br>";   
echo "<b>Электронная почта:</b><br>";
    print  $_POST["email"];
    if($_POST["email"]=="$e")
    print "<font class='gk'>Не запoлнено!</font>";
    print "<br>";    
echo "<b>Фамилия:</b><br>";
    print  $_POST["fn"];
    if($_POST["fn"]=="$e")
    print "<font class='gk'>Не запoлнено!</font>";
    print "<br>";    
echo "<b>Имя:</b><br>";
    print  $_POST["n"];
    if($_POST["n"]=="$e")
    print "<font class='gk'>Не запoлнено!</font>";
    print "<br>"; 
echo "<b>Пол:</b><br>";
if ($_POST['sex']=='Male') 
    echo 'Мужской<br>'; 
elseif ($_POST['sex']=='Female') 
    echo 'Женский<br>'; 
else echo '<font class="gk">Не выбран!</font><br>';
echo "<b>Дата рождения:</b><br>";
    print  $_POST["Day"];
    print "-";
    print  $_POST["Month"];
    print "-";
    print  $_POST["Year"];
    print "<br>";  
echo "<b>Ваш  социальный статус:</b><br>";
if ($_POST['a']=='a1')    
    echo "Учащийся<br>";
if ($_POST['a']=='a2')    
    echo 'Работающий<br>';
if ($_POST['a']=='a3')    
    echo 'Безработный<br>';
if ($_POST['a']=='a4')   
    echo 'Пенсионер<br>';
elseif($_POST["a"]=="$e")
    echo '<font class="gk">Не выбран!</font><br>';
echo "<b>Ваши литературные предпочтения:</b><br>";
    if(isset($_POST["m"]))
    foreach ($_POST["m"] as $kk=>$vv)
    {print "$vv <br>";}
    elseif($_POST["m"]=="$e")
    print "<font class='gk'>Не выбрано!</font><br>"; 
echo "<b>Дополнительно:</b><br>";
    print $_POST["comments"];
    print "<br>";
?>
     <form action="http://localhost/M14_yu/login.php" method="POST">
     <p><input type="submit" value="Сохранить">
         </p>
    </form>
</body>
</hmtl>