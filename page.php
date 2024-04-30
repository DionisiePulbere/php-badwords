<?php 
$word = $_GET['badword'];
$text = $_GET['comment'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <p> <?php echo $text?>  </p>
        <div>La lunghezza del paragrafo è di <?php echo strlen($text) ?></div>
    </div>
    <div> 
        <p> <?php echo str_replace($word,'***' ,$text)?>  </p>
        <div>La lunghezza del paragrafo è di <?php echo strlen($text) ?></div>    
    </div>
</body>
</html>