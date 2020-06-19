<?php

require_once __DIR__ . '/DAO.php';

class DetailDAO extends DAO {

    public function selectDetailByEvent($id){
        $sql = "SELECT * FROM `int2_events` WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id',$id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    
    

}