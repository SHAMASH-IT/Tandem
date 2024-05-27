<?php 
$page_title = 'contact';
$css_link = '<link rel="stylesheet" href="'.URL.ASSETS_DIR.'css/form-page.css">';
?>
<?php include VIEW_DIR.'/public/header.php';?>
<section class="mt-160 form-page login-form-page">
    <div class="login-form-page-content d-flex">
    <div class="form-page-left form-page-half text-center">
        <div class="form-page-left-img">
            <h2 class="banner-heading text-white mb-3"><?=__('Contactez-nous')?></h2>
        </div>
        <div class="form-page-left-content">    
            <img src="<?=ASSETS_DIR?>images/img/form-image.png" alt="Image Description">
        </div>
    </div>
    <div class="form-page-right form-page-half" style="padding-top:20px">
        <div class="form-page-right-content"> 
        <form class="login-form mt-3" action="<?=URL?>contact/send" method="post">
            <div class="form-group">
                <label class="form-label text-primary" for="fullName">Nom et prénom</label>
                <input class="form-control"  name="fullname" id="fullName" type="text" placeholder="Votre nom" required>
            </div>
            <div class="form-group mt-2">
                <label class="form-label text-primary" for="exampleFormControlInput1">Email</label>
                <input class="form-control" id="exampleFormControlInput1" type="email" placeholder="Exampl@email.com" name="email" required>
            </div>
            <div class="form-group mt-2">
                <label class="form-label text-primary" for="exampleFormControlInput11">Téléphone</label>
                <input class="form-control" id="exampleFormControlInput11" type="tel" placeholder="Votre téléphone" name="phone" required>
            </div>
            <div class="form-group mt-2">
                <label class="form-label text-primary" for="exampleFormControlInput2">Sujet</label>
                <input class="form-control" id="exampleFormControlInput2" type="text" placeholder="Sujet" name="subject" required>
            </div>
            <div class="form-group mt-2">
                <label class="form-label text-primary" for="exampleFormControlInput3">Message</label>
                <textarea class="form-control" id="exampleFormControlInput3" type="text" placeholder="Message" name="message" required></textarea>
            </div>
            <button class="btn btn-primary w-100 mt-5 submit-btn" type="submit">Envoyer</button>
        </form>
        </div>
    </div>
    </div>
</section>
<?php include VIEW_DIR.'/public/footer.php';?>