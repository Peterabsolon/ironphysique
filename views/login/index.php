<!-- hero-homepage START -->
<div class="hero">
  <div class="hero-overlay"></div>
  <div class="background">

    <div class="row">
      <div class="row-maxwidth">
        <div class="col-lg-12">
            <!-- Login | Registration Modal -->
            <div class="login-page-modal modal fade in active">
              <div class="modal-dialog">
                <div class="modal-outer-header">                  
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
        </div>
      </div>
    </div>
  </div>  
</div>
<!-- hero-homepage END -->