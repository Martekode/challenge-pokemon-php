<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PokemonPhp</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>  
 <?php
    $url = "https://pokeapi.co/api/v2/pokemon/ditto";
    $PokeFetch = file_get_contents($url);
    $PokeArray = json_decode($PokeFetch , true);
    #var_dump($PokeArray);
    #var_dump($PokeArray["name"]);
    $sprite = $PokeArray["sprites"]["front_default"];
    $pokeName = $PokeArray["name"];
    #var_dump($sprite);
    $dom = new DOMDocument('1.0', 'utf-8');
    $element = $dom->createElement('h3', $pokeName);
    // We insert the new element as root (child of the document)
    $dom->appendChild($element);
    $img = $dom->createElement('img', "");
    $attr = $dom->createAttribute("src");
    $tnode = $dom->createTextNode($sprite);
    $attr->appendChild($tnode);
    $img->appendChild($attr);
    $dom->appendChild($img);
    echo $dom->saveXML();

?>
</body>
</html>