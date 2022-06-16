<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <?php include ("code.php") ?>
    <form action="index.php" method="post">
        <input type="text" name="input" method="post">
        <button name="btn1">search</button>
    </form>
    <div id="imgContainer">
        <h1 id="pokemonName"><?php echo $pokemonName ?></h1>
        <h2 id="pokemonId"><?php echo $pokeId ?></h2>
        <img src="<?php echo $imgSrc ?>" alt="" id="pokemonImg">
    </div>
    <div id="muvesContainer">
        <ul>
        <?php foreach($muvesArr as $value): ?>
            <li>
                <?= $value ?>
            </li>
    <?php endforeach; ?>
</table>
        </ul>
    </div>
    <div id="evolutionContainer">
        <h1 id="evoName"><?php echo $evoName ?></h1>
        <img src="<?php echo $evoImg ?>" alt="" id="evoImg">
    </div>

</body>
</html>