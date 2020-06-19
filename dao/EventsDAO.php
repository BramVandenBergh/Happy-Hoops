<?php

require_once __DIR__ . '/DAO.php';

class EventsDAO extends DAO {

    public function selectAllEvents(){
        $sql = "SELECT `*` FROM `int2_events` ORDER BY `id` ASC";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function selectEventByKind($kind){
        $sql = "SELECT * FROM `int2_events` WHERE `kind` = :kind ORDER BY `kind` ASC";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':kind',$kind);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
      }

      public function selectKind(){
        $sql = "SELECT DISTINCT `name`, `id` FROM `int2_type` ORDER BY `id`";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
      }


    // public function selectByType($type) {
    //     $sql = "";
    //     $stmt = $this->pdo->prepare($sql);
    //     $stmt->execute(array(
    //       ':type' => $type
    //     ));
    //     return $stmt->fetch(PDO::FETCH_ASSOC);
    //   }

    //   public function selectEventByType($type){
    //     $sql = "SELECT * FROM `tabelnaam` WHERE `x` = :x ORDER BY `id` ASC";
    //     $stmt = $this->pdo->prepare($sql);
    //     $stmt->bindValue(':x',$alignment);
    //     $stmt->execute();
    //     return $stmt->fetchAll(PDO::FETCH_ASSOC);
    //   }

    //   public function selectTypes(){
    //     $sql = "SELECT DISTINCT `id` FROM `Type` ORDER BY `id`";
    //     $stmt = $this->pdo->prepare($sql);
    //     $stmt->execute();
    //     return $stmt->fetchAll(PDO::FETCH_ASSOC);
    //   }
}