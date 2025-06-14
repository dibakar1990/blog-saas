<template>
    <Head :title="pageTitle" />
    <div class="top-news">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 tn-left">
                    <div class="tn-img" v-for="(item, index) in headNews" :key="item.id">
                        <img :src="item.file_path_url" v-if="index == 0"/>
                        <div class="tn-content"  v-if="index == 0">
                            <div class="tn-content-inner">
                                <a class="tn-date" :href="`/news-deatls/${item.slug}`"><i class="far fa-clock"></i>{{ item.post_date }}</a>
                                <a class="tn-title" :href="`/news-deatls/${item.slug}`">{{ item.title }}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 tn-right">
                    <div class="row">
                        <div class="col-md-6" v-for="row in filteredNews" :key="row.id">
                            <div class="tn-img">
                                <img :src="row.file_path_url"/>
                                <div class="tn-content">
                                    <div class="tn-content-inner">
                                        <a class="tn-date" :href="`/news-deatls/${row.slug}`"><i class="far fa-clock"></i>{{ row.post_date }}</a>
                                        <a class="tn-title" :href="`/news-deatls/${row.slug}`">{{ row.title }}</a>
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
                <div class="col-md-6" v-for="entry in cateNews" :key="entry.id">
                    <h2><i class="fas fa-align-justify"></i>{{ entry.name }}</h2>
                    <div class="row cn-slider">
                        <div class="col-md-6" v-for="blog in entry.blogs" :key="blog.id">
                            <div class="cn-img">
                                <img :src="blog.file_path_url" />
                                <div class="cn-content">
                                    <div class="cn-content-inner">
                                        <a class="cn-date" :href="`/news-details/${blog.slug}`"><i class="far fa-clock"></i>{{ blog.post_date }}</a>
                                        <a class="cn-title" :href="`/news-details/${blog.slug}`">{{ blog.title }}</a>
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
                                        <img :src="latestFirstNews.file_path_url" />
                                    </div>
                                    <div class="mn-content">
                                        <a class="mn-title" :href="`/news-details/${latestFirstNews.slug}`">{{ latestFirstNews.title }}</a>
                                        <a class="mn-date" :href="`/news-details/${latestFirstNews.slug}`"><i class="far fa-clock"></i>{{ latestFirstNews.post_date }}</a>
                                         <span v-html="latestFirstNews.short_description"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mn-list" v-for="latest in filteredLatestNews">
                                        <div class="mn-img">
                                            <img :src="latest.file_path_url" />
                                        </div>
                                        <div class="mn-content">
                                            <a class="mn-title" :href="`/news-details/${latest.slug}`">{{ latest.title }}</a>
                                        <a class="mn-date" :href="`/news-details/${latest.slug}`"><i class="far fa-clock"></i>{{ latest.post_date }}</a>
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
                                        <img :src="popularFirstNews.file_path_url" />
                                    </div>
                                    <div class="mn-content">
                                        <a class="mn-title" :href="`/news-details/${popularFirstNews.slug}`">{{ popularFirstNews.title }}</a>
                                        <a class="mn-date" :href="`/news-details/${popularFirstNews.slug}`"><i class="far fa-clock"></i>{{ popularFirstNews.post_date }}</a>
                                         <div v-html="popularFirstNews.short_description"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mn-list" v-for="popular in filteredPopularNews">
                                        <div class="mn-img">
                                            <img :src="popular.file_path_url" />
                                        </div>
                                        <div class="mn-content">
                                           <a class="mn-title" :href="`/news-details/${popular.slug}`">{{ popular.title }}</a>
                                            <a class="mn-date" :href="`/news-details/${popular.slug}`"><i class="far fa-clock"></i>{{ popular.post_date }}</a>
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
    import { Link, Head, usePage} from '@inertiajs/vue3';
    import Layout from '@/Layouts/MainLayout.vue';
    const { setting, categories, tags, data } = usePage().props
    defineOptions({
        layout: Layout
    })
    const props = defineProps({
        data: Object,
        tags: Object,
        latestFirstNews: Array,
        popularFirstNews: Array
    });
    const headNews =  props.data.headNews;
    const filteredNews =  props.data.headNews.slice(1);
    const cateNews =  props.data.categoryBlog;
    const latestFirstNews = props.data.latestNews[0];
    const filteredLatestNews =  props.data.latestNews.slice(1);
    const popularFirstNews = props.data.topNews[0];
    const filteredPopularNews =  props.data.topNews.slice(1);
    const appName = setting.app_name || 'Blog-Saas'
    const pageTitle = `${appName} | Home`
   
</script>