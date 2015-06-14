
<!-- container-fluid START -->
<div class="container-fluid">

	<!-- topstripe START -->
	<div class="row topstripe">
		<div class="row-maxwidth">
			<div class="hidden-xs col-sm-6 col-lg6 topstripe-right">
				<div class="row">   
					<div class="col-sm-6 cart">
						<span><a href="<?= URL ?>cart"><i class="fa fa-shopping-cart"></i>0 ks / 0,00 €</a></span>
					</div>
					<div class="col-sm-6 login">
						<span>
              
              <?php if (Session::get('loggedIn') == true):?>
                <a data-toggle="modal" data-target="#settings-modal">
                  <i class="fa fa-gear"></i>
                      <?php 
                          if(Session::get('firstname') == true) 
                            echo Session::get('firstname');
                          else 
                            echo Session::get('login'); 
                      ?>
                </a>
              <?php else: ?>
                <a data-toggle="modal" data-target="#login-modal"><i class="fa fa-sign-in"></i>Prihlásenie / Registrácia</a>
              <?php endif ?>

            </span>

            <!-- Login | Registration Modal -->
            <div class="login-modal modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modal-label" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-outer-header">
                  <a href="http://www.ironphysique.sk" class="logo">
                    <img src="<?= URL_PUBLIC ?>images/site-logo_white.png">
                  </a>                      
                </div>
              	<div class="modal-content">
              	  <div class="modal-header">
              		  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <!-- Nav tabs -->
                    <ul class="modal-navigation" role="tablist">
                     <li role="presentation" class="active"><a href="#login" aria-controls="login" role="tab" data-toggle="tab">Prihlásiť</a></li>
                     <li role="presentation"><a href="#register" aria-controls="register" role="tab" data-toggle="tab">Registrovať</a></li>
                    </ul>
              	  </div>
              	  <div class="modal-body">
                		<div role="tabpanel">

                		  <!-- Tab panes -->
                		  <div class="tab-content">
                  			<div role="tabpanel" class="tab-pane fade in active" id="login">
                          <!-- Login form START -->
                          <form action="login/run" method="post">

                              <span class="input hoshi" id="input-login">
                                  <input class="input-field" type="text" name="login" placeholder="Email">
                                  <label for="input-login" class="input-label">
                                      <span class="input-label-content"></span>
                                  </label>
                              </span>  

                              <span class="input hoshi" id="input-password" placeholder="Heslo">
                                  <input class="input-field" type="password" name="password">
                                  <label for="input-password" class="input-label">
                                      <span class="input-label-content"></span>
                                  </label>
                              </span>      

                              <input type="submit" value="Prihlásiť" class="button green button-lg filled button-login">                                                                              
                          </form>  
                          <!-- Login form END -->
                        </div>
                  			<div role="tabpanel" class="tab-pane fade" id="register">
                          <!-- Register form START -->
                          <form action="register/run" method="post">

                              <span class="input hoshi" id="input-login">
                                  <input class="input-field" type="text" name="login" placeholder="Email (login)">
                                  <label for="input-login" class="input-label">
                                      <span class="input-label-content"></span>
                                  </label>
                              </span> 

                              <span class="input hoshi" id="input-password">
                                  <input class="input-field" type="password" name="password" placeholder="Heslo">
                                  <label for="input-password" class="input-label">
                                      <span class="input-label-content"></span>
                                  </label>
                              </span>  

                              <span class="input hoshi" id="input-confirmation">
                                  <input class="input-field" type="password" name="confirmation" placeholder="Potvrdiť heslo">
                                  <label for="input-password" class="input-label">
                                      <span class="input-label-content"></span>
                                  </label>
                              </span>   

                              <div class="expand-trigger">
                                <input type="checkbox" class="expand-input" id="ex1" name="shippingdata" checked="no">
                                <label for="ex1" class="expand-title"><span></span>Chcem po registrácií vyplniť faktúračné údaje</label>                             
                              </div>

                              <div class="expand-content">  
                                <?= isset($this->error_message) ? $this->error_message : '' ?>
                              </div>
                                
                              <input type="submit" value="Registrovať" class="button blue button-lg filled button-login">   
                          </form>  
                          <!-- Register form END -->                               
                        </div>
                		  </div>

                		</div>        
              	  </div>
              	</div>
              </div>
            </div>       

            <!-- User account settings Modal -->
            <?php if (Session::get('loggedIn') == true):?>              
              <div class="settings-modal modal fade" id="settings-modal" tabindex="-1" role="dialog" aria-labelledby="login-modal-label" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-outer-header">
                    <a href="http://www.ironphysique.sk" class="logo">
                      <img src="<?= URL_PUBLIC ?>images/site-logo_white.png">
                    </a>                      
                  </div>                
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h2>Nastavenia účtu</h2>
                      <h3 class="username"><?= Session::get('login'); ?></h3>
                    </div>
                    <div class="modal-header">
                      <!-- Nav tabs -->
                      <ul class="modal-navigation" role="tablist">
                       <li role="presentation"><a href="<?= URL ?>dashboard/change">Zmena údajov</a></li>
                       <li role="presentation"><a href="<?= URL ?>dashboard/history">História objednávok</a></li>
                      </ul>                      
                    </div>
                    <!-- <div class="modal-body">
                      <div role="tabpanel">
                        <div class="tab-content">
                          <div role="tabpanel" class="tab-pane fade in active" id="changepassword">
                            <form action="dashboard/changepassword" method="post">

                              <span class="input hoshi" id="input-login">
                                  <input class="input-field" type="text" name="login">
                                  <label for="input-login" class="input-label">
                                      <span class="input-label-content">Email</span>
                                  </label>
                              </span>  

                            </form>     
                          </div>                  
                        </div>
                        <div class="tab-content">
                          <div role="tabpanel" class="tab-pane fade" id="">
                            
                          </div>
                        </div>
                      </div>
                    </div> -->
                    <div class="modal-footer">
                        <a href="<?= URL ?>dashboard/logout" class="button button-sm blue filled"><i class="fa fa-sign-out"></i>Odhlásiť</a>
                    </div>
                  </div>
                </div>
              </div>
            <?php endif ?>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- topstripe END -->  

	<!-- main-header START -->
	<div class="row main-header">               
		<div class="row-maxwidth">
		  <div class="col-xs-6 col-sm-4 col-lg-6">
				<a href="<?= URL ?>" class="logo">
					<img src="<?= URL_PUBLIC ?>images/site-logo.png">
				</a>                
			</div>

			<div class="col-xs-6 col-sm-8 col-lg-6 static">
				<ul class="main-menu">
					<li><a href="<?= URL;?>index">Domov</a></li>
					<li><a href="<?= URL;?>pani">Páni</a></li>
					<li><a href="<?= URL;?>damy">Dámy</a></li>                   
					<li><a href="<?= URL;?>doplnky">Doplnky</a></li>                            
					<li><a href="<?= URL;?>kontakt">Kontakt</a></li>
				</ul>
			</div>  
		</div>
	</div>
	<!-- main-header END -->

	<!-- sidebar overlay for mobile menu -->
	<div class="sidebar-overlay"></div>

