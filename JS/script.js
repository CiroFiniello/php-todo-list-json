const { createApp } = Vue

createApp({
    data() {
        return {
            todoList: [],
            apiUrl: './api/get_all_list.php',
        }
    },
    methods: {
        getTodoList() {
            axios.get(this.apiUrl)
                .then((response) => {
                    console.log(response);
                    // Assicurati che response.data.tasks esista e sia un array
                    if (response.data.tasks && Array.isArray(response.data.tasks)) {
                        this.todoList = response.data.tasks;
                    } else {
                        console.error("Invalid data format from API");
                    }
                })
                .catch((error) => {
                    console.log(error);
                });
        }
    },
    created() {
        this.getTodoList();
    }
}).mount('#app')