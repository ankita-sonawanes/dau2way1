<html>
    <head>
        <title>check palindrome</title>
</head>
<body>
        <form method="POST">
            enter the your name:<br>
            <input type="text" name="input_string"><br>
            <input type="submit" value="submit name">
</from>
<?php
if($_post)
{
    $name=$_POST["name"];
    
        echo "hello $name";
    
}
?>
</body>
</html>