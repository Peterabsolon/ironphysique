<?php require('head.php') ?>

<!-- sidebar START -->
<div class="sidebar">
    <div class="sidebar-inner">
        <ul class="sidebar-header">
            <li><a href="http://www.ironphysique.sk" class="logo">IronPhysique</a></li>
            <li>
                <a href="/login.php" class="button button-sm button-login">
                  <?php if (Session::get('loggedIn') == true):?>
                      <?php 
                          if(Session::get('firstname') == true) 
                            echo Session::get('firstname');
                          else 
                            echo Session::get('login'); 
                      ?>
                  <?php else: ?>
                    <i class="fa fa-shopping-cart"></i>Košík
                  <?php endif; ?>                
                </a>
            </li>
        </ul>
        <div class="sidebar-menu">
            <ul>
                <!-- Menu -->
                <!-- <li class="title"><a href="#">Menu</a></li> -->
                <ul class="menu">
                    <li class="page-index"><a class="menu-item" href="<?= URL . 'index' ?>"><i class="fa fa-home"></i>Domov</a></li>
                    <li class="page-pani"><a class="menu-item" href="<?= URL . 'pani' ?>"><i class="fa fa-mars"></i>Páni</a></li>
                    <li class="page-damy"><a class="menu-item" href="<?= URL . 'damy' ?>"><i class="fa fa-venus"></i>Dámy</a></li>                    
                    <li class="page-doplnky"><a class="menu-item" href="<?= URL . 'doplnky' ?>"><i class="fa fa-gear"></i>Doplnky</a></li>                          
                    <li class="page-kontakt divider"><a class="menu-item" href="<?= URL . 'kontakt' ?>"><i class="fa fa-envelope"></i>Kontakt</a></li>
                    <li><a class="menu-item" href="<?= URL . 'login' ?>"><i class="fa fa-user"></i>Prihlásenie</a></li>
                    <li class="page-legalterms divider"><a class="menu-item" href="<?= URL . 'legalterms' ?>"><i class="fa fa-briefcase"></i>Obchodné podmienky</a></li>
                </ul>
                
                <!-- Newsletter -->
                <li class="title"><a href="#">Odber noviniek</a></li>   
                <li class="newsletter">
                    <div class="newsletter-inner">
                        <p>Buď informovaný o akciách <br>a novom tovare ako prvý/prvá.</p>
                        <form action="#" method="post">
                            <span class="input hoshi" id="input-login">
                              <input class="input-field" type="login" name="login" value="">
                              <label for="input-login" class="input-label">
                                  <span class="input-label-content">Email (login)</span>
                              </label>
                            </span> 

                            <input type="submit" class="button button-sm newsletter-submit" value="Odoberať">
                        </form> 
                    </div>
                </li>           
            </ul>
        </div>
    </div>
</div>  
<!-- sidebar END -->

<div class="sidebar-overlay"></div>

<!-- header-mobile START -->
<div class="row header-mobile">
    
    <a href="<?= URL ?>" class="logo">IronPhysique</a>

    <a href="<?= URL ?>" class="logotype"><h1>IronPhysique</h1></a>

    <div id="hamburger" class="hamburglar is-open">
        
        <div id="top"></div>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="64px" height="64px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
            <path id="circle" fill="none" stroke-width="4" stroke-miterlimit="10" d="M16,32h32c0,0,11.723-0.306,10.75-11
                                                                         c-0.25-2.75-1.644-4.971-2.869-7.151C50.728,7.08,42.767,2.569,33.733,2.054C33.159,2.033,32.599,2,32,2C15.432,2,2,15.432,2,32
                                                                         c0,16.566,13.432,30,30,30c16.566,0,30-13.434,30-30C62,15.5,48.5,2,32,2S1.875,15.5,1.875,32"/>
            </svg>

            <!-- v2 -->
            <!-- <path id="circle" fill="none" stroke-width="4" stroke-miterlimit="10" d="M16,32h32c0,0,11.723-0.306,10.75-11 c-0.25-2.75-1.644-4.971-2.869-7.151C50.728,7.08,42.767,2.569,33.733,2.  54C33.159,2.033,32.599,2,32,2C15.432,2,2,15.432,2,32 c0,16.566,13.432,30,30,30c16.566,0,30-13.434,30-30C62,15.5,48.5,2,32,2S1.875,15.5,1.875,32"/> -->
        <div id="bottom"></div>
    </div>          
</div>
<!-- header-mobile END -->

<!-- container-fluid START -->
<div class="container-fluid">