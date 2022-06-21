
<?php  

    $text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo iure unde veniam voluptatem ab facere provident amet reiciendis libero, ad labore obcaecati fugiat. Distinctio officia accusantium dolorem, cupiditate soluta veritatis.';    
    $bannedWord = $_GET['bannedWord'];
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Testo: <?php echo $text ?> </h1>
    <h3> Lunghezza testo: <?= strlen($text)?></h3>
    
</body>
</html>