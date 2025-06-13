<template>
  <div class="top-news">
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-6 tn-left">
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
              <div class="col-md-6 tn-right">
                  <div class="row">
                      <div class="col-md-6">
                          <div class="tn-img">
                              <img :src="'/assets/img/top-news-2.jpg'" />
                              <div class="tn-content">
                                  <div class="tn-content-inner">
                                      <a class="tn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                      <a class="tn-title" href="">Integer faucibus pharetra odio</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="tn-img">
                              <img :src="'/assets/img/top-news-3.jpg'" />
                              <div class="tn-content">
                                  <div class="tn-content-inner">
                                      <a class="tn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                      <a class="tn-title" href="">Nulla vitae pharetra ligula</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="tn-img">
                              <img :src="'/assets/img/top-news-4.jpg'" />
                              <div class="tn-content">
                                  <div class="tn-content-inner">
                                      <a class="tn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                      <a class="tn-title" href="">Ut ac euismod tellus a blandit</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="tn-img">
                              <img :src="'/assets/img/top-news-5.jpg'" />
                              <div class="tn-content">
                                  <div class="tn-content-inner">
                                      <a class="tn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                      <a class="tn-title" href="">Cras ac egestas sem nec euismod</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="cat-news">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h2><i class="fas fa-align-justify"></i>Sports</h2>
                <div class="row cn-slider">
                    <div class="col-md-6">
                        <div class="cn-img">
                            <img :src="'/assets/img/cat-news-1.jpg'" />
                            <div class="cn-content">
                                <div class="cn-content-inner">
                                    <a class="cn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                    <a class="cn-title" href="">Cras sed semper puru vitae lobortis velit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="cn-img">
                            <img :src="'/assets/img/cat-news-2.jpg'" />
                            <div class="cn-content">
                                <div class="cn-content-inner">
                                    <a class="cn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                    <a class="cn-title" href="">Vestibulum ante ipsum primis</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="cn-img">
                            <img :src="'/assets/img/cat-news-3.jpg'" />
                            <div class="cn-content">
                                <div class="cn-content-inner">
                                    <a class="cn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                    <a class="cn-title" href="">Sed quis convallis lacus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h2><i class="fas fa-align-justify"></i>Technology</h2>
                <div class="row cn-slider">
                    <div class="col-md-6">
                        <div class="cn-img">
                            <img :src="'/assets/img/cat-news-4.jpg'" />
                            <div class="cn-content">
                                <div class="cn-content-inner">
                                    <a class="cn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                    <a class="cn-title" href="">Vivamus vel felis nec magna</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="cn-img">
                            <img :src="'/assets/img/cat-news-5.jpg'" />
                            <div class="cn-content">
                                <div class="cn-content-inner">
                                    <a class="cn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                    <a class="cn-title" href="">Phasellus vitae fermentum est</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="cn-img">
                            <img :src="'/assets/img/cat-news-6.jpg'" />
                            <div class="cn-content">
                                <div class="cn-content-inner">
                                    <a class="cn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                    <a class="cn-title" href="">Aenean ut varius dui</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>

  <div class="cat-news">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h2><i class="fas fa-align-justify"></i>Business</h2>
                <div class="row cn-slider">
                    <div class="col-md-6">
                        <div class="cn-img">
                            <img :src="'/assets/img/cat-news-7.jpg'" />
                            <div class="cn-content">
                                <div class="cn-content-inner">
                                    <a class="cn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                    <a class="cn-title" href="">Interdum et malesuada fames ac ante</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="cn-img">
                            <img :src="'/assets/img/cat-news-8.jpg'" />
                            <div class="cn-content">
                                <div class="cn-content-inner">
                                    <a class="cn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                    <a class="cn-title" href="">Mauris non ligula eget ante sagittis</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="cn-img">
                            <img :src="'/assets/img/cat-news-9.jpg'" />
                            <div class="cn-content">
                                <div class="cn-content-inner">
                                    <a class="cn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                    <a class="cn-title" href="">Integer non nunc nec nulla aliquet</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-6">
                <h2><i class="fas fa-align-justify"></i>Entertainment</h2>
                <div class="row cn-slider">
                    <div class="col-md-6">
                        <div class="cn-img">
                            <img :src="'/assets/img/cat-news-10.jpg'" />
                            <div class="cn-content">
                                <div class="cn-content-inner">
                                    <a class="cn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                    <a class="cn-title" href="">Ut laoreet justo non ornare</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="cn-img">
                            <img :src="'/assets/img/cat-news-11.jpg'" />
                            <div class="cn-content">
                                <div class="cn-content-inner">
                                    <a class="cn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                    <a class="cn-title" href="">Proin a nulla ut enim feugiat</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="cn-img">
                            <img :src="'/assets/img/cat-news-12.jpg'" />
                            <div class="cn-content">
                                <div class="cn-content-inner">
                                    <a class="cn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                    <a class="cn-title" href="">Sed mauris sem sollicitudin at neque</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>

  <div class="main-news">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12">
                        <h2><i class="fas fa-align-justify"></i>Latest News</h2>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mn-img">
                                    <img :src="'/assets/img/latest-news.jpg'" />
                                </div>
                                <div class="mn-content">
                                    <a class="mn-title" href="">Cras commodo sem ut porta laoreet</a>
                                    <a class="mn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed porta dui. Class aptent taciti sociosqu ad litora torquent per conubia nostra inceptos...
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mn-list">
                                    <div class="mn-img">
                                        <img :src="'/assets/img/latest-news.jpg'" />
                                    </div>
                                    <div class="mn-content">
                                        <a class="mn-title" href="">Pellentesque sit amet rutrum lacus</a>
                                        <a class="mn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                    </div>
                                </div>
                                <div class="mn-list">
                                    <div class="mn-img">
                                        <img :src="'/assets/img/latest-news.jpg'" />
                                    </div>
                                    <div class="mn-content">
                                        <a class="mn-title" href="">Proin id pretium orci, quis rhoncus eros</a>
                                        <a class="mn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                    </div>
                                </div>
                                <div class="mn-list">
                                    <div class="mn-img">
                                        <img :src="'/assets/img/latest-news.jpg'" />
                                    </div>
                                    <div class="mn-content">
                                        <a class="mn-title" href="">Curabitur viverra scelerisque tempor</a>
                                        <a class="mn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                    </div>
                                </div>
                                <div class="mn-list">
                                    <div class="mn-img">
                                        <img :src="'/assets/img/latest-news.jpg'" />
                                    </div>
                                    <div class="mn-content">
                                        <a class="mn-title" href="">Integer nec lorem facilisis interdum lorem non</a>
                                        <a class="mn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                    </div>
                                </div>
                                <div class="mn-list">
                                    <div class="mn-img">
                                        <img :src="'/assets/img/latest-news.jpg'" />
                                    </div>
                                    <div class="mn-content">
                                        <a class="mn-title" href="">Interdum et malesuada fames</a>
                                        <a class="mn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <h2><i class="fas fa-align-justify"></i>Popular News</h2>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mn-img">
                                    <img :src="'/assets/img/popular-news.jpg'" />
                                </div>
                                <div class="mn-content">
                                    <a class="mn-title" href="">Phasellus gravida metus vitae laoreet aliquam</a>
                                    <a class="mn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed porta dui. Class aptent taciti sociosqu ad litora torquent per conubia nostra inceptos...
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mn-list">
                                    <div class="mn-img">
                                        <img :src="'/assets/img/popular-news.jpg'" />
                                    </div>
                                    <div class="mn-content">
                                        <a class="mn-title" href="">Nullam risus ante sempe</a>
                                        <a class="mn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                    </div>
                                </div>
                                <div class="mn-list">
                                    <div class="mn-img">
                                        <img :src="'/assets/img/popular-news.jpg'" />
                                    </div>
                                    <div class="mn-content">
                                        <a class="mn-title" href="">Pellentesque ultrices quam id ipsum tempor</a>
                                        <a class="mn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                    </div>
                                </div>
                                <div class="mn-list">
                                    <div class="mn-img">
                                        <img :src="'/assets/img/popular-news.jpg'" />
                                    </div>
                                    <div class="mn-content">
                                        <a class="mn-title" href="">Nam ex magna, commodo sed turpis rutrum</a>
                                        <a class="mn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                    </div>
                                </div>
                                <div class="mn-list">
                                    <div class="mn-img">
                                        <img :src="'/assets/img/popular-news.jpg'" />
                                    </div>
                                    <div class="mn-content">
                                        <a class="mn-title" href="">Aliquam condimentum metus</a>
                                        <a class="mn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                    </div>
                                </div>
                                <div class="mn-list">
                                    <div class="mn-img">
                                        <img :src="'/assets/img/popular-news.jpg'" />
                                    </div>
                                    <div class="mn-content">
                                        <a class="mn-title" href="">Ut ornare rutrum ligula erat volutpat</a>
                                        <a class="mn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="sidebar">
                    <div class="sidebar-widget">
                        <h2><i class="fas fa-align-justify"></i>Category</h2>
                        <div class="category">
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a href="">National</a></li>
                                <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a href="">International</a></li>
                                <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a href="">Economics</a></li>
                                <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a href="">Politics</a></li>
                                <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a href="">Lifestyle</a></li>
                                <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a href="">Technology</a></li>
                                <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a href="">Trades</a></li>
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
</script>