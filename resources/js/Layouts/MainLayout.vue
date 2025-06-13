<template>
    <Header />
        <main>
            <slot />
        </main>
    <Footer />

    <Link href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></Link>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
import Header from '@/Layouts/Header.vue';
import Footer from '@/Layouts/Footer.vue';

</script>