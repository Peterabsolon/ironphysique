<!-- user-changedata START -->
<div class="row user-changedata">
	<div class="row-maxwidth">
		<form action="<?= URL ?>dashboard/change_save" method="post">
			
			<div class="col-lg-12">
				<h2><?= isset($this->title) ? $this->title : 'Dashboard' ?></h2>

				<?php
    				print_r($this->user);
				?>
	
			</div>

			<div class="col-lg-4">
				<input type="submit">

	            <!-- billing_name VARCHAR 25 *  -->
	            <!-- billing_surname VARCHAR 25 * -->
	            <!-- billing_company VARCHAR 25 -->
	            <!-- billing_address VARCHAR 25 * -->
	            <!-- billing_zip INT 5 * -->
	            <!-- billing_city VARCHAR 50 * -->
	            <!-- billing_country VARCHAR 50 * -->
	            <!-- phonenum VARCAR 25 *    -->
	            <!-- ico INT 8      -->
	            <!-- dic INT 10 -->
	            <!-- icdph VARCHAR 12 -->

	            <!-- shipping_name VARCHAR 25 * -->
	            <!-- shipping_surname VARCHAR 25 * -->
	            <!-- shipping_company VARCHAR 25  -->
	            <!-- shipping_address VARCHAR 25 * -->
	            <!-- shipping_zip INT 5 * -->
	            <!-- shipping_city VARCHAR 50 * -->
	            <!-- shipping_country VARCHAR 50 * -->



	            
	            <span class="input hoshi" id="input-billing_name">
	              <input class="input-field input--filled" type="text" name="billing_name" value="<?= $this->user['billing_name'] ?>">
	              <label for="input-billing_name" class="input-label">
	                  <span class="input-label-content">Krsné meno</span>
	              </label>
	          	</span>

	          	<span class="input hoshi" id="input-billing_surname">
	              <input class="input-field input--filled" type="text" name="billing_surname" value="<?= $this->user['billing_surname'] ?>">
	              <label for="input-billing_surname" class="input-label">
	                  <span class="input-label-content">Priezvisko</span>
	              </label>
	          	</span>

	          	<span class="input hoshi" id="input-billing_company">
	              <input class="input-field input--filled" type="text" name="billing_company" value="<?= $this->user['billing_company'] ?>">
	              <label for="input-billing_company" class="input-label">
	                  <span class="input-label-content">Názov spoločnosti</span>
	              </label>
	          	</span>

	          	<span class="input hoshi" id="input-billing_address">
	              <input class="input-field input--filled" type="text" name="billing_address" value="<?= $this->user['billing_address'] ?>">
	              <label for="input-billing_address" class="input-label">
	                  <span class="input-label-content">Adresa</span>
	              </label>
	          	</span>

	          	<span class="input hoshi" id="input-billing_zip">
	              <input class="input-field input--filled" type="text" name="billing_zip" value="<?= $this->user['billing_zip'] ?>">
	              <label for="input-billing_zip" class="input-label">
	                  <span class="input-label-content">PSČ</span>
	              </label>
	          	</span>

	          	<span class="input hoshi" id="input-billing_city">
	              <input class="input-field input--filled" type="text" name="billing_city" value="<?= $this->user['billing_city'] ?>">
	              <label for="input-billing_city" class="input-label">
	                  <span class="input-label-content">Mesto</span>
	              </label>
	          	</span>

	          	<span class="input hoshi" id="input-billing_country">
	              <input class="input-field input--filled" type="text" name="billing_country" value="<?= $this->user['billing_country'] ?>">
	              <label for="input-billing_country" class="input-label">
	                  <span class="input-label-content">Krajina</span>
	              </label>
	          	</span>

	          	<span class="input hoshi" id="input-phonenum">
	              <input class="input-field input--filled" type="text" name="phonenum" value="<?= $this->user['phonenum'] ?>">
	              <label for="input-phonenum" class="input-label">
	                  <span class="input-label-content">Telefónne číslo</span>
	              </label>
	          	</span>

	          	<span class="input hoshi" id="input-ico">
	              <input class="input-field input--filled" type="text" name="ico" value="<?= $this->user['ico'] ?>">
	              <label for="input-ico" class="input-label">
	                  <span class="input-label-content">IČO</span>
	              </label>
	          	</span>

	          	<span class="input hoshi" id="input-dic">
	              <input class="input-field input--filled" type="text" name="dic" value="<?= $this->user['dic'] ?>">
	              <label for="input-dic" class="input-label">
	                  <span class="input-label-content">DIČ</span>
	              </label>
	          	</span>

	          	<span class="input hoshi" id="input-icdph">
	              <input class="input-field input--filled" type="text" name="icdph" value="<?= $this->user['icdph'] ?>">
	              <label for="input-icdph" class="input-label">
	                  <span class="input-label-content">IČ DPH</span>
	              </label>
	          	</span>
			</div>

			<div class="col-lg-4">

			</div>
		</form>
	</div>
</div>