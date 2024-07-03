<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-do List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <main id="app">
        <h1 class="text-align-center">To Do List</h1>        
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <section class="todo-list">
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-action" v-for="(todoElement, index) in todoList" :key="index"
                            :class="todoElement.completato ? 'text-decoration-line-through' : '' ">
                                {{ todoElement.nome }}
                            </li>
                        </ul>
                    </section>
                    <section class="user-input mt-3">
                        <div class="input-group">
                            <input type="text" name="newTask" id="newTask" class="form-control" @keyup.enter="addTask" v-model="newTaskName" placeholder="Add a new task">
                            <button class="btn btn-primary" @click="addTask">Add Task</button>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.7.2/axios.min.js" integrity="sha512-JSCFHhKDilTRRXe9ak/FJ28dcpOJxzQaCd3Xg8MyF6XFjODhy/YMCM8HW0TFDckNHWUewW+kfvhin43hKtJxAw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="./JS/script.js"></script>
</body>
</html>