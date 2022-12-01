<!-- dobbiamo scrivere il codice che ci permette di prendere 
il contenuto di todo.json leggerlo da php e poi inviarlo 
a chi lo richiede con GET le info -->

<?php
header('Access-Control-Allow-Origin: *'); //controllo accessi da qualsiasi origine
header("Access-Control-Allow-Headers: X-Requested-With");

$file_url = '/todo.json'; //to do.json è un file di text a tutti gli effetti

$file_text = file_get_contents('./todo.json');
$todo_list = json_decode($file_text); //traduce qualsiasi tipo di dato in formato json

if (isset($_POST['newTodoText'])) {
    // echo "il Parametro post è arrivato"
    //prendere il valore inviatoci inserirlo nel file e ricaricare i nuovi todo
    //$newTodoText = $_POST['newTodoText'];

    $newTodo = [
        'text' => $_POST['newTodoText'],
        'done' => false,
    ];

    array_push($todo_list, $newTodo);

    print_r($todo_list) 
} else {
    // echo "il parametro non è arrivato";
}

header('Content-Type: application/json'); //dire che è un file json, metterlo alla fine 
echo json_encode($todo_list); 