<?php 

require_once("./controllers/Utilities.php");
require_once("./models/CharactersModel.php");
require_once("./models/SidesModel.php");



class MainController {

    public $charactersModel;
    public $sidesModel;
    public function __construct()
    {
        $this->charactersModel = new CharactersModel();
        $this->sidesModel = new SidesModel();
    }


    // public function homePage(){
    //     require_once("./views/pages/homePage.php");
    // }
    // public function homePage(){
       
    //     ob_start();
    //     require_once("./views/pages/homePage.php");
    //     $title = "Page d'accueil";
    //     $description = "Bienvenue sur mon site en PVP MVC POO";
    //     $content = ob_get_clean();
    //     require_once("./views/commons/layout.php");

    // }
    public function homePage(){
       
        $name = "Dudulle";
        $character = $this->charactersModel->getLastCharacter();

        $datas_page=[
            "description"=> "Bienvenue sur mon site en PVP MVC POO",
            "title" => "Page d'accueil",
            "view" => "views/pages/homePage.php",
            "layout" =>"views/commons/layout.php",
            "name"=>$name,
            "character"=>$character,
        ];

        Utilities::renderPage($datas_page);

    }
    public function errorPage($message){
       

        $datas_page=[
            "description"=> "On est perdu ?",
            "title" => "Erreur",
            "view" => "views/pages/errorPage.php",
            "layout" =>"views/commons/layout.php",
            "message"=>$message,
        ];

        Utilities::renderPage($datas_page);

    }


}