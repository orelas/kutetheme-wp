<div class="product-container">
    <div class="left-block">
        <a href="<?php echo the_permalink(); ?>">
            <?php
    			/**
    			 * kt_loop_product_thumbnail hook
    			 *
    			 * @hooked woocommerce_template_loop_product_thumbnail - 10
    			 */
    			do_action( 'kt_loop_product_thumbnail' );
    		?>
        </a>
        <div class="price-percent-reduction2">-30% OFF</div>
    </div>
    <div class="right-block">
        <h5 class="product-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
        <?php 
            /**
			 * kt_loop_product_after_countdown hook
		     *
			 * @hooked woocommerce_template_loop_rating - 10
			 */
            do_action( 'kt_loop_product_after_countdown' ); 
        
        ?>
        <div class="content_price">
            <?php
    			/**
    			 * woocommerce_after_shop_loop_item_title hook
			     *
    			 * @hooked woocommerce_template_loop_price - 10
    			 */
    			do_action( 'kt_after_loop_item_title' );
    		?>
        </div>
    </div>
    <div class="product-bottom">
         <?php
            /**
             * woocommerce_after_shop_loop_item hook
             *
             * @hooked woocommerce_template_loop_add_to_cart - 10
             */
            do_action( 'woocommerce_after_shop_loop_item' );
        ?>
    </div>
</div>