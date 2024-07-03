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
                    console.log(response.data.tasks);
                    this.todoList = response.data.tasks;
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        addTask() {
                    const newTodoObj = {
                        nome: this.newTaskName,
                        descrizione: this.newTaskName,
                        completato: false
                };
                console.log(this.newTaskName);
                this.todoList.push(newTodoObj);
                this.newTaskName = ''; // Clear the input field
            }
    },
    created() {
        this.getTodoList();
    }
}).mount('#app')