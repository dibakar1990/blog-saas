<template>
    <div class="top-news">
      <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 tn-left">
                  <div class="tn-img">
                      <img :src="'/assets/img/top-news-1.jpg'" />
                      <div class="tn-content">
                          <div class="tn-content-inner">
                              <a class="tn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                              <a class="tn-title" href="">Lorem ipsum dolor sit amet adipiscing elit</a>
                          </div>
                      </div>
                  </div>
                </div>
                <div class="col-md-4 tn-left">
                  <div class="tn-img">
                      <img :src="'/assets/img/top-news-1.jpg'" />
                      <div class="tn-content">
                       
                          <div class="tn-content-inner">
                             <h5 style="color: #fff;">Sports</h5>
                              <a class="tn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                              <a class="tn-title" href="">Lorem ipsum dolor sit amet adipiscing elit</a>
                          </div>
                      </div>
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
                                    <Link :href="category.slug">{{ category.name }}</Link></li>
                              </ul>
                          </div>
                      </div>

                      <div class="sidebar-widget">
                          <h2><i class="fas fa-align-justify"></i>Tags</h2>
                          <div class="tags">
                              <a href="">National</a>
                              <a href="">International</a>
                              <a href="">Economics</a>
                              <a href="">Politics</a>
                              <a href="">Lifestyle</a>
                              <a href="">Technology</a>
                              <a href="">Trades</a>
                              <a href="">National</a>
                              <a href="">International</a>
                              <a href="">Economics</a>
                              <a href="">Politics</a>
                              <a href="">Lifestyle</a>
                              <a href="">Technology</a>
                              <a href="">Trades</a>
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
    defineOptions({
    layout: Layout
    })

    import Layout from '@/Layouts/MainLayout.vue';
    import { Link, usePage} from '@inertiajs/vue3';

    const page = usePage();
    const { categories } = usePage().props
</script>