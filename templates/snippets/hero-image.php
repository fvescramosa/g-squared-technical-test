<div class="hero-image">
    <div class="hero-image-container" style="">

        <div class="hero-image-text-area">
            <div class="title">
                <h3> <?= get_sub_field('title'); ?></h3>

            </div>
            <div class="text">
                <?= get_sub_field('text'); ?>
            </div>
        </div>

        <div class="donations">

            <div class="donations-container">
                <div class="donations-content">

                    <?php
                    $args = array(
                        'post_type'	=> 'donations',
                        'posts_per_page' => -1
                    );

                    $query = new WP_Query($args);

                    $amount = 0;
                    while ($query->have_posts()): $query->the_post();


                        $amount += get_field('donation_total', get_the_ID());
                    endwhile;
                    wp_reset_postdata();
                    ?>

                    <div class="title">

                    </div>
                    <div class="text-content">
                        <div class="donations-current">
                            <h3 id="donationAmount" data-current="<?= $amount ?>">$ 0.00</h3>
                            <p>of <span>$4 million</span> raised</p>
                        </div>

                    </div>
                    <div class="donations-bar" data-max="4000000" data-current="<?= $amount ?>">
                        <div class="donations-progress"></div>
                    </div>
                    <div class="text-content">

                                <div class="text-content-row j-center">

                                        <div class="text-content-input text-content-input-medium text-content-input-prepend">
                                            <span class="input-prepend">$</span>
                                            <input type="text" name="donation" id="donation" placeholder="Donation" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" >
                                        </div>

                                </div>

                                <p>
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                    invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                                    accusam et justo duo dolores et ea rebum.
                                </p>

                    </div>
                </div>

                <form action="" method="post" class="donation-form">
                    <h3>Select Payment Method</h3>
                    <div class="dn-row">
                        <?php wp_nonce_field('donation_action', 'donation_nonce'); ?>
                        <div class="radio-label">
                            <input type="radio" name="payment_method" id="paypal" value="Paypal">
                            <label for="paypal">Paypal</label>
                        </div>
                        <div class="radio-label">
                            <input type="radio" name="payment_method" id="offlineDonation" value="Offline Donation">
                            <label for="offlineDonation">Offline Donation</label>
                        </div>
                    </div>

                    <h3>Personal Info</h3>
                    <div class="dn-row">
                        <div class="dn-input dm-medium">
                            <input type="text" name="first_name" id="first_name" placeholder="First Name">
                        </div>
                        <div class="dn-input dm-medium">
                            <input type="text" name="last_name" id="last_name" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="dn-row">
                        <div class="dn-input dm-medium">
                            <input type="email" name="email" id="email" placeholder="Email">
                        </div>
                        <div class="dn-input dm-medium">
                            <input type="tel" name="phone" id="phone" placeholder="Phone">
                        </div>
                    </div>
                    <div class="dn-row jcontent-center">
                        <div class="dn-input dm-medium dm-prepend">
                            <span class="input-prepend">Donation Total</span>
                            <input type="text" name="donation" id="donation" placeholder="Donation" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" >
                        </div>
                    </div>

                    <div class="dn-submit">
                        <button type="submit">Donate Now</button>

                    </div>

                </form>


            </div>
        </div>
    </div>
</div>