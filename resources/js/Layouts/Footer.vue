<template>
    <div class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h3 class="title">Useful Links</h3>
                        <ul>
                            <li><Link v-for="category in categories" :key="category.id" 
                            :href="category.slug">{{ category.name }}</Link></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h3 class="title">Quick Links</h3>
                        <ul>
                             <li><Link href="/news">News</Link></li>
                            <li><Link href="/about-us">About Us</Link></li>
                            <li><Link href="#">Privacy Policy</Link></li>
                            <li><Link href="#">Terms & Conditions</Link></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h3 class="title">Get in Touch</h3>
                        <div class="contact-info">
                            <p><i class="fa fa-map-marker"></i>{{ setting.location }}</p>
                            <p><i class="fa fa-envelope"></i>{{ setting.email }}</p>
                            <p><i class="fa fa-phone"></i>+91 {{ setting.phone }}</p>
                            <div class="social">
                                <a v-for="social in socialLinks" :key="social.id" :href="social.link" target="_blank">
                                    <i class="fab" :class=social.icon></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h3 class="title">Newsletter</h3>
                        <div class="newsletter">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed porta dui. Class aptent taciti sociosqu ad litora torquent per conubia nostra inceptos
                            </p>
                            <form @submit.prevent="submit">
                                <input class="form-control" type="email" v-model="form.sub_email" placeholder="Your email here">
                                <span v-if="form.errors.sub_email" class="invalid-feedback">{{ form.errors.sub_email[0] }}</span>
                                <button class="btn" :disabled="form.processing" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 copyright">
                    <p>Copyright &copy; <a href="https://htmlcodex.com">HTML Codex</a>. All Rights Reserved</p>
                </div>

                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                <div class="col-md-6 template-by">
                    <p>Template By <a href="https://htmlcodex.com">HTML Codex</a></p>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
    import { Link, usePage, useForm} from '@inertiajs/vue3';
    const { categories, socialLinks, setting } = usePage().props
    const form = useForm({
    sub_email: ''
  })
  const submit = () => {
    form.post('/subscribe-email',{
        onSuccess: () => {
            form.reset()
        },
        onError: (errors) => {
            console.log('Validation Errors:', errors)
        }
    })
  }
</script>