const { createApp } = Vue;

createApp({
    data(){
        return{
            apiUrl: 'server.php',
            todoList: [],
            language: '',
        }
    },
    methods: {
        addToDo(){
            const data = {
                todoItem: this.language
            }
            axios.post(this.apiUrl, data, {
                headers: {'Content-type': 'multipart/form-data'}
            }).then((response) => {
                this.language = '';
                this.todoList = response.data;
            })


        }
    },
    mounted() {
        axios.get(this.apiUrl).then((response) =>{
            this.todoList = response.data;
        });
    }


}).mount('#app');