<?php

// accessible SSI $url[0] = personnages

switch ($url[1]) {
    case "liste":
        $charactersController->charactersList();
        break;
    case "nouveau":
        $charactersController->createCharacter();
        break;
    case "createCharacter":
        // Utilities::showArray($_POST);
        $name = htmlentities($_POST['name']);
        $image = htmlentities($_POST['image']);
        $health = htmlentities($_POST['health']);
        $magic = htmlentities($_POST['magic']);
        $power = htmlentities($_POST['power']);
        $side = isset($_POST['side']) ? htmlentities($_POST['side']) : null;

        if (empty($name) || empty($image) || empty($health) || empty($magic) || empty($power) || empty($side)) {
            $mainController->errorPage("Tous les champs sont obligatoires !!!
                <br>
                <br>
                <a href='./nouveau'> Retour au formulaire </a>
                <br>
                <br>
                OU
            ");
            return;
        }
        $charactersController->createNewCharacter($name, $image, $health, $magic, $power, $side);

        break;

    case "deleteCharacter":
        $id = htmlentities($_POST["id"]);
        // echo ($id);
        $charactersController->deleteCharacter($id);
        break;

    case "modifyCharacter":
        $id = htmlentities($_POST["id"]);
        $charactersController->modifyCharacter($id);
        break;

    case "updateCharacter":
        // Utilities::showArray($_POST);
        $id = htmlentities($_POST["id"]);
        $name = htmlentities($_POST['name']);
        $image = htmlentities($_POST['image']);
        $health = htmlentities($_POST['health']);
        $magic = htmlentities($_POST['magic']);
        $power = htmlentities($_POST['power']);
        $side = isset($_POST['side']) ? htmlentities($_POST['side']) : null;

        if (empty($name) || empty($image) || empty($health) || empty($magic) || empty($power) || empty($side)) {
            $mainController->errorPage("Tous les champs sont obligatoires !!!
                <br>
                <br>
                <form action ='./modifyCharacter' method='POST'>
                    <input type='hidden'name='id' value='$id'>
                    <button type='submit' class='btn btn-primary'>Retour au formulaire</button>
                </form>
                <br>
                OU
            ");
            return;
        }   
        
        $charactersController->updateCharacter($id,$name, $image, $health, $magic, $power, $side);
        break;

    default:
        throw new Exception("La page Personnages demandée n'existe pas !!!");
}
