<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/EventsDAO.php';
require_once __DIR__ . '/../dao/CheckoutDAO.php';
require_once __DIR__ . '/../dao/DetailDAO.php';


class EventsController extends Controller {

    function __construct() {
        $this->eventsDAO = new eventsDAO();
        $this->detailDAO = new DetailDAO();
        $this->checkoutDAO = new CheckoutDAO();
    }

    public function index() { 
      $this->set('title', 'Home');
      $this->set('currentPage', 'home');
    }

    public function events() {

      if(!empty($_POST['action'])){
        if($_POST['action'] == 'insertOrder'){
          $insertedOrder = $this->checkoutDAO->insertOrder($_POST);
        }
      }

      if(empty($_GET['kind']) || $_GET['kind'] == 'all'){
        $events = $this->eventsDAO->selectAllEvents();
      }else{
        $events = $this->eventsDAO->selectEventByKind($_GET['kind']);
      }
  
      if(empty($events)){
        $events = $this->eventsDAO->selectAllEvents();
      }
  
      if ($_SERVER['HTTP_ACCEPT'] == 'application/json') {
        echo json_encode($events);
        exit();
      }
  
      $this->set('events', $events);
      $this->set('kind',$this->eventsDAO->selectKind());
      $this->set('title', 'Home');
    }

    public function tickets() {
        $this->set('title', 'Tickets');
        $this->set('currentPage', 'tickets');
    }

    public function detail() {
      if(!empty($_GET['id'])){
        $detail = $this->detailDAO->selectDetailByEvent($_GET['id']);
      }
  
      if(empty($detail)){
        $_SESSION['error'] = 'That event was not found, please try again.';
        header('Location:events.php');
        exit();
      }
      
      $this->set('title', $detail);
      
      $this->set('detail',$this->detailDAO->selectDetailByEvent($_GET['id']));
      $this->set('currentPage', 'detail');
  }

    public function about() {
      $this->set('title', 'About');
      $this->set('currentPage', 'about');
  }

    public function checkout(){


      $eventId = $_GET['id'];
      $this->set('title',$this->checkoutDAO->selectNameById($_GET['id']));
      $ticket = $this->checkoutDAO->selectTicketById($eventId);
      $this->set('ticket', 'About');
      //
      


      //EVENT ID NAAR TICKET ID
      //EVENT ID NAAR NAAM
    }

      
      
}
