    </main>
    <footer class="footer">
   <div class="container">
        <div class="footer-main">
            <div class="footer-main__col footer-main__col_1">
                <?php  $custom_logo_id = get_theme_mod( 'custom_logo' );?>
               <?php if( !empty( $custom_logo_id ) ) {
                        echo wp_get_attachment_image( $custom_logo_id, 'full' );
                    } else {
                        bloginfo('name');
                    } ?>
                <p class="footer__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquet fringilla urna sed lorem. Amet imperdiet nunc varius diam urna elementum.</p>
            </div>
            <ul class="footer-main__col footer__list">
                <li class="footer__item">
                    <h3 class="footer__item-title">Services</h3>
                    <ul>
                        <li><a>Service 1</a></li>
                        <li><a>Number 2</a></li>
                        <li><a>Third service</a></li>
                        <li><a>4th number</a></li>
                        <li><a>5 number</a></li>
                        <li><a>Service 6</a></li>
                    </ul>
                </li>
                <li class="footer__item">
                    <h3 class="footer__item-title">Page</h3>
                    <ul>
                        <li><a>Page</a></li>
                        <li><a>Video</a></li>
                        <li><a>Services</a></li>
                        <li><a>Portfolio</a></li>
                        <li><a>Our team</a></li>
                        <li><a>Contact us</a></li>
                    </ul>
                </li>
                <li class="footer__item">
                    <h3 class="footer__item-title">About</h3>
                    <ul>
                        <li><a>Portfolio</a></li>
                        <li><a>Team</a></li>
                        <li><a>Services</a></li>
                        <li><a>About us</a></li>
                    </ul>
                </li>
                <li class="footer__item">
                    <h3 class="footer__item-title">Our Contacts</h3>
                    <a href="#" class="footer__item-link"><img src="@img/footer/phone.svg">305-306-1920</a>
                    <a href="#" class="footer__item-link"><img src="@img/footer/location.svg">10199 Cleary Blvd, Suite 10, FL</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="footer-middle">
             <div class="container">
     <div>
                <h3 class="footer__item-title">Follow us</h3>
                <ul class="footer__socials">
                    <li class="footer__socials-item">
                        <a href="#" class="footer__socials-link">
                            <img src="@img/footer/socials_1.svg" class="footer__socials-img">
                        </a>
                    </li>
                    <li class="footer__socials-item">
                        <a href="#" class="footer__socials-link">
                            <img src="@img/footer/socials_2.svg" class="footer__socials-img">
                        </a>
                    </li>
                    <li class="footer__socials-item">
                        <a href="#" class="footer__socials-link">
                            <img src="@img/footer/socials_3.svg" class="footer__socials-img">
                        </a>
                    </li>
                    <li class="footer__socials-item">
                        <a href="#" class="footer__socials-link">
                            <img src="@img/footer/socials_4.svg" class="footer__socials-img">
                        </a>
                    </li>
                </ul>
     </div>
            <a href="#" class="btn-icon">contact us <span><img src="@img/global/btn-icon.svg"></span></a>
        </div>
    </div>
        <div class="footer-bottom">
            <div class="container">
            <a href="#" class="footer__copy">Copyright © 2022  |  All Rights Reserved by Alliance.Health Inc.</a>
            <a href="#" class="footer__ursa">
                <span>Designed and <br> maintained by</span>
                    <img src="@img/footer/ursa.svg" class="footer__ursa-img">
            </a>
        </div>
   </div>
</footer>
</div>

    <?php wp_footer() ?>
</body>
</html>