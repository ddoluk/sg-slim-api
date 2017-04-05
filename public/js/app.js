var app = new Vue({
    delimiters: ['${', '}'],
    el: '#app',
    data: {
        title: 'TODO REST API',
        todos: []
    },
    methods: {
        listTasks: function () {
            this.$http.get('/api/all').then(response => {this.todos = response.body;});
        }
    }
});
app.listTasks();