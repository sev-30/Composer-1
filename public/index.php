<?php


// ton fichier index.php instancie et utilise un objet App\Wcs\Hello

use App\Wcs\Hello; // use = namespace + class

require_once '../vendor/autoload.php';

$hello = new Hello();
echo $hello->talk();
