<template>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">№</th>
                    <th scope="col">Request Prop 1</th>
                    <th scope="col">Request Prop 2</th>
                    <th scope="col">Request Prop 3</th>
                    <th scope="col">Request Prop 4</th>
                </tr>
            </thead>
            <tbody>
                <tr
                    v-for="item in items"
                >
                    <td>1</td>
                    <td>{{item.age}}</td>
                    <td>{{item.first_name}}</td>
                    <td>{{item.last_name}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                items: [
                    { age: 40, first_name: 'Dickerson', last_name: 'Macdonald' },
                    { age: 21, first_name: 'Larsen', last_name: 'Shaw' },
                    { age: 89, first_name: 'Geneva', last_name: 'Wilson' },
                    { age: 38, first_name: 'Jami', last_name: 'Carney' }
                ]
            }
        }
    }
</script>
<style>
    .table {
        max-width: 500px;
    }
</style>
