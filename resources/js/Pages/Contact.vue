<script setup>
import Layout from '../Layouts/Layout.vue'
import { Head } from '@inertiajs/vue3'

defineProps({ users: Object })
</script>

<template>
    <Layout>
        <Head title="Contact Page" />
        <h1>Write us</h1>
        <p>Hello from contact page</p>
    </Layout>
</template>
