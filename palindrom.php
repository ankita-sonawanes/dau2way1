<html>
    <head>
    <title>check palindrome</title>
</head>
<body>
    <form action="" method="post">
    enter the string: <br>
    <input type="text" name="input_string">
            
    <input type="submit" >
    </from>
    <?php
    if($_POST){
    $str=$_POST["input_string"];
    $len=strlen($str);

    $new_str=strrev($str);
    echo $new_str."<br>";
    if($str==$new_str){
            echo "palindrome.";
    }
    else{
          echo "not palindrome.";
    }}
    ?>
</body>
</html>