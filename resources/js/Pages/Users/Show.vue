<script setup>
import Layout from '../../Layouts/Layout.vue'
import { Head, Link } from '@inertiajs/vue3'

defineProps({ user: Object })
</script>

<template>
    <Layout>
        <Head title="Users show" />
        <h1>User Show</h1>
        <Link href="users">Users</Link>
        <p>Hello {{ user.name }}</p>
    </Layout>
</template>
