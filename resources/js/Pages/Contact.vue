<template>
  <Head :title="pageTitle" />
    <div class="breadcrumb-wrap">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Contact</li>
            </ul>
        </div>
    </div>
    <div class="contact">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <div class="form">
                            <form @submit.prevent="submit">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" v-model="form.name" placeholder="Your Name" />
                                        <span class="invalid-feedback">{{ form.errors.name }}</span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="email" class="form-control" v-model="form.email" placeholder="Your Email" />
                                        <span class="invalid-feedback">{{ form.errors.email }}</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" v-model="form.subject" placeholder="Subject" />
                                    <span class="invalid-feedback">{{ form.errors.subject }}</span>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="5" v-model="form.message" placeholder="Message"></textarea>
                                     <span class="invalid-feedback">{{ form.errors.message }}</span>
                                </div>
                                <div><button class="btn" type="submit" :disabled="form.processing">Send Message</button></div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3020.985767636229!2d-73.52689268518203!3d40.78432704112558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c281127307115f%3A0x90d5abaf2f0279de!2sTerry%20Ln%2C%20Jericho%2C%20NY%2011753%2C%20USA!5e0!3m2!1sen!2sbd!4v1580837516748!5m2!1sen!2sbd" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-info">
                            <h3>Get in Touch</h3>
                            <p>
                                {{  setting.description }}
                            </p>
                            <h4><i class="fa fa-map-marker"></i>{{ setting.location }}</h4>
                            <h4><i class="fa fa-envelope"></i>{{ setting.email }}</h4>
                            <h4><i class="fa fa-phone"></i>+91 {{ setting.phone }}</h4>
                            <div class="social">
                                <a v-for="social in socialLinks" :key="social.id" :href="social.link" target="_blank">
                                    <i class="fab" :class=social.icon></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</template>

<script setup>
  import { Link, Head, usePage, useForm} from '@inertiajs/vue3';
  import Layout from '@/Layouts/MainLayout.vue';
  const { setting, socialLinks } = usePage().props
  defineOptions({
    layout: Layout
  })

  const form = useForm({
    name: '',
    email: '',
    subject: '',
    message: ''
  })
  const submit = () => {
    form.post('/contact-store')
  }
  const appName = setting.app_name || 'Blog-Saas'
  const pageTitle = `${appName} | Contact-Us`
</script>