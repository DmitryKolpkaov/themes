    <footer class="container-fluid footer">
        <div class="container height-100">
            <div class="row height-100">
                <div class="col-lg-6 footer-menu height-100">
                    <nav class="menu text-left height-100">
                        <?php
                        wp_nav_menu('wp_nav_menu_args');
                        ?>
                    </nav>
                </div>
                <div class="col-lg-6 height-100">
                    <div class="row height-100">
                        <div class="col-sm-6 footer-items">
                            <i class="bi bi-telephone-fill"></i>
                            <a href="tel:<?php echo CFS()->get('phone_contact_link'); ?>" class="phone item-footer-mobile">
                                Телефон: <?php echo CFS()->get('phone_contact'); ?>
                            </a>
                        </div>

                        <div class="col-sm-6 footer-items">
                            <i class="bi bi-envelope-open-fill"></i>
                            <a href="mailto:<?php echo CFS()->get('email_contact_link'); ?>" class="phone item-footer-mobile">
                                <?php echo CFS()->get('email_contact'); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</main>
    <?php include 'sidebar.php'; ?>

    </div>



    <?php wp_footer(); ?>

</body>

</html>