<?php

//  Importation de l'autoload de Composer
use Symfony\Component\VarDumper\VarDumper;

require_once "vendor/autoload.php";
/**
 * Created by PhpStorm.
 * User: SNITPRO
 * Date: 17/12/2018
 * Time: 11:02
 */

// Contenu de Démonstration

class Contact
{
    private $firstname,
        $lastname;

    // alt+inser mode mininitel du curseur
    // fn + alt +inser, choisit controller

    /**
     * Contact constructor.
     * @param $firstname
     * @param $lastname
     */
    public function __construct($firstname, $lastname)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }
}

$unString = "Une chaine de caractère";
$unArray  = ['Hugo','Momo','Farid','Seb'];
$unObjet  = new Contact('Hugo', "LIEGEARD");

// Test de VarDumper
VarDumper::dump($unString);
VarDumper::dump($unArray);
VarDumper::dump($unObjet);



// Lorsque on tape vardumper, storm le use pour nous;


