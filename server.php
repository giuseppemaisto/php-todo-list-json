<?php 
    //Recupero del contenuto di todo-list.json
    $string = file_get_contents('todo_list.json');

      //Convertire la stringai in array associativo
      $todolist = json_decode($string, true);

      header ('content-Type: application/json');

      echo json_encode($todolist);
?>