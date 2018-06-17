<?php include '../header.php' ?>

&laquo; <a href="../index.php">Содержание</a>

<div id="vue-app">
    <h2>{{ title }}</h2>
    <h3>{{ greet('afternoon', name1) }}</h3>
    <p>Name: {{ name1 }}</p>
    <p>Age: {{ checkAge(16) }} </p>
    <p>Job: {{ job2 }}</p>

    <h3>{{ greet('night', name2) }}</h3>
    <p>Name: {{ name2 }}</p>
    <p>Age: {{ checkAge(35) }} </p>
    <p>Job: {{ job2 }}</p>
</div>

<script>
    const App = new Vue({
        el: '#vue-app',
        data: {
            title: 'Data & Methods',
            greeting: 'Greeting',
            name1: 'AmberLEX',
            job1: 'Backend Web Developer',
            name2: 'VueCreator',
            job2: 'Frontend Web Developer'
        },
        methods: {
            greet: function (time, name) {
                return this.greeting + ': good ' + time + ', ' + name;
            },
            checkAge: function (age) {
                if (age < 18) {
                    return age + ' (you underage)';
                }
                return age + ' (you adult)';
            }
        }
    });
</script>

<?php include '../footer.php' ?>
