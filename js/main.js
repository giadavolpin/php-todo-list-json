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
            console.log(eja);
        },
        
    },
mounted() {
    this.getTodo();
},

}).mount('#app');