<style>
* { -webkit-box-sizing:border-box; 
	-moz-box-sizing:border-box; 
	-ms-box-sizing:border-box; 
	-o-box-sizing:border-box; 
	box-sizing:border-box; }

body { 
	display: flex;
	justify-content:center;
	overflow:hidden;
	width: 100%;
	height:100%;
	font-family: 'Open Sans', sans-serif;
	background: #092756;
	background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), linear-gradient(to bottom,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), linear-gradient(135deg,  #670d10 0%,#092756 100%);
}
.login { 
	margin-top: 80px;
	width: 300px;
	height:300px;
}
.login h1 { color: #fff; text-shadow: 0 0 10px rgba(0,0,0,0.3); letter-spacing:1px; text-align:center; }

input { 
	width: 100%; 
	margin-bottom: 10px; 
	background: rgba(0,0,0,0.3);
	border: none;
	outline: none;
	padding: 10px;
	font-size: 13px;
	color: #fff;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
	border: 1px solid rgba(0,0,0,0.3);
	border-radius: 4px;
}
button{
	width: 100%;
	height: 40px;
	background-color:#20365a;
	color: white;
	border: none;
	box-shadow: 0 0 8px #2c2d3e;
	font-weight: bold;
	cursor: pointer;
}
button:hover {
	letter-spacing: 1px;
}
input:focus { box-shadow: inset 0 -5px 45px rgba(100,100,100,0.4), 0 1px 1px rgba(255,255,255,0.2); }
@media(max-width: 360px){
	.login{margin: 64px auto;width: 80%;}
}
a {
	color: white;
	font-size: 14px;
	text-align: center;
	width: 100%;
	display: block;
	margin: 16px 0;
}
.error {
    color: #ea7777;
    min-height: 40px;
    text-align: center;
    padding: 8px 0;
    font-size: 14px;
    text-shadow: 0 0 8px black;
    background-color: #ff000040;
    margin-bottom: 8px;
}
</style>
<div class="login">
	<h1>Recover password</h1>
	<form method="post">
			<input type="hidden" name="_token" value="<?=TOKEN?>">
	<?php $step = $_SESSION['step']; 
		  if($step == 1): ?>
			<input type="text" name="email" placeholder="Email or username" required="required" autocomplete="off"/>
			<button type="submit" class="btn btn-primary btn-block btn-large">Next</button>
    <?php endif;?>
    <?php if($step == 2):?>
            <input class="form-control" type="number" name="code" required placeholder="Code 6 digits" min="100000" max="999999">
            <button type="submit" class="btn btn-primary btn-block btn-large">Next</button>
            
    <?php endif;?>
	<?php if($step == 3): ?>
			<input type="password" name="password" placeholder="New password" required="required" />
			<input type="password" name="r_password" placeholder="Repeat new password"  required="required" />    
			<button type="submit" class="btn btn-primary btn-block btn-large">Save</button>
	<?php endif; ?>
	
			<a href="signin">If you have account, signin from here</a>
	<?php if(isset($error)) {?>
			<div class="error"><?=$error?></div>
	<?php }?>
	</form>

</div>