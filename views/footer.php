    <!-- newsletter START -->
    <div class="row newsletter">
        <div class="row-maxwidth">
            <div class="col-sm-12 col-lg-6 col-left">
                <div class="icon"><i class="fa fa-envelope-o"></i></div>
                <div class="text">
                    <h3>Prihláste sa k odberu noviniek</h3>
                    <p>Buď informovaný o akciách a novom tovare ako prvý/prvá.</p>
                </div>
                <form action="#" method="post">
                    <span class="input hoshi" id="input-login">
                      <input class="input-field" type="text" name="login">
                      <label for="input-login" class="input-label">
                          <span class="input-label-content">Email</span>
                      </label>
                    </span> 
                    <input type="submit" class="button button-sm blue newsletter-submit" value="Odoberať">
                </form>                   
            </div>
            <div class="col-sm-12 col-lg-6 col-right">
                <!-- because reasons -->
                <form action="#" method="post">
                    <span class="input hoshi" id="input-login">
                      <input class="input-field" type="text" name="login" placeholder="Email">
                      <label for="input-login" class="input-label">
                          <span class="input-label-content"></span>
                      </label>
                    </span> 
                    <input type="submit" class="button button-sm blue newsletter-submit" value="Odoberať">
                </form>                                     
            </div>
        </div>
    </div>
    <!-- newsletter END -->

        </div>
        <!-- container-fluid END -->

        <!-- main-footer START -->
        <div class="main-footer">
            <div class="row-maxwidth">
                
                <div class="col-sm-6 col-lg-6">
                    <div class="copyrights">
                        <p>&copy; 2015 IronPhysique s.r.o..<br><br> Všetky práva vyhradené.</p>
                    </div>
                 </div>   

                <div class="col-sm-6 col-lg-6">
                    <div class="footer-menu">
                        <ul>
                            <li><a href="#">Obchodné podmienky |</a></li>
                            <li><a href="#">Odstúpenie od zmluvy |</a></li>
                            <li><a href="#">Kontakt</a></li>
                            <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- main-footer END -->

    </body>

    <!-- jQuery -->
    <script src="<?= URL_PUBLIC ?>js/jquery-2.1.4.min.js"></script>

    <!-- Bootstrap -->
    <script src="<?= URL_PUBLIC ?>js/bootstrap.min.js"></script>

    <!-- Bootstrap confirm -->
    <script src="<?= URL_PUBLIC ?>js/bootstrap-confirm.min.js"></script>

    <!-- Parallax library skrollrJS -->
    <!-- <script type="text/javascript" src="js/skrollr.min.js"></script> -->

    <!-- main js file -->
    <script src="<?= URL_PUBLIC ?>js/main.js?ver=1.1"></script>    

    <!-- page specific JS -->
    <?php
        if (isset($this->js))
        {
            foreach ($this->js as $js)
         	{
                echo '<script type="text/javascript" src="'.URL.'views/'.$js.'.js"></script>';
            }
        }
    ?>	

</html>