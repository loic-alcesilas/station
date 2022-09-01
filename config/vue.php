<?php

class vue 
{
    //nom du fichier associé à la vue
    private $ficher;

    //Titre de la vue (défini dans le fichier vue)
    private $titre;

    public function __construct($action)
    {
        $this->fichier = "Vue/vue". $action . ".php";
    }

    

    
}

?>