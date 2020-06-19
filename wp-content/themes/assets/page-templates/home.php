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
                <div class="single_slide" style="background-image: url(<?php echo bloginfo('template_directory');?>/img/slider/1.jpg); background-size: cover; background-position: center;">
                    <div class="container"> 
                        <div class="single-slide-item-table">
                            <div class="single-slide-item-tablecell">
                                <div class="slider_content text-center slider-animated-1">                        
                                    <!-- <p class="animated">Women fashion</p> -->
                                    <h1 class="animated">AN TOÀN - CỔ ĐIỂN</h1>
                                    <h4 class="animated">Đồng hành, bảo vệ, an toàn trên từng chặng đường.</h4>
                                    <a href="#" class="btn main_btn animated">Xem thêm</a>
                                </div>
                            </div>
                        </div>                      
                    </div>
                </div>
                
                <div class="single_slide" style="background-image: url(<?php echo bloginfo('template_directory');?>/img/slider/2.jpg); background-size: cover; background-position: center ;">
                    <div class="container">     
                        <div class="single-slide-item-table">
                            <div class="single-slide-item-tablecell">
                                <div class="slider_content text-center slider-animated-2">                      
                                    <!-- <p class="animated">Women fashion</p> -->
                                    <h1 class="animated">THINK SAFE THINK ARROW</h1>
                                    <h4 class="animated">It is cheaper and more affordable to buy safety than to heal.</h4>
                                    <a href="#" class="btn main_btn animated">Xem thêm</a>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
                
                <!-- <div class="single_slide" style="background-image: url(<?php echo bloginfo('template_directory');?>/img/slider/3.jpg); background-size: cover; background-position: center ;">
                    <div class="container">
                        <div class="single-slide-item-table">
                            <div class="single-slide-item-tablecell">
                                <div class="slider_content text-right slider-animated-3">                       
                                    <p class="animated">Men Collection</p>
                                    <h1 class="animated">popular style</h1>
                                    <h4 class="animated">Big Sale of This Week 50% off</h4>
                                    <a href="#" class="btn main_btn animated">shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </section>
        <!-- End Slider Area -->
        
        <!--  Process -->
        <section class="process_area section_padding">
            <div class="container">
                <div class="row text-center">       
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-process">
                            <!-- process Icon -->
                            <div class="picon"><i class="fa fa-truck"></i></div>
                            <!-- process Content -->
                            <div class="process_content">
                                <h3>free shipping</h3>
                                <p>Lorem ipsum dummy</p>
                            </div>
                        </div>  
                    </div>  <!-- End Col -->                

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-process">
                            <!-- process Icon -->
                            <div class="picon"><i class="fas fa-money-check-edit-alt"></i></div>
                            <!-- process Content -->
                            <div class="process_content">
                                <h3>Cash On Delivery</h3>
                                <p>Lorem ipsum dummy</p>
                            </div>
                        </div>  
                    </div>  <!-- End Col -->                

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-process">
                            <!-- process Icon -->
                            <div class="picon"><i class="fa fa-headphones "></i></div>
                            <!-- process Content -->
                            <div class="process_content">
                                <h3>Support 24/7</h3>
                                <p>Lorem ipsum dummy</p>
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
                    <div class="col-lg-6 col-md-6 col-sm-12">   
                        <a href="#">
                            <div class="single_promo">
                                <img src="<?php echo bloginfo('template_directory');?>/img/promo/1.jpg" alt="">
                                <div class="box-content">
                                    <h3 class="title">OPEN-FACE HELMET</h3>
                                    <!-- <span class="post">2018 Collection</span> -->
                                </div>
                            </div>
                        </a>                        
                    </div><!--  End Col -->                     

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <a href="#">
                            <div class="single_promo">
                                <img src="<?php echo bloginfo('template_directory');?>/img/promo/2.jpg" alt="">
                                <div class="box-content">
                                    <h3 class="title">CLASSIC HELMET</h3>
                                    <!-- <span class="post">2018 Collection</span> -->
                                </div>
                            </div>
                        </a>    
                    </div><!--  End Col -->         
                    
                    <div class="col-lg-6 col-md-6 col-sm-12">   
                        <a href="#">
                            <div class="single_promo">
                                <img src="<?php echo bloginfo('template_directory');?>/img/promo/3.jpg" alt="">
                                <div class="box-content">
                                    <h3 class="title">ACCESSORIES</h3>
                                    <!-- <span class="post">2018 Collection</span> -->
                                </div>
                            </div>
                        </a>                        
                    </div><!--  End Col -->                     

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <a href="#">
                            <div class="single_promo">
                                <img src="<?php echo bloginfo('template_directory');?>/img/promo/4.jpg" alt="">
                                <div class="box-content">
                                    <h3 class="title">SPORT HELMET</h3>
                                    <!-- <span class="post">2018 Collection</span> -->
                                </div>
                            </div>
                        </a>    
                    </div><!--  End Col --> 
                
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
                            <h2>Our <span>Products</span></h2>
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

                            <div class="col-lg-3 col-md-4 col-sm-6 mix <?php echo $term->slug; ?>">
                                <div class="single_product">
                                    <div class="product_image">
                                        <img src="<?php the_post_thumbnail_url( '' ); ?>" alt=""/>
                                        <!-- <div class="new_badge">New</div> -->
                                        <div class="box-content">
                                            <a href="#"><i class="fa fa-heart-o"></i></a>
                                            <a href="#"><i class="fa fa-cart-plus"></i></a>
                                            <a href="<?php echo get_the_permalink(); ?>"><i class="fa fa-search"></i></a>
                                        </div>                                      
                                    </div>

                                    <div class="product_btm_text">
                                        <h4><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                        <div class="p_rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>                                      
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
                            <h2>latest <span>Blog</span></h2>
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
                                <h4 class="post_title"><a href="#">Integer euismod dui non auctor</a> </h4>
                                <ul class="post-bar">
                                    <li><i class="fa fa-user"></i> Admin</li>                                   
                                    <li><i class="fa fa-comments-o"></i> <a href="#">2 comments</a></li>
                                    <li><i class="fa fa-heart-o"></i> <a href="#">4 like</a></li>
                                </ul>                           
                                <p>Proin in blandit lacus. Nam pellentesque tortor eget dui feugiat venenatis ....</p>
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
                                <h4 class="post_title"><a href="#">Integer tempor urna a condimentum</a> </h4>                              
                                <ul class="post-bar">
                                    <li><i class="fa fa-user"></i> Admin</li>                                   
                                    <li><i class="fa fa-comments-o"></i> <a href="#">2 comments</a></li>
                                    <li><i class="fa fa-heart-o"></i> <a href="#">4 like</a></li>
                                </ul>
                                
                                <p>Proin in blandit lacus. Nam pellentesque tortor eget dui feugiat venenatis ....</p>
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
                
                                <h4 class="post_title"><a href="#">Vivamus velit est iaculis id tempus</a> </h4>
                                <ul class="post-bar">
                                    <li><i class="fa fa-user"></i> Admin</li>                                       
                                    <li><i class="fa fa-comments-o"></i> <a href="#">2 comments</a></li>
                                    <li><i class="fa fa-heart-o"></i> <a href="#">4 like</a></li>
                                </ul>
                                <p>Proin in blandit lacus. Nam pellentesque tortor eget dui feugiat venenatis ....</p>
                            </div>
                        </div>
                    </div> <!--  End Col -->

                </div>
            </div>
        </section>
        <!--  Blog end -->

        <!--  Brand -->
        <!-- <section id="brand_area" class="text-center">
            <div class="container">                 
                <div class="row">
                    <div class="col-sm-12">
                        <div class="brand_slide owl-carousel">
                            <div class="item text-center"> <a href="#"><img src="<?php echo bloginfo('template_directory');?>/img/brand/1.png" alt="" class="img-responsive" /></a> </div>
                            <div class="item text-center"> <a href="#"><img src="<?php echo bloginfo('template_directory');?>/img/brand/2.png" alt="" class="img-responsive" /></a> </div>
                            <div class="item text-center"> <a href="#"><img src="<?php echo bloginfo('template_directory');?>/img/brand/3.png" alt="" class="img-responsive" /></a> </div>
                            <div class="item text-center"> <a href="#"><img src="<?php echo bloginfo('template_directory');?>/img/brand/4.png" alt="" class="img-responsive" /></a> </div>
                            <div class="item text-center"> <a href="#"><img src="<?php echo bloginfo('template_directory');?>/img/brand/5.png" alt="" class="img-responsive" /></a> </div>
                            <div class="item text-center"> <a href="#"><img src="<?php echo bloginfo('template_directory');?>/img/brand/6.png" alt="" class="img-responsive" /></a> </div>
                            <div class="item text-center"> <a href="#"><img src="<?php echo bloginfo('template_directory');?>/img/brand/7.png" alt="" class="img-responsive" /></a> </div>
                            <div class="item text-center"> <a href="#"><img src="<?php echo bloginfo('template_directory');?>/img/brand/8.png" alt="" class="img-responsive" /></a> </div>
                            <div class="item text-center"> <a href="#"><img src="<?php echo bloginfo('template_directory');?>/img/brand/9.png" alt="" class="img-responsive" /></a> </div>
                        </div>
                    </div>
                </div>
            </div>        
        </section>         -->
        <!--   Brand end  -->

<?php get_footer(); ?>