<html>
    <head>
        <title>sum of series program using loop in php</title>
</head>
<body>
    <form method="post">
        enter the number:<br>
        <input type="number" name="number" id="no">
        
</from>
<?php
if($_POST){
    $sum=0;
    $n= $_POST['number'];
    echo "sum of series of $n:<br><br>";
    for($i=1; $i<=$n; $i++)
    {
        $sum = $sum + $i;
    }
    echo $sum. "<br>";

}    
?>
</body>
</html>