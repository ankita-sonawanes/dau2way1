<html>
    <head>
    <title>factorial program using loop in php</title>
</head>
<body>
    <form method="post">
        enter the number:<br>
        <input type="number" name="number" id="no">
        <input type="submit"/>
</from>
<?php
if($_POST)
{
    $fact=1;
    $n= $_POST['number'];
    echo "factorial of $n:<br><br>";
    for($i=1; $i<=$n; $i++)
    {
        $fact = $fact*$i;
    }
    echo $fact. "<br>";

    
}    
?>
</body>
</html>