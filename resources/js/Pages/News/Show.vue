<template>
    <Head :title="pageTitle" />
  <Breadcrumb :home="props.breadcrumb.home" :news="props.breadcrumb.news" :active="props.breadcrumb.active" :previousUrl="props.breadcrumb.previousUrl"/>
   <div class="single-news">
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-8">
                  <div class="sn-img">
                      <img :src="news.file_path_url" />
                  </div>
                  <div class="sn-content">
                      <a class="sn-title" href="javascript:void(0)">{{ news.title }}</a>
                      <a class="sn-date" href=""><i class="far fa-clock"></i>{{ news.post_date }}</a>
                      <div v-html="formattedContent" />
                  </div>
              </div>

              <div class="col-md-4">
                  <div class="sidebar">
                      <div class="sidebar-widget">
                          <h2><i class="fas fa-align-justify"></i>Category</h2>
                          <div class="category">
                              <ul class="fa-ul">
                                   <li v-for="category in categories" :key="category.id">
                                    <span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span>
                                    <Link :href="`/${category.slug}`">{{ category.name }}</Link></li>
                              </ul>
                          </div>
                      </div>

                      <div class="sidebar-widget">
                          <h2><i class="fas fa-align-justify"></i>Tags</h2>
                          <div class="tags">
                              <Link v-for="tag in tags" :key="tag.id" :href="`/news/${tag.slug}?type=${'tag'}`">{{ tag.name }}</Link>
                          </div>
                      </div>

                      <div class="sidebar-widget">
                          <h2><i class="fas fa-align-justify"></i>Ads 1 column</h2>
                          <div class="image">
                              <a href=""><img :src="'/assets/img/adds-1.jpg'" alt="Image"></a>
                          </div>
                      </div>

                      <div class="sidebar-widget">
                          <h2><i class="fas fa-align-justify"></i>Ads 2 column</h2>
                          <div class="image">
                              <div class="row">
                                  <div class="col-sm-6">
                                      <a href=""><img :src="'/assets/img/adds-2.jpg'" alt="Image"></a>
                                  </div>
                                  <div class="col-sm-6">
                                      <a href=""><img :src="'/assets/img/adds-2.jpg'" alt="Image"></a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</template>

<script setup>
    const { news, categories, tags, setting } = usePage().props
    import { Link, usePage, Head } from '@inertiajs/vue3';
    import Breadcrumb from '@/Components/Breadcrumb.vue';
    import Layout from '@/Layouts/MainLayout.vue';
    defineOptions({
    layout: Layout
    })
    const props = defineProps({
        breadcrumb: Object,
        news: Object
    });
    const appName = setting.app_name || 'Blog-Saas'
    const pageTitle = `${appName} | News Details`
    const formattedContent = news.description.replace(/\n/g, '<br>')
    
    console.log(news);
    
</script>