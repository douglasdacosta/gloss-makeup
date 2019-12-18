
<!-- footer -->
<footer>
    <div class="container">
        <div class="footer-widget">
            <div class="footer-social">
                <ul class="footer-social-pro">
                    <li class="facebook"><a href="https://www.facebook.com/glossmakeupbr/"><i class="fa fa-facebook"></i></a></li>
                    <li class="instagram"><a href="https://www.instagram.com/glossmakeupbr/?hl=pt-br"><i class="fa fa-instagram"></i></a></li>
                    <li class="whatsapp"><a href="https://api.whatsapp.com/send?1=pt_BR&phone=5514997408549"><i class="fa fa-whatsapp"></i></a></li>
                    <li class="marker"><a href="https://www.google.com/maps/search/?api=1&query=47.5951518,-122.3316393" =target="_blank"><i class="fa fa-map-marker"></i></a></li>
                </ul>
            </div>
            <div class="footer-widget">
                <ul class="footer-navi">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#produtos">Top 10</a></li>
                    <li><a href="#sobre">Quem somos</a></li>
                    <li><a href="#contact">Contato</a></li>
                </ul>
            </div>
            <div class="footer-widget-copy">
                <p>Endereço Loja fisica : Praça Coronel Cardoso Frango 1A, Piratininga - Sp</p>
                <p>Copyright@ <?php echo date('Y') ?> Desenvolvido por <a href="htt￼ps://mdmarketindigital.com.br">MD Marketing digital</a></p>
            </div>
        </div>
    </div>
</footer>

<!-- Video Popup -->
<div class="modal fade" id="my-video" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/JNF0moyNw_A" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>   
<!-- Video Popup --> 



<!-- START JAVASCRIPT -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/multislider.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Place this tag in your head or just before your close body tag. -->
<!-- contact js-->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>

<script async="" defer="" src="js/buttons.js"></script>
<script src="js/bootsnav.js"></script>
<script src="js/custom.js"></script>

<script type="text/javascript">
    $('.navbar-nav a').click(function () {
        $('html, body').animate({
            scrollTop: $($(this).attr('href')).offset().top
        }, 800);
        return false;
    });
</script>
<script type="text/javascript">
    $('.footer-navi a').click(function () {
        $('html, body').animate({
            scrollTop: $($(this).attr('href')).offset().top
        }, 800);
        return false;
    });
</script>
</div>
</body>
</html>