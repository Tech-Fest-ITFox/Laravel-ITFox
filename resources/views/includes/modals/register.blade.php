<a href="#" class="btn fb">Регистрирай се чрез <b>Facebook</b></a>
<h2>или</h2>
<div class="levels two">
	<div class="level-bar"><div class="level-bar-progress first"></div></div>
	<ul class="level-labels">
		<li class="activated">бърза регистрация</li>
		<li>допълнителни данни</li>
	</ul>
</div>
<form name="regForm" ng-controller="FormValidation" action="" method="post" novalidate>
	<div class="input-holder">
		<input type="email" name="email" class="input" ng-class="{ 'error' : regForm.email.$invalid && (regForm.email.$touched || regForm.email.$dirty) }" ng-model="email" required />
		<div class="placeholder">E-mail</div>
		<div class="err" ng-show="regForm.email.$invalid">Въведи валиден e-mail</div>
	</div>
	<div class="input-holder">
		<input type="text" name="name" class="input" ng-model="name" ng-class="{ 'error' : regForm.name.$invalid && (regForm.name.$touched || regForm.name.$dirty)  }" required />
		<div class="placeholder">Име Фамилия</div>
		<div class="err" ng-show="regForm.name.$invalid">Въведи име</div>
	</div>
	<div class="input-holder">					
		<input type="password" name="password" class="input" ng-class="{ 'error' : (regForm.password.$invalid || regForm.password.$error.minlength) && (regForm.password.$touched || regForm.password.$dirty) }" ng-model="password" ng-minlength="6" required />
		<div class="placeholder">Парола</div>
		<div class="err" ng-show="regForm.password.$error.minlength">Твърде кратка парола - трябва да е над 6 символа</div>
	</div>
	<div class="input-holder">					
		<input type="password" name="password2" class="input" ng-class="{ 'error' : (regForm.password2.$invalid || regForm.password2.$error.passwordVerify) && (regForm.password2.$touched || regForm.password2.$dirty) }" ng-model="password2" ng-minlength="6" password-verify="password" required />
		<div class="placeholder">Повтори парола</div>
		<div class="err" ng-show="regForm.password2.$error.passwordVerify">Паролите не съвпадат</div>
	</div>
	<button type="submit" class="btn" ng-class="{ 'disabled' : regForm.$invalid }" ng-disabled="regForm.$invalid">Регистрирай се веднага</button>
	<a href="#" class="assist-link fright nmr">или попълни и други данни</a>
</form>