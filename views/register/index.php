<h2>Registrácia</h2>

<div class="message">
	<?= isset($this->message) ? $this->message : 'dsd' ?>
</div>

<form action="register/run" method="post" class="register-page">

		<i class="fa fa-chevron-up"></i>

		<span class="input hoshi" id="input-login">
		  <input class="input-field" type="login" name="login" value="" placeholder="Email (login)">
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
		
		<span class="input hoshi" id="input-password">
		  <input class="input-field" type="password" name="confirmation" placeholder="Potvrdiť heslo">
		  <label for="input-confirmation" class="input-label">
		      <span class="input-label-content"></span>
		  </label>
		</span> 

		<input type="submit" value="Registrovať" class="button blue filled button-login">

</form>