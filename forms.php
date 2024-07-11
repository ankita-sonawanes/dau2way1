<html>
    <head>
        <title>check palindr</title>
</head>
<body>
        <form method="post">
            enter the your name:<br>
            <input type="text" name="text"><br>
            <input type="submit" value="submit name">
        </from>
<?php
if(isset($_POST['submit']))
{
    
    $name= $_POST['text'];
    
    echo " sdfjkhgfdsfghjhello $name";
    echo $name."/n";
}
?>
</body>
</html>