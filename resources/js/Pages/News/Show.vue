<template>
  <Breadcrumb :home="props.breadcrumb.home" :news="props.breadcrumb.news" :active="props.breadcrumb.active" :previousUrl="props.breadcrumb.previousUrl"/>
   <div class="single-news">
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-8">
                  <div class="sn-img">
                      <img :src="'/assets/img/top-news-1.jpg'" />
                  </div>
                  <div class="sn-content">
                      <a class="sn-title" href="">Lorem ipsum dolor sit amet</a>
                      <a class="sn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                      <p>
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tristique dictum tincidunt. Nam rhoncus sem vitae orci blandit, quis fermentum justo laoreet. Fusce vestibulum orci vitae luctus tincidunt. Maecenas eros elit, scelerisque at justo eget, consectetur semper turpis. Proin pulvinar lorem eu sapien fermentum, sed finibus augue convallis. Aliquam ultrices porta gravida. Vestibulum nec libero sit amet enim consequat facilisis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras facilisis massa eget suscipit venenatis. Suspendisse et molestie diam. Vestibulum in massa dapibus, blandit nibh ut, feugiat leo.
                      </p>
                      <p>
                          Nulla consectetur risus libero. Donec mattis tortor justo, ac egestas purus condimentum in. Etiam viverra nec metus quis egestas. Nulla commodo, lectus nec dictum malesuada, tortor tellus consequat nisi, sit amet dictum erat tellus in libero. In dignissim lectus quis elit posuere, sit amet tempor nisi iaculis. Curabitur eget ante in libero laoreet finibus nec et libero. In hac habitasse platea dictumst. Morbi tincidunt ex non odio auctor tristique. Nulla facilisi. Maecenas ullamcorper, felis eget interdum semper, mi ipsum auctor magna, ut ullamcorper leo metus vitae ex. Curabitur eu tempor elit. Phasellus blandit elit fringilla, ultricies ligula sed, pretium ligula. Duis condimentum elementum orci, pulvinar mattis elit luctus at. Vestibulum lacinia porttitor urna, eget aliquet justo porta sed. Cras pulvinar euismod consectetur. Vestibulum quis nisi non erat feugiat viverra. 
                      </p>
                      <p>
                          Aliquam eleifend pharetra nunc, et finibus felis tristique nec. Ut mattis nisi ante, vel varius ipsum consectetur sit amet. Donec sed eros at magna sollicitudin molestie. Cras quis malesuada felis. Maecenas sodales nunc sit amet lobortis iaculis. Etiam eget consectetur sem, et aliquet justo. Curabitur at viverra lacus, eget feugiat erat. Fusce lacinia faucibus diam ut vestibulum. Vestibulum nisi sem, lacinia ullamcorper iaculis a, finibus eget mauris. Vestibulum elementum quam quam, sit amet condimentum odio luctus at. Aenean dictum nec nisi vitae hendrerit. Nulla facilisi. 
                      </p>
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
    const props = defineProps({
        breadcrumb: Object,
    });
    
    const { categories } = usePage().props
    console.log(categories);
    import { Link, usePage } from '@inertiajs/vue3';
    import Breadcrumb from '@/Components/Breadcrumb.vue';
    import Layout from '@/Layouts/MainLayout.vue';
</script>