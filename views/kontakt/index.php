<?php
  
  // because reasons #2
  $billingData = 
  '
    <div class="billing-data">
      <h4>Fakturačné informácie</h4>
      <ul>
        <li class="ironphysique">IronPhysique s.r.o.</li>
        <li>Rovniakova 24<br>851 02 Bratislava</li>
        <li>IČO: 47321547<br>DIČ: 2023812813</li>
        <li>Oddiel Sro Vložka č.: 90506/B</li>
      </ul>
    </div>    
  ';

?>

<div class="row kontakt">
  <div class="row-maxwidth">
    <div class="col-sm-4 col-md-6">
      <div class="contact-data">
        <h4>Kontaktné informácie</h4>
        <ul>
          <li><span class="contact-label">Tel: </span>+421 902 811 486</li>
          <li><span class="contact-label">Email: </span>info@ironphysique.sk</li>
          <br>
        </ul>
      </div>
      <?= $billingData ?>  
    </div>
    <div class="col-sm-4 hidden-lg hidden-xs">
      <?= $billingData ?>
    </div>
    <div class="col-md-6">
      woah
    </div>
  </div>
</div>