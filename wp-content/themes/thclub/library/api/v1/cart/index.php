<?php

class CartClass{
  public function __construct($choices) {
    $this->choices = $choices;
  }

  public function cart() {
    switch ($this->choices) {
      case "add":
        if (!isset($_SESSION['cart'])) {
          $_SESSION['cart'] = array();
          //unset qunatity
          unset($_SESSION['qty_array']);
        }
        //check if product is already in the cart
        if (!in_array($_GET['id'], $_SESSION['cart'])) {
          array_push($_SESSION['cart'], $_GET['id']);
          $_SESSION['message'] = 'Produkt tilføjet til indkøbsvogn';
        } else {
          $_SESSION['message'] = 'Vare allerede i kurv';
        }
        foreach ($_SESSION['cart'] as $key => $val) {
          $_SESSION['qty_array'] = array_fill(0, count($_SESSION['cart']), 1);
        }
        break;
      case "clear":
        unset($_SESSION['cart']);
        $_SESSION['message'] = 'Indkøbskurven ryddet med succes';
        break;
      case "delete":
        //remove the id from our cart array
        $key = array_search($_GET['id'], $_SESSION['cart']);
        unset($_SESSION['cart'][$key]);
        unset($_SESSION['qty_array'][$_GET['index']]);
        //rearrange array after unset
        $_SESSION['qty_array'] = array_values($_SESSION['qty_array']);
        $_SESSION['message'] = "Produkt slettet fra indkøbsvogn";
      break;
      case "save":
        if (isset($_POST['save'])) {
          foreach ($_POST['indexes'] as $key) {
            $_SESSION['qty_array'][$key] = $_POST['qty_' . $key];
          }
          $_SESSION['message'] = 'Kurven er opdateret.';
        }
        break;
      default:
        $_SESSION['message'] = 'Intet ændrede sig';
        break;
    }
  }
}