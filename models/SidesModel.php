<?php

require_once("./models/PdoModel.php");
class SidesModel extends PdoModel
{


    public function getAllsides()
    {
        $req = "SELECT * FROM sides";
        $stmt = $this->setDB()->prepare($req);
        $stmt->execute();
        $datas = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $datas;
    }
}
