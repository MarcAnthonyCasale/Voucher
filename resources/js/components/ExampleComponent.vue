<template>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Updated At</th>
                    <th scope="col">Created At</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(user, index) in users" :key="user.id">
                    <td>{{ index + 1 }}</td>
                    <td>{{ user.name }}</td>
                    <td>{{ user.email }}</td>
                </tr>
            </tbody>
        </table>
</template>
<script>
    export default {
        data() {
            return {
                users: []
            }
        },
        created() {
            axios.get('/user')
                .then(response => {
                    this.users = response.data;
                })
                .catch(error => {
                    console.log("Error", error)
                })
        }
    }
</script>