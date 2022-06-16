<?php
if (isset($_POST['btn1'])){
    $url = "https://pokeapi.co/api/v2/pokemon/" . $_POST["input"];
    $pokemonFetch = file_get_contents($url);
    $pokemonFetchArray = json_decode($pokemonFetch,true);
    $pokemonSprite = $pokemonFetchArray["sprites"]["front_default"];
    $baseUrl = "https://pokeapi.co/api/v2/pokemon/";
    $imgSrc = $pokemonSprite ;
    $pokemonName = $pokemonFetchArray["name"];
    $pokeId = $pokemonFetchArray["id"];
    $speciesUrl = $pokemonFetchArray["species"]["url"];
    $fetchedSpecies = file_get_contents($speciesUrl);
    $fetchedSpeciesArr = json_decode($fetchedSpecies,true);


    var_dump($pokemonFetchArray["moves"]["0"]["move"]["name"]);
    $evoData = getEvo($fetchedSpeciesArr,$baseUrl);
    if($fetchedSpeciesArr["evolves_from_species"]){
        $evoName = $evoData[0];
        $evoImg = $evoData[1];
    }else{
        $evoName = "no previous evolution";
    }


    
    echo count($pokemonFetchArray["moves"]);
    $muvesArr = getMuves($pokemonFetchArray);
    
    var_dump($muvesArr);
    $muve1 = $muvesArr[0];
    $muve2 = $muvesArr[1];
    $muve3 = $muvesArr[2];
    $muve4 = $muvesArr[3];

}
function getEvo($fetchedArr,$urlEvo){
    if ($fetchedArr["evolves_from_species"]){
        $evoName = $fetchedArr["evolves_from_species"]["name"];
        $fetchedEvo = file_get_contents($urlEvo . $evoName);
        $fetchedEvoArr = json_decode($fetchedEvo,true);
        $evoImgUrl = $fetchedEvoArr["sprites"]["front_default"];
        $evoData = [];
        array_push($evoData , $evoName , $evoImgUrl);
        return $evoData;
        

    }
}
function getMuves($muvesArray){
    $muvesArr = [];
    if(count($muvesArray["moves"])<= 4){
        for ($i = 0; $i < count($muvesArray["moves"]) ; $i++ ){
            array_push($muvesArr, $muvesArray["moves"]["$i"]["move"]["name"]);
        }
    }else{
        for ($i = 0 ; $i <4 ; $i++){
            array_push($muvesArr, $muvesArray["moves"]["$i"]["move"]["name"]);
        }
    }
    return $muvesArr;
}






?>