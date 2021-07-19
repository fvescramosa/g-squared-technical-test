<?php


new Blogs();
Class Blogs{

    private static $tag = 'display-blogs';

    public function __construct()
    {
        add_shortcode(self::$tag, array($this, 'displayBlogs'));
    }

    public function displayBlogs($atts)
    {

        $data = shortcode_atts(array(
            'posts_per_page'	=> '',
            'post_type'		=> 'post',
            'order'		=> 'DESC',
            'orderby' => 'post_date'
        ), $atts);

        $response =  'Loremipsum';

        return $response;
    }

}

?>