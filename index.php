<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Badwords</title>
</head>
<body>

<?php 
$par = "lorem ipsum dolor sit amet consectetur adipisicing elit. Qui rem, libero aut dicta quis dolore vel porro facere iusto, hic repudiandae voluptates esse minima aliquid odit enim molestias laboriosam nemo.";
$badWord = ($_GET['badword']);
?>


  <h1>Badwords</h1>
  <p>Paragrafo: <?php echo $par ?></p>
  <p>Lunghezza paragrafo: <?php echo strlen($par); ?>  </p>
  <p>Parola da censurare: <?php echo $badWord ?></p>
  <p>strpos: <?php echo strpos($par,  $badWord); ?></p>
  <p> <?php 
    if (strpos($par, $badWord) !== false){
    echo str_replace($badWord, "***", $par);
    } else {
    echo "NO";
    }
        ?>
  
</p>
  
</body>
</html>