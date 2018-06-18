<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 purple-bg">
                <div class="footer-copyright text-white">
                    Copyright @ <span id="copyright">
							<script>
							document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
							</script>
						</span> <a class="text-white" href="#">Achraf BELLAALI</a>
                </div>
            </div>
            <div class="col-md-9">
                <ul class="follow-us pull-right">
                    <li>Follow Me :</li>


                    <li><a href="mailto:achraf.bellaali@gmail.com" target="_blank"><i class="fa fa-envelope"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/bellaali-achraf/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="https://github.com/IndianGhost/" target="_blank"><i class="fa fa-github"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCLnZEwDnMZcaAXjnOpqrIbA/" target="_blank"><i class="fa fa-youtube"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<script type="text/javascript" src="js/jquery-min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<script type="text/javascript" src="js/jquery.appear.js"></script>

<script type="text/javascript" src="js/owl-carousel/owl.carousel.min.js"></script>

<script type="text/javascript" src="js/jquery.typer.js"></script>

<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>

<script type="text/javascript" src="js/magnific-popup/jquery.magnific-popup.min.js"></script>

<script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>

<script type="text/javascript" src="js/retina.min.js"></script>

<script type="text/javascript" src="js/particles/particles.min.js"></script>
<script type="text/javascript" src="js/particles/app.js"></script>

<script type="text/javascript" src="js/style-customizer.js"></script>

<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        var uri     =   "<?php if(isset($_GET['action'])) echo $_GET['action'];?>";
        var cssClass   =   uri==''? '.js-home' : '.js-'+uri;
        $('.navbar-nav .active').removeClass('active');
        $(cssClass).addClass('active');
        <?php if(isset($_GET['success']) && $_GET['success']==1){ ?>
        alert('Your message was sent successfully !');
        <?php } ?>
    });
</script>

</body>
</html>