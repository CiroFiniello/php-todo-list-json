const { createApp } = Vue

createApp({
    data() {
        return {
            todoList: [],
            apiUrl: './api/get_all_list.php',
            newTaskName: '',
        }
    },
    methods: {
        getTodoList() {
            axios.get(this.apiUrl)
                .then((response) => {
                    console.log(response);
                    if (response.data.tasks && Array.isArray(response.data.tasks)) {
                        this.todoList = response.data.tasks;
                    } else {
                        console.error("Invalid data format from API");
                    }
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        addTask() {
            if (this.newTaskName.trim() !== '') {
                const newTodoObj = {
                    nome: this.newTaskName,
                    descrizione: this.newTaskName,
                    completato: false
                };
                this.todoList.push(newTodoObj);
                this.newTaskName = ''; // Clear the input field
            }
        }
    },
    created() {
        this.getTodoList();
    }
}).mount('#app')