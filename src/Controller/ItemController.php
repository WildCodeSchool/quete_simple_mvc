<?php
Namespace Controller;

// src/Controller/ItemController.php
use Model\ItemManager;


Class ItemController{

    public function index(){
        $itemManager = new ItemManager();
        $items = $itemManager->SelectAllItems();
        require __DIR__ . '/../View/item.php';
    }
}
