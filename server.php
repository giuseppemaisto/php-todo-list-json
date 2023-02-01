<?php 
    //Recupero del contenuto di todo-list.json
    $string = file_get_contents('todo-list.json');

      //Convertire la stringai in array associativo
      $todo_list = json_decode($string, true);

      if(isset($_POST['todoItem'])){//se c'è valore post allora avviene 
        $todo_item = $_POST['todoItem'];//passo il valore di $_POST di una nuova variabile 
        
        $todo_array =[
            "language" => $todo_item,
            "done" => false,
        ];
        $todo_list[] = $todo_array;
        //Aggiungo un nuovo elemento nell'array
        // array_push($todo_list, $todo_item);
        //Scrivo il dato all'interno del file json
        file_put_contents('todo-list.json', json_encode($todo_list));
    }


      header ('content-Type: application/json');

      echo json_encode($todo_list);
?>