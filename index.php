<?php
$recipes=[
    [
            "titre"=>"Cassoulet",
            'auteur'=>'victorfelwt@example.com',
        'is_enabled'=>true],
    ["titre"=> "Kig Ha Farz",
    'auteur'=>'lebretondu29@bzh.fr',
    'is_enabled'=>false],

    ["titre"=>"Salade de carottes",
    'auteur'=>'mongodébile@bzh.fr',
    'is_enabled'=>true],
    
    ["titre"=>'Chakchouka',
    'auteur'=>'cricridu54@gogeliset.com',
        'is_enabled'=>true]
];

$utilisateur=[
        'victorfelwt@example.com',
        'lebretondu29@bzh.fr',
        'cricridu54@gogeliset.com'
]
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<ul>
<?php
echo '<ul>';
foreach ($recipes as $i => $recipe) {
    //echo '<li>'.$recipe[titre].' - '.$recipe[auteur].'</li>';
 echo '<li>';
    print_r($recipe['titre']);
    echo ' par ';
    print_r($recipe['auteur']);
    echo '</li>';
};
echo '<br>';

foreach ($recipes as $recipe) {
    echo $recipe['titre'].' contribué par : '.$recipe['auteur'].'<br>';
}
echo '<br>';

echo '<pre>';
print_r($recipes);
echo '</pre>';

echo '<br>';

//trouver clé
if(
array_key_exists('auteur', $recipes[0])){
    echo 'ça existe';
}else{
    echo 'ce n\'existe pas';
};
echo '<br>';
//chercher valeurs
if (in_array('cricridu54@gogeliset.com', $utilisateur)) {
    echo 'cet utilisateur existe dans la liste';
}else{
    echo 'ce n\'existe pas';
};
echo '<br>';
echo '<h1>Les recettes activees</h1>';
foreach ($recipes as $recipe) : {
    if (array_key_exists('is_enabled', $recipe) && $recipe['is_enabled']==true) {
        echo $recipe['titre'];
        echo $recipe['auteur'];
        echo '<br>';
    }else{
        echo 'cette recette écrite par '.$recipe['auteur'].' n\'est pas activee'.'<br>';
    }
};endforeach;
echo '<br>';

?>
</ul>
</body>
</html>