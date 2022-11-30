<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div id="app">
        <h3>Agiiungi un todo</h3>
        <input type="text" placeholder="Testo del todo" v-model="newTodoText">
        <button @click="addTodo">Aggiungi</button>

    </div>
</body>

</html>