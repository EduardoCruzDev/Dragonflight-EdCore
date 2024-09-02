<?php
/**
 * @author EduardoCruzDev - Original Version Amin Mahmoudi
 * @copyright Copyright (c) 2024
 * @link https://github.com/EduardoCruzDev/
 **/

?>
    <section id="about" class="about">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2><?php elang('about_server'); ?></h2>
                <p><?php elang('game_version'); ?>: <b><span style="color: #007a0c"><?php echo get_config('game_version'); ?></span></b>
                </p>
            </div>
            <div class="row">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="image">
                        <img src="<?php echo $antiXss->xss_clean(get_config("baseurl")); ?>/template/<?php echo $antiXss->xss_clean(get_config("template")); ?>/assets/img/dragons.webp"
                             class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="content pt-4 pt-lg-0 pl-0 pl-lg-3 ">
                        <h3><?php elang('server_information'); ?>:</h3>
                        <ul>
                            <li><i class="bx bx-check-double"></i><?php elang('server_type'); ?>: <b>Blizzlike</b></li>
                            <li><i class="bx bx-check-double"></i><?php elang('server_uptime'); ?>: <b>99.9%</b></li>
                            <li><i class="bx bx-check-double"></i><?php elang('xp_rate'); ?>: <b>x5</b></li>
                            <li><i class="bx bx-check-double"></i><?php elang('drop_rate'); ?>: <b>x4</b></li>
                            <li><i class="bx bx-check-double"></i><?php elang('start_level'); ?>: <b>1</b></li>
                            <li><i class="bx bx-check-double"></i><?php elang('max_level'); ?>: <b>60</b></li>
                            <li><i class="bx bx-check-double"></i><?php elang('fixed_spells'); ?>: <b>90%</b></li>
                            <li><i class="bx bx-check-double"></i><?php elang('fixed_dungeons'); ?>: <b>80%</b></li>
                            <li><i class="bx bx-check-double"></i><?php elang('fixed_instances'); ?>: <b>80%</b></li>
                        </ul>
                        <p>
                            <?php elang('edit_off'); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>