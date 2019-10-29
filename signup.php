<?php
require "header.php";
?>
<main>
<div class="wrapper-main">
<section class="section-default">
<h1>Signup</h1>
<form class ="btn btn-success" action="includes/signup.inc.php"="post">
<input type="text" name="uid" placeholder="Username"><br>
<input type="text" name="mail" placeholder="E-mail"><br>
<input type="password" name="pwd" placeholder="password"><br>
<input type="password" name="pwd-repeat" placeholder="Repeat password"><br>
<button class ="btn btn-primary" type="submit" name="signip-submit">Signup</button>
</form>
</section>
</div>
</main>

<?php
require "footer.php";
?>