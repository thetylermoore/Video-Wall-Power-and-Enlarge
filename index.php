<html>
<head>
<meta charset="UTF-8" />
<title>PHP and Python Test</title>
</head>

<link href="test.css" rel="stylesheet">
<?php
if (isset($_POST['CallTyler']))
{
exec("python lifesizedial.py");
}
if (isset($_POST['Input2']))
{
exec("python power_off_q2.py");
}
if (isset($_POST['Test3']))
{
exec("python power_off_q3.py");
}
if (isset($_POST['Test4']))
{
exec("python power_off_q4.py");
}
if (isset($_POST['PowerOnQ1']))
{
exec("python power_on_q1.py");
}
if (isset($_POST['PowerOnQ2']))
{
exec("python power_on_q2.py");
}
if (isset($_POST['PowerOnQ3']))
{
exec("python power_on_q3.py");
}
if (isset($_POST['PowerOnQ4']))
{
exec("python power_on_q4.py");
}
if (isset($_POST['EnlargeQ1']))
{
exec("python enlarge_q1.py");
}
if (isset($_POST['EnlargeQ2']))
{
exec("python enlarge_q2.py");
}
if (isset($_POST['EnlargeQ3']))
{
exec("python enlarge_q3.py");
}
if (isset($_POST['EnlargeQ4']))
{
exec("python enlarge_q4.py");
}
?>
<form method="post">
<button name="CallTyler">Power Off Q1</button>&nbsp;
<button name="Input2">Power Off Q2</button><br>
<button name="Test3">Power Off Q3</button><br>
<button name="Test4">Power Off Q4</button><br>
<button name="PowerOnQ1">Power On Q1</button><br>
<button name="PowerOnQ2">Power On Q2</button><br>
<button name="PowerOnQ3">Power On Q3</button><br>
<button name="PowerOnQ4">Power On Q4</button><br>
<button name="EnlargeQ1">Enlarge Q1</button><br>
<button name="EnlargeQ2">Enlarge Q2</button><br>
<button name="EnlargeQ3">Enlarge Q3</button><br>
<button name="EnlargeQ4">Enlarge Q4</button><br>
</form>
</html>
