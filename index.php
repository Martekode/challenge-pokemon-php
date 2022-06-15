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
    <form action="index.php" method="post">
        <input type="text" method="post" name="input">
        <button name="btn1">search</button>
    </form>
    
    
 <?php
  if (isset($_POST['btn1'])){
    $url = "https://pokeapi.co/api/v2/pokemon/" . $_POST["input"];
       
    $PokeFetch = file_get_contents($url);
    $PokeArray = json_decode($PokeFetch , true);
    #var_dump($PokeArray);
    #var_dump($PokeArray["name"]);
    $species = $PokeArray["species"]["url"];
    $speciesFetch = file_get_contents($species);
    $speciesFetchArray = json_decode($speciesFetch,true);
    $evolutionChainUrl = $speciesFetchArray["evolution_chain"]["url"];
    $evolutionChainFetch = file_get_contents($evolutionChainUrl);
    $evolutionChainFetchArray = json_decode($evolutionChainFetch,true);
    #var_dump($evolutionChainFetchArray["evolution_details"]);
    $sprite = $PokeArray["sprites"]["front_default"];
    $pokeName = $PokeArray["name"];
    #var_dump($sprite);
    $dom = new DOMDocument('1.0', 'utf-8');
    $element = $dom->createElement('h3', $pokeName);
    #We insert the new element as root (child of the document)
    $dom->appendChild($element);
    
    $img = $dom->createElement('img', "");
    $attr = $dom->createAttribute("src");
    $tnode = $dom->createTextNode($sprite);
    $id = $dom->createElement('h3', $PokeArray["id"]);
    $attr->appendChild($tnode);
    $img->appendChild($attr);
    $dom->appendChild($id);
    $dom->appendChild($img);
    
    if ($speciesFetchArray["evolves_from_species"]){
        $eveolveFromName = $speciesFetchArray["evolves_from_species"]["name"];
        
        $evolveFrom = $dom->createElement('h4', $eveolveFromName);
        $dom->appendChild($evolveFrom);
        $urlEVO = "https://pokeapi.co/api/v2/pokemon/" . $eveolveFromName;
        $evoSpriteFetch = file_get_contents($urlEVO);
        $evoSpriteFetchArray = json_decode($evoSpriteFetch,true);
        #var_dump($evoSpriteFetchArray,$urlEVO);
        $evoSpriteUrl = $evoSpriteFetchArray["sprites"]["front_default"];
        $evoImg = $dom->createElement('img');
        $evoAttr = $dom->createAttribute("src");
        $evoTnode = $dom->createTextNode($evoSpriteUrl);
        $evoAttr->appendChild($evoTnode);
        $evoImg->appendChild($evoAttr);
        $dom->appendChild($evoImg);


    }
    else{
        echo "there is no previous evolution";
    }

    echo $dom->saveXML();
}

 

?>
</body>
</html>