<script setup>
import Layout from '../../Layouts/Layout.vue'
import { Head, Link } from '@inertiajs/vue3'

defineProps({ users: Array })
</script>

<template>
    <Layout>
        <Head title="Hello users" />
        <h1>Users</h1>
        <Link href="users/create">Create Users</Link>
        <table>
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="user in users" :key="user.id">
                <th scope="row">{{ user.name }}</th>
                <td>{{ user.email }}</td>
            </tr>
            </tbody>
        </table>
    </Layout>
</template>
