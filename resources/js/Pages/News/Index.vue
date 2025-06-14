<template>
    <Head :title="pageTitle" />
    <div class="top-news">
      <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 tn-left">
                    <div class="row">
                        <div class="col-md-6" v-for="entry in props.news.data" :key="entry.id">
                            <div class="tn-img">
                                <img :src="entry.file_path_url" />
                                <div class="tn-content">
                                    <div class="tn-content-inner">
                                        <h5 style="color: #fff;">{{ entry.category.name }}</h5>
                                        <Link class="tn-date" :href="`/news-deatils/${entry.slug}`"><i class="far fa-clock"></i>{{ entry.post_date }}</Link>
                                        <Link class="tn-title" :href="`/news-details/${entry.slug}`">{{ entry.title }}</Link>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="col-md-6" v-if="props.news.data.length === 0">
                            <h5>No news available here</h5>
                         </div>
                         <pagination :links="props.news.links" />
                    </div>
                </div>
                
              

              <div class="col-md-4 tn-right">
                  <div class="sidebar">
                      <div class="sidebar-widget">
                          <h2><i class="fas fa-align-justify"></i>Category</h2>
                          <div class="category">
                              <ul class="fa-ul">
                                  <li v-for="category in categories" :key="category.id">
                                    <span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span>
                                    <Link :href="`/news/${category.slug}`">{{ category.name }}</Link></li>
                                  
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
    defineOptions({
        layout: Layout
    })
    const props = defineProps({
        news: Object,
        tags: Object
    });
    const appName = setting.app_name || 'Blog-Saas'
    const pageTitle = `${appName} | News`
    import Layout from '@/Layouts/MainLayout.vue';
    import { Link, Head, usePage} from '@inertiajs/vue3';
    import pagination from '@/Components/Pagination.vue';
    
</script>