
<div class="edlip">
    <div class="container">
        <div class="edlip-flex">
            <?php while(have_rows('edlip_boxes')): the_row();  ?>
            <div class="edlip-boxes">
                <div class="details">
                    <div class="text">
                        <?php echo get_sub_field('content'); ?>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>