<?php 
// Legge il contenuto del file JSON
$rawJson = file_get_contents("../db/todo_list.json");
$todoList = json_decode($rawJson, true)["tasks"];

// Controlla se i parametri GET sono stati impostati correttamente
if (isset($_GET['nome']) && 
    isset($_GET['descrizione']) && 
    isset($_GET['completato'])) {

    // Aggiunge il nuovo task alla lista
    $todoList[] = [
        'nome' => $_GET['nome'],
        'descrizione' => $_GET['descrizione'],
        'completato' => filter_var($_GET['completato'], FILTER_VALIDATE_BOOLEAN)
    ];
        var_dump($todoList);
    // Crea un nuovo array contenente tutti i task
    $newTodoList = [
        "tasks" => $todoList
    ];
    file_put_contents("../db/todo_list.json", json_encode($newTodoList));
}
?>