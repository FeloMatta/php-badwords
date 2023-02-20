<?php 

    $myText = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis modi quis deserunt ullam porro inventore placeat voluptates tenetur id labore, aspernatur asperiores ipsa necessitatibus delectus eius pariatur fugit autem nostrum accusamus quaerat! Officiis est facere, harum, id sit cupiditate repellat amet veritatis et fugiat perferendis quidem ducimus? Obcaecati, commodi dicta!';

    var_dump($_GET);

    $badword = $_GET['badword'];

    $censoredText = str_replace($badword, '***', $myText);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Bad Words</title>
</head>
<body>

<h1>
    PHP Badwords
</h1>

<form action="" method="GET">
    <input type="text" name="badword" placeholder="Inserisci la parola da censurare" value="<?php echo $badword; ?>">
    <button>
        Censura
    </button>
</form>

<hr>

<p>
    <?php echo $myText; ?>
</p>

<div>
    Lunghezza del paragrafo: <?php echo strlen($myText); ?> caratteri
</div>

<hr>

<div>
    Badword passata fcome parametro in GET: <?php echo $badword; ?>
</div>

<p>
    <?php echo $censoredText; ?>
</p>

<div>
    Lunghezza del paragrafo censurato: <?php echo strlen($censoredText) ?> caratteri
</div>

</body>
</html>