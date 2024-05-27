<?php require_once 'src/view/public/includes/header.php';?>

    <style>
        .loader-parent{
            position: fixed;
            top: 0;
            width: 100vw;
            height: 100vh;
            background-color: rgba(0, 0, 0, .5);
        }
        .loader {
            width: 48px;
            height: 48px;
            border: 5px solid #FFF;
            border-bottom-color: #bcdc4c;
            border-radius: 50%;
            display: inline-block;
            box-sizing: border-box;
            animation: rotation 1s linear infinite;
        }

        @keyframes rotation {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        } 
    </style>

    <section class="edu-section-gap contact-form-area">
        <div class="loader-parent d-flex justify-content-center align-items-center d-none">
            <span class="loader"></span>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form">
                        <div class="section-title section-center">
                            <h3 class="title">Inscription</h3>
                        </div>
                        <div class="row row--10">
                            <div class="form-group col-12">
                                <label style="display: none;" id="error-msg" class="list-group-item rounded-3 py-3 bg-danger text-white" for="listGroupCheckableRadios1">
                                    <h4 class="text-white" style="margin-top: 20px;">Vérifiez vos données !</h4>
                                </label>
                                <label style="display: none;" id="success-msg" class="list-group-item rounded-3 py-3 bg-success text-white" for="listGroupCheckableRadios1">
                                    <h4 class="text-white" style="margin-top: 20px;">E-mail envoyé avec succès</h4>
                                </label>
                            </div>
                            <div class="form-group col-lg-6">
                                <input required type="text" name="name" id="name" placeholder="Votre nom et prénom">
                            </div>
                            <div class="form-group col-lg-6">
                                <input required type="email" name="email" id="email" placeholder="Votre Email">
                            </div>
                            <div class="form-group col-12">
                                <input required type="tel" name="phone" id="phone" placeholder="Téléphone">
                            </div>
                            <?php
                                if(isset($_GET['formation_title'])){
                            ?>

                            <h4 class="title" style="font-size: 14px;">Cours</h4>
                            <div class="form-group col-12">
                                <input required type="text" name="formation" id="phone" placeholder="Formation" value="<?=$_GET['formation_title']?>">
                            </div>
                            <?php
                                }else{
                            ?>
                            <h4 class="title" style="font-size: 14px;">Cours</h4>
                            <div class="form-group col-12">
                                <select required name="formation" id="cours" class="control-form" style="background: white;">
                                    <option disabled selected></option>
                                    <option value="français">Français</option>
                                    <option value="anglais">Anglais</option>
                                    <option value="espagnol">Espagnol</option>
                                    <option value="arabe">Arabe</option>
                                    <option value="allemand">Allemand</option>
                                    <option value="italien">Italien</option>
                                </select>
                            </div>
                            <?php
                                }
                            ?>
                            <h4 class="title" style="font-size: 14px;">Niveau</h4>
                            <div class="form-group col-12">
                                <select required name="level" id="level" class="control-form" style="background: white;">
                                    <option disabled selected></option>
                                    <option value="A 1.1">A 1.1</option>
                                    <option value="A 1.2">A 1.2</option>
                                    <option value="A 2.1">A 2.1</option>
                                    <option value="A 2.2">A 2.2</option>
                                    <option value="B 1.1">B 1.1</option>
                                    <option value="B 1.2">B 1.2</option>
                                    <option value="B 2.1">B 2.1</option>
                                    <option value="B 2.2">B 2.2</option>
                                    <option value="B 2.3">B 2.3</option>
                                </select>
                            </div>
                            <h4 class="title" style="font-size: 14px;">Type</h4>
                            <div class="form-group col-12">
                                <select required name="type" id="type" class="control-form" style="background: white;">
                                    <option disabled selected></option>
                                    <option value="Online">Online</option>
                                    <option value="Présentiel">Présentiel</option>
                                </select>
                            </div>
                            <h4 class="title" style="font-size: 14px;">Horaire</h4>
                            <div class="form-group col-12">
                                <select required name="time" id="time" class="control-form" style="background: white;">
                                    <option disabled selected></option>
                                    <option value="08H00 - 11H00">08H00 - 11H00</option>
                                    <option value="11H00 - 14H00">11H00 - 14H00</option>
                                    <option value="14H00 - 18H00">14H00 - 18H00</option>
                                    <option value="18H00 - 21H00">18H00 - 21H00</option>
                                    <option value="19H00 - 22H00">19H00 - 22H00</option>
                                    <option value="21H00 - 00H00">21H00 - 00H00</option>
                                </select>
                            </div>
                            <div class="form-group col-12 text-center">
                                <button class="rn-btn edu-btn submit-btn" name="submit" id="submit-registred">S'inscrire <i class="icon-4"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ul class="shape-group">
            <li class="shape-1 scene"><img data-depth="-2" src="<?=URL_LINK?>public/assets/images/about/shape-15.png" alt="shape"></li>
            <li class="shape-2 scene"><img data-depth="2" src="<?=URL_LINK?>public/assets/images/cta/shape-04.png" alt="shape"></li>
            <li class="shape-3 scene"><span data-depth="1"></span></li>
            <li class="shape-4 scene"><img data-depth="-2" src="<?=URL_LINK?>public/assets/images/about/shape-13.png" alt="shape"></li>
        </ul>
    </section>

<?php require_once 'src/view/public/includes/footer.php'; ?>