<?php

while(have_rows('options')): the_row();
    $width = get_sub_field('image_width');
endwhile;
?>

<div class="text-image-row">
    <div class="container">
        <div class="text-image-row__flex">
           <div class="image" style="flex:  1 1 <?php echo $width.'%'; ?>">
               <img src="<?php echo get_sub_field('image')['url']; ?>" alt="">
           </div>
            <div class="text"  style="flex:  1 1 <?php echo 100 - $width.'%'; ?>">
                <?php echo get_sub_field('text'); ?>
            </div>
        </div>
    </div>
</div>