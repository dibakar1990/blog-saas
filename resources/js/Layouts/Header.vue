<template>
     <div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-4">
                    <div class="logo">
                        <Link href="/">
                            <img v-if="setting.file_path" :src="setting.file_full_path" alt="Logo">
                            <img v-else :src="'/assets/img/logo.png'" alt="Logo">
                        </Link>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4">
                    <div class="search">
                        <input type="text" placeholder="Search">
                        <button><i class="fa fa-search"></i></button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="social">
                        <a v-for="social in socialLinks" :key="social.id" :href="social.link" target="_blank">
                            <i class="fab" :class=social.icon></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header">
        <div class="container">
            <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                <a href="#" class="navbar-brand">MENU</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav m-auto">
                        <Link href="/" class="nav-item nav-link" :class="{ 'active': isActive('/') }">Home</Link>
                        <Link v-for="category in menuCategories" :key="category.id" 
                            :href="`/news/${category.slug}`" class="nav-item nav-link">{{ category.name }}</Link>
                        <Link href="/news" class="nav-item nav-link" :class="{ 'active': isActive('/news') }">News</Link>
                        <Link href="/contact-us" class="nav-item nav-link" :class="{ 'active': isActive('/contact-us') }">Contact Us</Link>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</template>

<script setup>
    import { Link, usePage} from '@inertiajs/vue3';

    const page = usePage();
    const isActive = (url) => page.url === url;

    const { menuCategories, socialLinks, setting } = usePage().props
</script>