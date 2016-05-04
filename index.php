<?php get_header(); ?>
<div class="wide_wrap">
    <div class="container clearfix">
        <?php get_sidebar(); ?>
        <div class="main_content">
            <h2>人気の記事<a class="feed_res" href="#">もっと見る</a></h2>
            <div class="posts_box clearfix">
                <?php query_posts('posts_per_page=8'); ?>
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <a class="pbox_link" href="<?php the_permalink(); ?>">
                        <div class="pbox">
                            <?php the_post_thumbnail(); ?>
                            <div class="ptext">
                                <h3><?php the_title(); ?></h3>
                            </div>
                        </div>
                    </a>
                <?php endwhile; endif; ?>
            </div>
            <h2>RSSフィード<a class="feed_res" href="#">Feedの申請はこちらから</a></h2>
            <div class="feed_list_box">
                <ul class="feeds_list">
                    <li class="clearfix">
                        <span class="blog_title">Qiita</span>
                        <a href="#">Wordpress用フレームワーク「Herbert」設定ファイル解剖</a>
                        <time>2016年5月3日</time>
                    </li>
                    <li class="clearfix">
                        <span class="blog_title">Qiita</span>
                        <a href="#">Wordpress用フレームワーク「Herbert」設定ファイル解剖</a>
                        <time>2016年5月3日</time>
                    </li>
                    <li class="clearfix">
                        <span class="blog_title">Qiita</span>
                        <a href="#">Wordpress用フレームワーク「Herbert」設定ファイル解剖</a>
                        <time>2016年5月3日</time>
                    </li>
                    <li class="clearfix">
                        <span class="blog_title">Qiita</span>
                        <a href="#">Wordpress用フレームワーク「Herbert」設定ファイル解剖</a>
                        <time>2016年5月3日</time>
                    </li>
                    <li class="clearfix">
                        <span class="blog_title">Qiita</span>
                        <a href="#">Wordpress用フレームワーク「Herbert」設定ファイル解剖</a>
                        <time>2016年5月3日</time>
                    </li>
                    <li class="clearfix">
                        <span class="blog_title">Qiita</span>
                        <a href="#">Wordpress用フレームワーク「Herbert」設定ファイル解剖</a>
                        <time>2016年5月3日</time>
                    </li>
                    <li class="clearfix">
                        <span class="blog_title">Qiita</span>
                        <a href="#">Wordpress用フレームワーク「Herbert」設定ファイル解剖</a>
                        <time>2016年5月3日</time>
                    </li>
                    <li class="clearfix">
                        <span class="blog_title">Qiita</span>
                        <a href="#">Wordpress用フレームワーク「Herbert」設定ファイル解剖</a>
                        <time>2016年5月3日</time>
                    </li>

                    <li class="clearfix">
                        <span class="blog_title">Qiita</span>
                        <a href="#">Wordpress用フレームワーク「Herbert」設定ファイル解剖</a>
                        <time>2016年5月3日</time>
                    </li>
                    <li class="clearfix">
                        <span class="blog_title">Qiita</span>
                        <a href="#">Wordpress用フレームワーク「Herbert」設定ファイル解剖</a>
                        <time>2016年5月3日</time>
                    </li>
                    <li class="clearfix">
                        <span class="blog_title">Qiita</span>
                        <a href="#">Wordpress用フレームワーク「Herbert」設定ファイル解剖</a>
                        <time>2016年5月3日</time>
                    </li>
                    <li class="clearfix">
                        <span class="blog_title">Qiita</span>
                        <a href="#">Wordpress用フレームワーク「Herbert」設定ファイル解剖</a>
                        <time>2016年5月3日</time>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
