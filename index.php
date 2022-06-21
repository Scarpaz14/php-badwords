
<?php  

    $text = 'lorem ipsum dolor';    
    $bannedWord = $_GET['bannedWord'];
    $textBanned = str_replace($bannedWord, '***', $text)
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
    <h1> Testo: <?= strtolower($text) ?> </h1>
    <h3> Lunghezza testo: <?= strlen($text)?></h3>
    <h1> testo con parole censurate: <?= $textBanned ?></h1>
    <h3> Lunghezza testo con parole censurate: <?= strlen($textBanned)?></h3>
    
</body>
</html>