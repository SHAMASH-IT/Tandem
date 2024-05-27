<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="robots" content="[noindex,nofollow]">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- page title-->
    <title>Anoha Academy</title>
    <!-- Fav icon-->
    <link rel="icon" href="<?=URL.ASSETS_DIR?>images/logo.png" type="image/x-icon">
    <!-- Font css-->
    <link rel="stylesheet" href="<?=URL.ASSETS_DIR?>fonts/stylesheet.css">
    <!-- Bootstrap css-->
    <link rel="stylesheet" href="<?=URL.ASSETS_DIR?>vendor/bootstrap/bootstrap.min.css">
    <!-- slick css-->
    <link rel="stylesheet" href="<?=URL.ASSETS_DIR?>vendor/slick/slick.css">
    <!-- slick theme css-->
    <link rel="stylesheet" href="<?=URL.ASSETS_DIR?>vendor/slick/slick-theme.css">
    <!--  index css-->
    <link rel="stylesheet" href="<?=URL.ASSETS_DIR?>css/blog.css">
    <link rel="stylesheet" href="<?=URL.ASSETS_DIR?>css/index-style.css">
    <link rel="stylesheet" href="<?=URL.ASSETS_DIR?>css/home-version-2.css">
    <?=$css_link ?? ''?>
    <base href="<?=URL?>">
    <style>
      .header-logo {
        width: 200px;
      }
      :root{
        /* --primary-color: #F56962; */
        --primary-color: #e01d1a;
      }
    </style>
    <style>
        .has-mega-dropdown > a{}
        .has-mega-dropdown > .mega-dropdown {
  display: none !important;
	background-color: #fff;
	border-radius: 4px;
	padding: 24px 5%;
	position: absolute;
	width: max-content;
	min-width: 160px;
	justify-content: space-between;
	display: flex;
	left: 25%;
	gap: 24px;
}
        .mega-dropdown > .mega-dropdown-list{}
        .mega-dropdown-list > .mega-dropdown-item-nav-link:hover {
          background-color: #686a6fbd;
          border-radius: 4px;
          color: #fff;
        }
          .mega-dropdown-list > .mega-dropdown-item-nav-link {
            font-weight:bold;
}
.mega-dropdown-list a {
  color: #5F5982;
  text-align: center;
  display: inline-block;
  width: 100px;
	padding: 0 16px;
}
        .mega-dropdown-list > .mega-dropdown-list-items{}
        .mega-dropdown-list > .mega-dropdown-list-items > .mega-dropdown-item{}
        .mega-dropdown-list > .mega-dropdown-list-items > .mega-dropdown-item a:hover {
	font-size: 14px;
	font-weight: bold;
	border-bottom: 1px solid #63656a;
	color: #66686d;
}
        .mega-dropdown-list > .mega-dropdown-list-items > .mega-dropdown-item a {
	color: #5F5982;
	font-size: 15px;
}
      </style>
  </head>
  <body> 
    <!-- ======= Header Start =======-->
    <header class="header <?=$page_title == 'category' ? 'header-light':''?>">
      <div class="container"> 
        <nav class="navbar navbar-expand-lg">
          <a class="navbar-brand" href="<?=URL?>"> 
            <!-- header logo -->
            <!-- <svg class="header-logo" xmlns="http://www.w3.org/2000/svg" width="256" height="39" viewBox="0 0 128 39">
              <g transform="translate(0 8)">
                <text transform="translate(0 21)" font-size="20" font-family="Poppins-Medium, Poppins" font-weight="500">
                  <tspan x="0" y="0">Anoha Academy </tspan>
                </text>
              </g>
            </svg> -->
            <img class="header-logo" src="<?=ASSETS_DIR?>images/logo.png" title="Anoha Training Academy" alt="Anoha Academy">
          </a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- nav bar-->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 rounded">
             
              <!-- nav-item-->
              <li class="nav-item dropdown mega-nav-item mt-lg-0 mt-2"> 
                <a class="nav-link item active p-0  mx-lg-4 py-lg-0 py-2 d-flex align-items-center" href="<?=URL?>"><?=__('Accueil');?></a>
                
              </li>
              <li class="nav-item mt-lg-0 mt-2 has-mega-dropdown"> 
                <a class="nav-link item active p-0  mx-lg-4 py-lg-0 py-2 d-flex align-items-center" href="#formations"> <?=__('Formations');?></a>
                
                <ul class="mega-dropdown">
                  <li class="mega-dropdown-list">
                    <a href="#" class="mega-dropdown-item-nav-link">Test1</a>
                    <ul class="mega-dropdown-list-items">
                      <li class="mega-dropdown-item">
                        <a href="#" class="mega-dropdown-item-nav-link">Test2</a>
                      </li>
                      <li class="mega-dropdown-item">
                        <a href="#" class="mega-dropdown-item-nav-link">Test2</a>
                      </li>
                      <li class="mega-dropdown-item">
                        <a href="#" class="mega-dropdown-item-nav-link">Test2</a>
                      </li>
                    </ul>
                  </li>
                  <li class="mega-dropdown-list">
                    <a href="#" class="mega-dropdown-item-nav-link">Test1</a>
                    <ul class="mega-dropdown-list-items">
                      <li class="mega-dropdown-item">
                        <a href="#" class="mega-dropdown-item-nav-link">Test2</a>
                      </li>
                      <li class="mega-dropdown-item">
                        <a href="#" class="mega-dropdown-item-nav-link">Test2</a>
                      </li>
                      <li class="mega-dropdown-item">
                        <a href="#" class="mega-dropdown-item-nav-link">Test2</a>
                      </li>
                    </ul>
                  </li>
                </ul>
                
              </li>
              <li class="nav-item dropdown mx-lg-4 mt-lg-0 mt-2">
                <button class="nav-link p-0 py-lg-0 py-2 dropdown-toggle d-flex align-items-center" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="opacity: 1;">
                <?=__('Thématiques');?><span class="dropdown-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                      <path class="header-svg-fill" d="M12,15.5a1,1,0,0,1-.71-.29l-4-4A1,1,0,0,1,8.71,9.79L12,13.1l3.3-3.18a1,1,0,1,1,1.38,1.44l-4,3.86A1,1,0,0,1,12,15.5Z"></path>
                    </svg></span></button>
                <ul class="dropdown-menu border-0">
                  
                  <?php 
                  $parent_categories = get_parent_categories();
                  foreach($parent_categories as $c):
                  ?>
                    <li><a class="dropdown-item" href="<?=URL.'category/'.$c['category_slug']?>"><?=$c['category_name']?></a></li>
                  <?php endforeach;?>
                </ul>
              </li>
              <li class="nav-item mt-lg-0 mt-2"> 
                <a class="nav-link item active p-0  mx-lg-4 py-lg-0 py-2 d-flex align-items-center" href="<?=URL?>about"> <?=__('A propos');?></a>
                
              </li>
              <li class="nav-item mt-lg-0 mt-2"> 
                <a class="nav-link item active p-0  mx-lg-4 py-lg-0 py-2 d-flex align-items-center" href="<?=URL?>contact"> <?=__('Contact');?></a>
                
              </li>
            </ul>
            <!-- header register button        -->
            <a class="d-block d-sm-none mt-4 mx-2 btn btn-primary" href="<?=URL?>inscription"><?=__('Inscription');?></a>
          </div>
          <div class="d-flex align-items-center">
            <!-- header toggle button-->
            <button class="navbar-toggler ms-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"></button>
            <!-- header register button--><a class="btn btn-primary d-none d-sm-block ms-4" href="<?=URL?>Inscription"><?=__('Inscription');?></a>
          </div>
        </nav>
      </div>
    </header>
    <!-- ******* Header End *******-->
    <!-- ======= Main page Content Start =======-->
    <main class="main-page-content">
      <script>
        document.querySelectorAll('.has-mega-dropdown').forEach((el)=>{
          el.addEventListener('onmouseover', ()=>{
            el.querySelector('.mega-dropdown').classList.toggle('show');
          });
          el.addEventListener('onmouseout', ()=>{
            el.querySelector('.mega-dropdown').classList.toggle('hide');
          });
        });
      </script>