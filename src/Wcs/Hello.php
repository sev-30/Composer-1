<?php

// le fichier Hello.php contient une classe nommée Hello qui devra posséder une méthode talk. 
// Cette dernière devra retourner "Hello World !".

// la classe Hello doit se trouver dans namespace App\Wcs

namespace App\Wcs;

class Hello{

    private string $hello;
    public function talk(): string
    {
    return 'Hello World !';
    }
 
}
