<?php 
    /*
        Template Name: Home Template
    */ 
?>
<?php get_header(); ?>
<?php the_post(); ?> 
        
        <!-- Start Slider Area -->
        <section id="slider_area" class="text-center">
            <div class="slider_active owl-carousel">
                <?php  
                    $args=array(
                        'post_type' => 'slide',
                        'post_status' => 'publish',
                        'orderby' => 'date',
                        'order' => 'ASC',
                        'posts_per_page' => -1,
                    );
                ?>
                <?php $k =''; ?>
                <?php $my_query = new WP_Query($args); ?>
                <?php if( $my_query->have_posts() ) : ?>
                <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                <?php $k++; ?>   
                    <div class="single_slide" style="background-image: url(<?php the_post_thumbnail_url();?>); background-size: cover; background-position: center;">
                        <div class="container"> 
                            <div class="single-slide-item-table">
                                <div class="single-slide-item-tablecell">
                                    <div class="slider_content <?php if($k%2 == 0) { echo "text-left slider-animated-1";} else {echo "text-center slider-animated-2";}; ?>">                        
                                        <!-- <p class="animated">Women fashion</p> -->
                                        <h1 class="animated"><?php the_title(); ?></h1>
                                        <?php if(!empty(get_the_content())): ?>
                                        <h4 class="animated"><?php the_content(); ?></h4>
                                        <?php endif; ?>
                                        <a href="#" class="btn main_btn animated">Xem thêm</a>
                                    </div>
                                </div>
                            </div>                      
                        </div>
                    </div>               
                <?php endwhile; wp_reset_postdata(); endif;  ?>
            </div>
        </section>
        <!-- End Slider Area -->
        
        <!--  Process -->
        <section class="process_area section_padding">
            <div class="container">
                <div class="row text-center">       
                    <div class="col-md-4 col-12">
                        <div class="single-process">
                            <!-- process Icon -->
                            <div class="picon"><i class="fa fa-share"></i></div>
                            <!-- process Content -->
                            <div class="process_content">
                                <h3>Phương thức đổi trả</h3>
                                <p>Hỗ trợ đổi size sản phẩm trong thời gian 3 ngày kể từ lúc nhận hàng</p>
                            </div>
                        </div>  
                    </div>  <!-- End Col -->                

                    <div class="col-md-4 col-12">
                        <div class="single-process">
                            <!-- process Icon -->
                            <div class="picon"><i class="fa fa-plane"></i></div>
                            <!-- process Content -->
                            <div class="process_content">
                                <h3>Giao hàng trên toàn quốc</h3>
                                <p>Freeship với hóa đơn có giá trị từ<br>1.000.000 VND</p>
                            </div>
                        </div>  
                    </div>  <!-- End Col -->                

                    <div class="col-md-4 col-12">
                        <div class="single-process">
                            <!-- process Icon -->
                            <div class="picon"><i class="fa fa-headphones "></i></div>
                            <!-- process Content -->
                            <div class="process_content">
                                <h3>Hỗ trợ trực tuyến</h3>
                                <p>Luôn sẵn sàng hỗ trợ. Mọi thắc mắc vui lòng liên hệ trực tiếp Hotline : 0932726879</p>
                            </div>
                        </div>  
                    </div>  <!-- End Col -->        
                </div>
            </div>
        </section>
        <!--  End Process -->
    
        <!--  Promo ITEM STRAT  -->
        <section id="promo_area" class="section_padding">
            <div class="container">
                <div class="row">
                    <?php 
                    $taxonomy = 'product_cat';
                    $term_args = array(
                        'post_type' => "product",
                        'hide_empty' => true,
                        'orderby' => 'slug',
                        'order' => 'ASC',
                        'taxonomy' => $taxonomy,
                        'parent' => 0,
                    );
                    $tax_terms = get_terms($taxonomy, $term_args);
                    foreach ($tax_terms as $key => $term) { 
                        $thumbnail_id = get_woocommerce_term_meta( $term->term_id, 'thumbnail_id', true );
                        $image = wp_get_attachment_url( $thumbnail_id ); ?>
                    <div class="col-lg-6 col-md-6 col-sm-12">   
                        <a href="<?php echo get_term_link($term->term_id, $taxonomy); ?>">
                            <div class="single_promo">
                                <img src="<?php echo $image;?>" alt="">
                                <div class="box-content">
                                    <h3 class="title"><?php echo $term->name;?></h3>
                                    <!-- <span class="post">2018 Collection</span> -->
                                </div>
                            </div>
                        </a>                        
                    </div>                    
                    <?php } ?>

                
                </div>          
            </div>      
        </section>
        <!--  Promo ITEM END -->    
        

        <!-- Start product Area -->
        <section id="product_area" class="section_padding">
            <div class="container">     
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="section_title">                     
                            <h2>Sản Phẩm <span>Yêu Thích</span></h2>
                            <div class="divider"></div>                         
                        </div>
                    </div>
                </div>
            
                <div class="text-center">
                    <div class="product_filter">
                        <ul>
                            <li class=" active filter" data-filter="all">ALL</li>
                            <?php
                            $taxonomy = 'product_cat';
                            $term_args = array(
                                'post_type' => "product",
                                'hide_empty' => true,
                                'orderby' => 'slug',
                                'order' => 'ASC',
                                'taxonomy' => $taxonomy,
                                'parent' => 0,
                                // 'child_of' => 68
                                // 'pad_counts' => true
                            );
                            $tax_terms = get_terms($taxonomy, $term_args);
                            foreach ($tax_terms as $key => $term) { ?>
                            <li class="filter <?php echo $key; ?> <?php if($key==0) echo 'active'; ?>" data-filter=".<?php echo $term->slug; ?>"><?php echo $term->name; ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                    
                    <div class="product_item">
                        <div class="row">   
                            <?php
                            $taxonomy = 'product_cat';
                            $term_args = array(
                                'post_type' => "product",
                                'hide_empty' => true,
                                'orderby' => 'slug',
                                'order' => 'ASC',
                                'taxonomy' => $taxonomy,
                                'parent' => 0,
                                // 'child_of' => 68
                                // 'pad_counts' => true
                            );
                            $tax_terms = get_terms($taxonomy, $term_args);
                            foreach ($tax_terms as $key => $term) { ?>
                            <?php
                                $args_post = array(
                                'post_type' => 'product',
                                'posts_per_page' => -1,
                                'orderby'=> 'date',
                                'order' => 'ASC',
                                'child_of'     => 0,
                                'parent'       => 0,
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => $taxonomy,
                                        'field' => 'slug',
                                        'terms' => $term->slug,
                                        'include_children' => false
                                     )
                                  )
                                );
                                $query = new WP_Query( $args_post );
                                if ( $query->have_posts() ):
                                while ( $query->have_posts() ) : $query->the_post();
                                    $price = get_post_meta( get_the_ID(), '_regular_price', true);
                                    $pid = $post->ID;
                                    $product = new WC_Product( $pid );
                            ?>

                            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mix <?php echo $term->slug; ?>">
                                <div class="single_product">
                                    <div class="product_image">
                                        <img src="<?php the_post_thumbnail_url( '' ); ?>" alt=""/>
                                        <!-- <div class="new_badge">New</div> -->
                                        <div class="box-content">
                                            <!-- <a href="#"><i class="fa fa-heart-o"></i></a> -->
                                            <a href="#"><i class="fa fa-cart-plus"></i></a>
                                            <a href="<?php echo get_the_permalink(); ?>"><i class="fa fa-search"></i></a>
                                        </div>                                      
                                    </div>

                                    <div class="product_btm_text">
                                        <h4><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                        <!-- <div class="p_rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>                                       -->
                                        <span class="price"><?php echo $product->get_price_html(); ?></span>
                                         <!-- <?php //echo do_shortcode( '[add_to_cart id=' . $id . ']' ) ?> -->
                                    </div>
                                </div>
                                
                            </div> <!-- End Col --> 
                            <?php endwhile; wp_reset_postdata(); endif; ?>

                           <?php } ?>
        
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End product Area -->

        <!-- Special Offer Area -->
        <!-- <div class="special_offer_area gray_section">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="special_img text-left">
                            <img src="<?php echo bloginfo('template_directory');?>/img/special.png" width="370" alt="" class="img-responsive">
                            <span class="off_baudge text-center">30% <br /> Off</span>
                        </div>
                    </div>          
                    <div class="col-md-7 text-left">
                        <div class="special_info">          
                            <h3>Men Collection 2018</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy Lorem Ipsum</p>                            
                            <a href="#" class="btn main_btn">Shop Now</a>                   
                        </div>
                    </div>
                </div>
            </div>
        </div>  -->
        <!-- End Special Offer Area -->

        <!-- Start Featured product Area -->

        <!-- Testimonials Area -->
       <section id="testimonials" class="testimonials_area section_padding" style="background: url(<?php echo bloginfo('template_directory');?>/img/testimonial-bg.jpg); background-size: cover; background-attachment: fixed;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="testimonial-slider" class="owl-carousel">

                            <div class="testimonial">
                                <div class="pic">
                                    <img src="<?php echo bloginfo('template_directory');?>/img/testimonial/1.jpg" alt="">
                                </div>
                                <div class="testimonial-content">
                                    <p class="description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                        Vivamus sed accumsan diam. Suspendisse molestie nibh at 
                                        tempor mollis. Integer aliquet facilisis 
                                    </p>
                                    <h3 class="testimonial-title">williamson</h3>
                                    <small class="post"> - Themesvila</small>
                                </div>
                            </div>
             
                            <div class="testimonial">
                                <div class="pic">
                                    <img src="<?php echo bloginfo('template_directory');?>/img/testimonial/2.jpg" alt="">
                                </div>
                                <div class="testimonial-content">
                                    <p class="description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                        Vivamus sed accumsan diam. Suspendisse molestie nibh at 
                                        tempor mollis. Integer aliquet facilisis 
                                    </p>
                                    <h3 class="testimonial-title">kristiana</h3>
                                    <small class="post"> - Themesvila</small>
                                </div>
                            </div>   
                            
                            
                            <div class="testimonial">
                                <div class="pic">
                                    <img src="<?php echo bloginfo('template_directory');?>/img/testimonial/3.jpg" alt="">
                                </div>
                                <div class="testimonial-content">
                                    <p class="description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                        Vivamus sed accumsan diam. Suspendisse molestie nibh at 
                                        tempor mollis. Integer aliquet facilisis 
                                    </p>
                                    <h3 class="testimonial-title">williamson</h3>
                                    <small class="post"> - Themesvila</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!-- End STestimonials Area -->        
        
        <!--  Blog -->
        <section id="blog_area" class="section_padding">
            <div class="container"> 
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="section_title">                         
                            <h2>79 Road <span>STORIES</span></h2>
                            <div class="divider"></div>
                        </div>
                    </div>
                </div>          
                
                <div class="row">   
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single_blog">
                            <div class="single_blog_img">
                                <img src="<?php echo bloginfo('template_directory');?>/img/blog/1.jpg" alt="">
                                <div class="blog_date text-center">
                                    <div class="bd_day"> 25</div>
                                    <div class="bd_month">Aug</div>
                                </div>
                            </div>
                                                
                            <div class="blog_content">  
                                <h4 class="post_title"><a href="#">Câu chuyện từ những đôi găng tay</a> </h4>
                                <!-- <ul class="post-bar">
                                    <li><i class="fa fa-user"></i> Admin</li>                                   
                                    <li><i class="fa fa-comments-o"></i> <a href="#">2 comments</a></li>
                                    <li><i class="fa fa-heart-o"></i> <a href="#">4 like</a></li>
                                </ul>                            -->
                                <!-- <p>Đối với những người mê rong ruổi và trải nghiệm, có lẽ đôi găng ....</p> -->
                            </div>
                        </div>
                    </div> <!--  End Col -->                
                    
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single_blog">
                            <div class="single_blog_img">
                                <img src="<?php echo bloginfo('template_directory');?>/img/blog/2.jpg" alt="">
                                <div class="blog_date text-center">
                                    <div class="bd_day"> 25</div>
                                    <div class="bd_month">Aug</div>
                                </div>
                            </div>
                                                
                            <div class="blog_content">
                                <h4 class="post_title"><a href="#">RAW AMBER - hơi thở từ thập niên 70</a> </h4>                              
                                <!-- <ul class="post-bar">
                                    <li><i class="fa fa-user"></i> Admin</li>                                   
                                    <li><i class="fa fa-comments-o"></i> <a href="#">2 comments</a></li>
                                    <li><i class="fa fa-heart-o"></i> <a href="#">4 like</a></li>
                                </ul> -->
                                
                                <!-- <p>𝐑𝐀𝐖 𝐀𝐦𝐛𝐞𝐫, một bản nâng cấp hoàn hảo từ thiết kế đến chất liệu của chiếc nón ....</p> -->
                            </div>
                        </div>
                    </div> <!--  End Col -->                
                    
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single_blog">
                            <div class="single_blog_img">
                                <img src="<?php echo bloginfo('template_directory');?>/img/blog/3.jpg" alt="">
                                <div class="blog_date text-center">
                                    <div class="bd_day"> 25</div>
                                    <div class="bd_month">Aug</div>
                                </div>
                            </div>
                                                
                            <div class="blog_content">
                
                                <h4 class="post_title"><a href="#">Vintage Love</a> </h4>
                                <!-- <ul class="post-bar">
                                    <li><i class="fa fa-user"></i> Admin</li>                                       
                                    <li><i class="fa fa-comments-o"></i> <a href="#">2 comments</a></li>
                                    <li><i class="fa fa-heart-o"></i> <a href="#">4 like</a></li>
                                </ul> -->
                                <!-- <p>Người ta nói, nếu bạn thương bất cứ ai, bất cứ nơi nào một cách chân thành ....</p> -->
                            </div>
                        </div>
                    </div> <!--  End Col -->

                </div>
            </div>
        </section>
<?php get_footer(); ?>