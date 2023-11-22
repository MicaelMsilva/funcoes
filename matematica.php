<?php
//$nome = readline("Qual o pokemon:")
$short = "p";
$long = [
	"pokemon:"
];

$options = getopt($short, $long);
print_r($options);

$nome = $options['pokemon'];

$dados_txt = file_get_contents("https://pokeapi.co/api/v2/pokemon/{$nome}");

$pokemon = json_decode($dados_txt, true);
print (strtoupper ($pokemon['name']) ."\n");
print ("altura:" . $pokemon['height']. "\n");
print ("peso:" . $pokemon['weight']. "\n");

print("movimentos: \n"); 
 foreach($pokemon['moves'] as $move)
 {
print (" - " . $move ['move']['name']. "\n");

}
