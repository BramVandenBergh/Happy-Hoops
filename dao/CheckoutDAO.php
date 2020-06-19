<?php

require_once __DIR__ . '/DAO.php';

class CheckoutDAO extends DAO {

  public function selectAll() {
    $sql = "SELECT * FROM `int2_orders` ORDER BY `name` ASC";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
  public function insertOrder($data) {
    $sql = "INSERT INTO `int2_orders` (`ticket_id`, `name`, `email` ) VALUES (:ticketid, :name, :email); ";
    $stmt = $this->pdo->prepare($sql);
          $stmt->bindValue(':ticketid', $data['eventid']);
          $stmt->bindValue(':name', $data['name']);
          $stmt->bindValue(':email', $data['email']);
          $stmt->execute();
          return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  
  public function selectNameById($id){
    $sql = "SELECT `title_clean` FROM `int2_events` WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id',$id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
public function selectTicketById($id){
  $sql = "SELECT `ticket_id` FROM `int2_events` WHERE `id` = :id";
  $stmt = $this->pdo->prepare($sql);
  $stmt->bindValue(':id',$id);
  $stmt->execute();
  return $stmt->fetch(PDO::FETCH_ASSOC);
}

}
