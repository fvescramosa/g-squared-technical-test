<div class="title">
    <div class="container">
        <?php
            $tag = '';
            $title = get_sub_field('title');
            while(have_rows('options')): the_row();
                $type = get_sub_field('type');
                $color = get_sub_field('color');
                $text_align = get_sub_field('text_align');
                $padding = get_sub_field('padding');

                $padding =  implode(" ", $padding);

                $tag .= '<';
                $tag .= $type;
                $tag .= ' style="color: '.$color.'; text-align: '.$text_align.'"';
                $tag .= ' class="'.$padding.'" ';
                $tag .= '>';

                $end_tag = '</'.$type.'>';

            endwhile;
        ?>
        <?php echo $tag ?>
            <?php echo ($title == '') ? the_title() : $title; ?>
        <?php echo $end_tag; ?>

    </div>
</div>