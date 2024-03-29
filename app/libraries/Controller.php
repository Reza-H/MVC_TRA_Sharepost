<?php
  /* 
   * Base Controller
   * Loads the model adn views
   */
  class Controller {
    // Load model
    public function model($model){
      // Require model file
      require_once '../app/models/' . $model . '.php';

      // Instantiate model
      return new $model();
    }// End model

    // Load view
    public function view($view, $data = []){
       // Check for the view file
       if(file_exists('../app/views/' . $view . '.php')){
         require_once '../app/views/' . $view . '.php';
       }else {
         // View does not exist
         die('View does not exist');
       }
    }// End view
  }// End class Controller