<template>
    <Header />
        <main>
            <slot />
        </main>
    <Footer />

    <Link href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></Link>
</template>

<script setup>
    import { Link, usePage, } from '@inertiajs/vue3'
    import Header from '@/Layouts/Header.vue';
    import Footer from '@/Layouts/Footer.vue';
    import Swal from 'sweetalert2'
    import { watch } from 'vue'
    import { useToast } from 'vue-toastification'

    const page = usePage()
    // const toast = useToast()

    function showAlert(type, message) {
        Swal.fire({
            icon: type,
            title: message,
            toast: true,
            position: 'top-end',
            timer: 3000,
            timerProgressBar: true,
            showConfirmButton: false,
        })
    }
    watch(() => page.props.flash, (newFlash) => {
        if (newFlash.success) {
            showAlert('success', newFlash.success)
        } else if (newFlash.error) {
            showAlert('error', newFlash.error)
        }
    })
    
   /* watch(() => page.props.flash, (newFlash) => {
        if (newFlash.success) {
            toast.success(newFlash.success)
        } else if (newFlash.error) {
            toast.error(newFlash.error)
        }
    }) */
</script>