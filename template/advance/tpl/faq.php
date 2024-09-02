<?php
/**
 * @author EduardoCruzDev - Original Version Amin Mahmoudi
 * @copyright Copyright (c) 2024
 * @link https://github.com/EduardoCruzDev/
 **/

?>
<section id="faq" class="faq">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2><?php elang('frequently_questions'); ?></h2>
        </div>
        <ul class="faq-list">
            <li data-aos="fade-up">
                <a data-toggle="collapse" class="collapsed" href="#faq1"><?php elang('question'); ?> 08.07.2024 <i
                            class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                <div id="faq1" class="collapse" data-parent=".faq-list">
                    <p>
                        <?php elang('answer'); ?> Se agregaron todas las clases y razas
                    <p><?php elang('edit_off'); ?></p>
                    </p>
                </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="100">
                <a data-toggle="collapse" href="#faq2" class="collapsed"><?php elang('question'); ?> 07.07.2024 <i
                            class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-x icon-close"></i></a>
                <div id="faq2" class="collapse" data-parent=".faq-list">
                    <p>
                        <?php elang('answer'); ?> Mejora en rendimiento JS
                    </p>
                </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="200">
                <a data-toggle="collapse" href="#faq3" class="collapsed"><?php elang('question'); ?> 06.07.2024 <i
                            class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-x icon-close"></i></a>
                <div id="faq3" class="collapse" data-parent=".faq-list">
                    <p>
                        <?php elang('answer'); ?> Mejora en el responsive
                    </p>
                </div>
            </li>
        </ul>
    </div>
</section>