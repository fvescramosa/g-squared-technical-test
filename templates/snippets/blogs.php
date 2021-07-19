<div class="blogs">
    <?php
        $numberpost = get_sub_field('no_of_post');
        $order = get_sub_field('order');
        $category = get_sub_field('category');

    ?>
    <div class="container">

        <div class="blogs-title-area">
            <h2>OUR BLOGS</h2>
        </div>
        <div class="blogs-flex">
        <?php
           //('[display-blogs posts_per_page="'.$numberpost.'" order="'.$order.'"]');
        ?>
            <div class="blogs-flex-blog by-3">
                <canvas style="background-image: url('<?php echo bloginfo('url');?>/wp-content/uploads/2021/06/pexels-julia-m-cameron-4143794-825x340-1.jpg')"></canvas>
                <div class="details">
                    <h4 class="title">Lorem Ipsum</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam blandit mollis sem at congue.
                        Pellentesque malesuada metus eget metus tincidunt facilisis.
                        Nulla ultrices purus nisl, ut faucibus enim malesuada et.
                        In consectetur, libero non mattis porttitor, nisi eros ultrices enim,
                    </p>
                </div>
                <div class="blogs-flex-blog__bottom">
                    <a href="" class="cdlc_btn rounded-20">Read More</a>
                </div>
            </div>
            <div class="blogs-flex-blog by-3">
                <canvas style="background-image: url('<?php echo bloginfo('url');?>/wp-content/uploads/2021/06/adorable-baby-beautiful-bed-265987-1-825x340-1.jpg')"></canvas>
                <div class="details">
                    <h4 class="title">Lorem Ipsum</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam blandit mollis sem at congue.
                        Pellentesque malesuada metus eget metus tincidunt facilisis.
                        Nulla ultrices purus nisl, ut faucibus enim malesuada et.
                        In consectetur, libero non mattis porttitor, nisi eros ultrices enim,
                    </p>
                </div>
                <div class="blogs-flex-blog__bottom">
                    <a href="" class="cdlc_btn rounded-20">Read More</a>
                </div>
            </div>
            <div class="blogs-flex-blog by-3">
                <canvas style="background-image: url('<?php echo bloginfo('url');?>/wp-content/uploads/2021/06/pexels-amina-filkins-5560081-825x340-1.jpg')"></canvas>
                <div class="details">
                    <h4 class="title">Lorem Ipsum</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam blandit mollis sem at congue.
                        Pellentesque malesuada metus eget metus tincidunt facilisis.
                        Nulla ultrices purus nisl, ut faucibus enim malesuada et.
                        In consectetur, libero non mattis porttitor, nisi eros ultrices enim,
                    </p>
                </div>
                <div class="blogs-flex-blog__bottom">
                    <a href="" class="cdlc_btn rounded-20">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>

