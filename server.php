<!-- dobbiamo scrivere il codice che ci permette di prendere 
il contenuto di todo.json leggerlo da php e poi inviarlo 
a chi lo richiede con GET le info -->

<?php
header('Access-Control-Allow-Origin: *'); //controllo accessi da qualsiasi origine
header("Access-Control-Allow-Headers: X-Requested-With");

$file_url = '/todo.json'; //to do.json è un file di text a tutti gli effetti

$file_text = file_get_contents('./todo.json');
$todo_list = json_decode($file_text); //traduce qualsiasi tipo di dato in formato json


header('Content-Type: application/json'); //dire che è un file json, metterlo alla fine 
echo json_encode($todo_list); 