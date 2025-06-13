<template>
    <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><Link href="/">{{ props.home }}</Link></li>
                    <li class="breadcrumb-item"><Link :href="props.previousUrl">{{ props.news }}</Link></li>
                    <li class="breadcrumb-item active">{{ active }}</li>
                </ul>
            </div>
        </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
const props = defineProps({
  home: String,
  news: String,
  active: String,
  previousUrl: String
})
</script>