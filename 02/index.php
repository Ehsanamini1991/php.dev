<?php
include 'posts.php';
$post=getpost();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charse="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

$keys=array_keys($post);
while(!empty($keys)){
$key=array_pop($keys);
echo $post[$key];
}
  



?>
    
</body>
</html>