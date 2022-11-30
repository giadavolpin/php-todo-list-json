const { createApp} = Vue;

createApp({
    data(){
        return {
            todoList: [],
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

        },
        
    },
mounted() {
    this.getTodo();
},

}).mount('#app');