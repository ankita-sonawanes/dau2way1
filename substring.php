<html>
    <head>
        <title>substring</title>
</head>
<body>
    <form method="post">
        enter the string:<br>
        <input type="text",name="text1">
        <br>
        enter the character of string:<br>
        <input type="text",name="text2">
        <br>
        <input type="submit">
</form>
<?php
if($_POST)
{
$ipstr=$_POST['text1'];
$search=$_POST['text2'];
$count=0;
for($i=0;$i<=strlen($ipstr);$i++)
{
    if(substr($ipstr,$i,1)==$search)
    {
        $count=$count+1;
    }
}
echo"the character $search appears $count time in the input string $ipstr";
echo$count."/n";
}
?>
</body>
</html>