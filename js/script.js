const {createApp} = Vue;

createApp({
    data(){
        return{
            apiUrl: 'server.php',
            todoList: [],
        }
    },

    
}).mount('#app');