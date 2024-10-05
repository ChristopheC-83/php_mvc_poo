<?php 


require_once("./models/PdoModel.php");

class CharactersModel extends PdoModel{

    // public function getAllCharacters(){
    //     $req = "SELECT * FROM characters";
    //     $stmt = $this->setDB()->prepare($req);
    //     $stmt->execute();
    //     $datas = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //     $stmt->closeCursor();
    //     return $datas;

    // }
    public function getAllCharacters(){
        $req = "
        SELECT 
        characters.*,
        sides.side as side_name
        FROM characters JOIN sides ON characters.side_id = sides.id
        ";
        $stmt = $this->setDB()->prepare($req);
        $stmt->execute();
        $datas = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $datas;

    }
    public function getLastCharacter(){
        $req = "
        SELECT 
        characters.*,
        sides.side as side_name
        FROM characters JOIN sides ON characters.side_id = sides.id
        ORDER BY characters.id DESC LIMIT 1
        ";
        $stmt = $this->setDB()->prepare($req);
        $stmt->execute();
        $datas = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $datas;

    }
    public function getOneCharacterById($id){
        $req = "
        SELECT 
        characters.*,
        sides.side as side_name
        FROM characters JOIN sides ON characters.side_id = sides.id
        WHERE characters.id = :id
        ";
        $stmt = $this->setDB()->prepare($req);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        $datas = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $datas;

    }

    public function createNewCharacter($name, $image, $health, $magic, $power, $side){

        $req = "INSERT INTO characters (name, image, health, magic, power, side_id) VALUES (:name, :image, :health, :magic, :power, :side)";
        $stmt = $this->setDB()->prepare($req);
        $stmt->bindParam(":name", $name, PDO::PARAM_STR);
        $stmt->bindParam(":image", $image, PDO::PARAM_STR);
        $stmt->bindParam(":health", $health, PDO::PARAM_INT);
        $stmt->bindParam(":magic", $magic, PDO::PARAM_INT);
        $stmt->bindParam(":power", $power, PDO::PARAM_INT);
        $stmt->bindParam(":side", $side, PDO::PARAM_INT);
        $stmt->execute();
        $stmt->closeCursor();
        return true;

    }

    public function deleteCharacter($id){
        $req="DELETE FROM characters WHERE id = :id";
        $stmt = $this->setDB()->prepare($req);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        $stmt->closeCursor();
        return true;

    }

    public function updateCharacterDB($id, $name, $image, $health, $magic, $power, $side){

        $req="UPDATE characters SET name = :name, image= :image, health= :health, magic = :magic, power = :power, side_id = :side WHERE id = :id";
        $stmt = $this->setDB()->prepare($req);        
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->bindParam(":name", $name, PDO::PARAM_STR);
        $stmt->bindParam(":image", $image, PDO::PARAM_STR);
        $stmt->bindParam(":health", $health, PDO::PARAM_INT);
        $stmt->bindParam(":magic", $magic, PDO::PARAM_INT);
        $stmt->bindParam(":power", $power, PDO::PARAM_INT);
        $stmt->bindParam(":side", $side, PDO::PARAM_INT);
        $stmt->execute();
        $stmt->closeCursor();
        return true;


    }
}