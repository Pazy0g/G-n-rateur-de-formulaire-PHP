<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>

<body>
</body>

</html>

<?php

require_once 'Class/formulaire.php';
require_once 'Class/form2.php';

$form = new Form('formulaire.php', 'post');


//* ajouter des radio buttons en rentrant des options dans un array
$options = [
    'type1' => 'Homme',
    'type2' => 'Femme',
    'type3' => 'NSP',
];
//* puis appeler la fonction

$form2 = new FormFull('formulaire.php','post');
$form2->setRadio('radio', $options, 'option2');
$form2->setTextarea('nom','Nom :','nom', 'Votre nom');
$form2->setTextarea('prenom ','Prénom :', 'prenom ', 'Votre prenom');

$form2->setFieldSet('FORMULAIRE DE BEAUGOSSE');
$form2->setSubmit('submit', 'ENVOYER');
echo $form2->getForm();
















?>