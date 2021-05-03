<?php


    $paragraph = $_GET['paragraph'];
    $bad_word = $_GET['bad_word']

    
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
    <p>
    <small> <?php echo 'Lunghezza paragrafo '.strlen($paragraph)?></small>
    </p>

    <div>
       <small>Contenuto originale: </small>
       <p> <?php echo $paragraph ?> </p>
    </div>
    <div>
       <small>Contenuto censurato: </small>
       <p> <?php echo str_replace(strtolower($bad_word), "***", strtolower($paragraph)) ?> </p>
    </div>
</body>
</html>