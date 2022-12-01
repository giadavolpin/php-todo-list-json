const { createApp} = Vue;

createApp({
    data(){
        return {
            newTodoText: '',
            todoList: [],  //variabile del ns todo
            apiUrl: './server.php'
        }
    },
    methods: {
        getTodo(){
            axios.get(this.apiUrl).then((response) =>{
                this.todoList = response.data;

            } );
        },
        addTodo() {
            const data = {
                newTodoText: this.newTodoText  //nome e valore
            }

            axios.post(    //chiediamo ad axios di interagire con il metodo post
                this.apiUrl, 
                newTodoText, {header('Content-Type: application/json')}
                ).then((response) =>{
                    console.log(response.data);  //prenderlo non come una stringa ma come una form
                } )
        },
        
    },
mounted() {
    this.getTodo();
},

}).mount('#app');