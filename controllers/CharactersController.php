<?php


class CharactersController extends MainController
{

    public function charactersList()
    {


        $characters = $this->charactersModel->getAllCharacters();

        $datas_page = [
            "description" => "Bienvenue dans la taverne, voici mes combattants",
            "title" => "Tous les Combattants",
            "view" => "views/pages/characters/allCharactersPage.php",
            "layout" => "views/commons/layout.php",
            "characters" => $characters,
        ];

        Utilities::renderPage($datas_page);
    }
    public function createCharacter()
    {


        $sides = $this->sidesModel->getAllSides();

        $datas_page = [
            "description" => "Bienvenue dans le formulaire de création d'un personnage",
            "title" => "Créons un Combattant",
            "view" => "views/pages/characters/createCharactersPage.php",
            "layout" => "views/commons/layout.php",
            "sides" => $sides,
        ];

        Utilities::renderPage($datas_page);
    }

    public function createNewCharacter($name, $image, $health, $magic, $power, $side)
    {

        if ($this->charactersModel->createNewCharacter($name, $image, $health, $magic, $power, $side)) {
            header("Location: " . ROOT);
        } else {
            throw new Exception("Erreur lors de la creation du personnage.");
        }
    }
    public function updateCharacter($id, $name, $image, $health, $magic, $power, $side)
    {

        if ($this->charactersModel->updateCharacterDB($id, $name, $image, $health, $magic, $power, $side)) {
            header("Location: " . ROOT);
        } else {
            throw new Exception("Erreur lors de la creation du personnage.");
        }
    }

    public function deleteCharacter($id)
    {
        if ($this->charactersModel->deleteCharacter($id)) {
            header("Location: " . ROOT . "personnages/liste");
        } else {
            throw new Exception("Erreur lors de la suppression du personnage.");
        }
    }

    public function modifyCharacter($id)
    {
        $sides = $this->sidesModel->getAllSides();
        $character = $this->charactersModel->getOneCharacterById($id);

        $datas_page = [
            "description" => "Bienvenue dans le formulaire de modification d'un personnage",
            "title" => "Modifions " . $character['name'],
            "view" => "views/pages/characters/modifyCharacterPage.php",
            "layout" => "views/commons/layout.php",
            "sides" => $sides,
            "character" => $character,
        ];

        Utilities::renderPage($datas_page);
    }
}
