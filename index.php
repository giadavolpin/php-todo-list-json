<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <title>index</title>

    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div id="app">
        <h3>Aggiungi un todo</h3>
        <input type="text" placeholder="Testo del todo" v-model="newTodoText" name="newTodoText">
        <button @click="addTodo">Aggiungi</button>

        <h2>Lista To-do</h2>
        <ul>
            <li v-for="(todo, index) in todoList" class="todo" :class="todo.done ? 'done' : '' "> {{todo.text}}</li>
        </ul>


    </div>

    <script src="./main.js"></script>
</body>

</html>