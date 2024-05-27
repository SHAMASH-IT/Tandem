<?php
    $pattern = '/';
    $arr = $_SERVER['REQUEST_URI'];
    $array = explode($pattern, $arr);
    $activePage = end($array);

?>

<style>
    .new-link {
        background-color: red;
        position: absolute;
        right: 4px;
        padding: 0 5px;
        border-radius: 3px;
    }
    .active-li {
        background-color: #bcd74c;
    }

    @media (min-width: 1492px){
        .mobile-menu-bar, .d-xl-none {
            display: none !important;
        }
    }

    @media (max-width: 1492px){
        .mobile-menu-bar, .d-xl-none {
            display: block !important;
        }

        .edu-header .header-navbar{
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }
    }

    .mainmenu-nav .mainmenu li.has-droupdown .submenu li.has-droupdown:hover .submenu {
        width: max-content;
    }
</style>

<div class="header-mainmenu">
        <div class="container-fluid" style="padding-top: 5px; padding-bottom: 5px;">
            <div class="header-navbar">
                <div class="header-brand">
                    <div class="logo">
                        <a href="<?=URL_LINK?>">
                            <img style="width: 50%;" class="logo-light"
                                src="<?=URL_LINK?>public/assets/images/logo/logo-dark.png"
                                alt="Corporate Logo">
                            <img style="width: 50%;" class="logo-dark"
                                src="<?=URL_LINK?>public/assets/images/logo/logo-white.png"
                                alt="Corporate Logo">
                        </a>
                    </div>
                </div>
                <div class="header-mainnav">
                    <nav class="mainmenu-nav">
                        <ul class="mainmenu">
                            <li class="<?= ($activePage == '') ? 'active-li shadow' : $activePage; ?>"><a href="<?=URL_LINK?>">Accueil</a> </li>
                            <li class="has-droupdown">
                                <a href="#"><i class="icon-1"></i> Cours</a>
                                <ul class="submenu">
                                    <li class="has-droupdown">
                                        <a href="<?=URL_LINK?>cours/adultes">Adultes</a>
                                        
                                        <ul class="submenu mega-sub-menu">
                                            <li>
                                                <a href="<?=URL_LINK?>cours/adultes/langues">Langues</a>

                                                <ul>
                                                    <li><a
                                                            href="<?=URL_LINK?>cours/adultes/langues/anglais">Anglais</a>
                                                    </li>
                                                    <li><a
                                                            href="<?=URL_LINK?>cours/adultes/langues/français">Fran&ccedil;ais</a>
                                                    </li>
                                                    <li><a
                                                            href="<?=URL_LINK?>cours/adultes/langues/allemand">Allemand</a>
                                                    </li>
                                                    <li><a
                                                            href="<?=URL_LINK?>cours/adultes/langues/espagnol">Espagnol</a>
                                                    </li>
                                                    <li><a
                                                            href="<?=URL_LINK?>cours/adultes/langues/italien">Italien</a>
                                                    </li>
                                                    <li><a
                                                            href="<?=URL_LINK?>cours/adultes/langues/arabe">Arabe</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="<?=URL_LINK?>cours/adultes/preparation-aux-examens-internationaux">Preparation aux examens internationaux</a>
                                                <ul>
                                                    <li><a href="<?=URL_LINK?>cours/adultes/preparation-aux-examens-internationaux/revision-allemand-osdtelk">Revision allemand (OSD/TELK)</a></li>
                                                    <li><a href="<?=URL_LINK?>cours/adultes/preparation-aux-examens-internationaux/tcf-tef">TCF/TEF</a></li>
                                                    <li><a href="<?=URL_LINK?>cours/adultes/preparation-aux-examens-internationaux/ielts">IELTS</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-droupdown">
                                        <a href="<?=URL_LINK?>cours/junior">Junior (collégiens / lycéens)</a>
                                        <ul class="submenu mega-sub-menu">
                                            <li><a href="<?=URL_LINK?>language-village">Tandem Language Village<span class="badge-1">new</span></a></li>
                                            <li>
                                                <a href="<?=URL_LINK?>/formation/session-annuelle-de-langues-extensives">Sessions Annuelles de langues (Extensives) </a>
                                            </li>
                                            <li>
                                                <a href="#">Sessions d’été (Intensives) </a>
                                            </li>
                                            <li>
                                                <a href="<?=URL_LINK?>formation/club-des-vacances-pour-enfants">Sessions Vacances (Hiver/Printemps) </a>
                                            </li>
                                            <li>
                                                <a href="<?=URL_LINK?>formation/preacuteparation-bac---langues-vivantes">Préparation BAC </a>
                                            </li>
                                            <li>
                                                <a href="<?=URL_LINK?>formation/cours-particuliers---coaching-priveacute">Cours particuliers (Coaching Privé) </a>
                                            </li>
                                            <li>
                                                <a href="<?=URL_LINK?>formation/preacuteparation-delf-dalf-junior">DELF/DALF Junior (Préparation) </a>
                                            </li>
                                            <li>
                                                <a href="<?=URL_LINK?>formation/cambridge-exams">Cambridge exams (Préparation)</a>
                                                <ul>
                                                    <li><a href="#">KET</a></li>
                                                    <li><a href="#">PET</a></li>
                                                    <li><a href="#">IELTS Académique</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="<?=URL_LINK?>cours/certifications">Certifications</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <!-- <li class="has-droupdown">
                                        <a href="<?=URL_LINK?>cours/enfants">Enfants (5 ans - 12 ans)</a>
                                        <ul class="submenu mega-sub-menu">
                                            <li>
                                                <a href="<?=URL_LINK?>formation/session-annuelle-de-langues-extensives">Sessions Annuelles des langues (Extensives) </a>
                                                <ul>
                                                    <li><a href="#">Soutien scolaire étatique</a></li>
                                                    <li><a href="#">Soutien scolaire privé</a></li>
                                                    <li><a href="#">Perfectionnement</a></li>
                                                    <li><a href="#">FLE (Français Langue étrangère)</a></li>
                                                    <li><a href="#">Atelier (Robotique/Peinture)</a></li>
                                                </ul>
                                            </li>
                                            <li> <a href="<?=URL_LINK?>formation/club-drsquoeacuteteacute-langues-et-activiteacutes">Club d’été (Langues et Activités)</a> </li>
                                            <li> <a href="<?=URL_LINK?>formation/club-des-vacances-pour-enfants">Sessions Vacances (Hiver/Printemps)</a> </li>
                                            <li> <a href="#">Cours particuliers (Coaching Privé)</a> </li>
                                            <li> <a href="#">Certifications (YLE)</a> </li>
                                        </ul>
                                    </li> -->
                                    <li class="has-droupdown">
                                        <a href="<?=URL_LINK?>kids">Enfants (5 ans - 12 ans)</a>
                                        <ul class="submenu mega-sub-menu">
                                            <li>
                                                <ul>
                                                    <li class="has-droupdown menu-itti-specialized">
                                                        <a class="parent" href="<?=URL_LINK?>#">Sessions Annuelles des langues (Extensives)</a>
                                                        <ul class="submenu mega-sub-menu sub-menu-itti" style="padding: 0;">
                                                            <li>
                                                                <ul style="padding: 0;">
                                                                    <li><a href="#">Soutien scolaire étatique</a></li>
                                                                    <li><a href="#">Soutien scolaire privé</a></li>
                                                                    <li><a href="#">Perfectionnement</a></li>
                                                                    <li><a href="#">FLE (Français Langue étrangère)</a></li>
                                                                    <li><a href="#">Atelier Robotique</a></li>
                                                                    <li><a href="#">Atelier Peinture</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="<?=URL_LINK?>kids/summer-club">Club d’été <span class="badge-1">new</span></a> </li>
                                            <li><a href="<?=URL_LINK?>formation/club-des-vacances-pour-enfants">Sessions Vacances (Hiver/Printemps)</a> </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-droupdown"><a href="#">Certifications</a>
                                <ul class="mega-menu mega-menu-one" style="min-width: auto !important; left: unset !important; padding-top: 30px;">
                                    <li>
                                        <ul class="submenu mega-sub-menu mega-sub-menu-01" style="padding-left: 0;">
                                            <li>
                                                <ul class="submenu mega-sub-menu" style="padding-left: 0;">
                                                <li><a href="<?=URL_LINK?>tesol-tefl-resume">TEFL/TESOL Resume</a></li>
                                                    <li class="has-droupdown">
                                                        <a class="parent" href="<?=URL_LINK?>cours/cambridge/exams">Certificat  TEFL/TESOL (ITTI)</a>
                                                        <ul class="submenu mega-sub-menu" style="padding: 0;">
                                                            <li>
                                                                <ul style="padding: 0;">
                                                                    <li><a href="<?=URL_LINK?>itti-why">Who, What, and Why</a></li>
                                                                    <li><a href="<?=URL_LINK?>itti-in-class">In-Class TEFL Certification Courses</a></li>
                                                                    <li><a href="<?=URL_LINK?>itti-Combined-TEFL-Certification-Courses">Combined TEFL Certification Courses</a></li>
                                                                    <li><a href="<?=URL_LINK?>itti-level-5-tefl-certificate-course">Level 5 TEFL Certificate Course</a></li>
                                                                    <li class="has-droupdown menu-itti-online">
                                                                        <a class="parent" href="<?=URL_LINK?>#">Online TEFL Certification</a>
                                                                        <ul class="submenu mega-sub-menu sub-menu-itti mega-sub-menu-online" style="padding: 0;">
                                                                            <li>
                                                                                <ul style="padding: 0;">
                                                                                    <li><a href="<?=URL_LINK?>itti-online-tefl-certification-120-Hour">120-Hour On-line LIVE TESOL/TEFL Certification</a></li>
                                                                                    <li><a href="<?=URL_LINK?>itti-online-tefl-certification-220-Hour">220-Hour Master TEFL TESOL Certification</a></li>
                                                                                    <li><a href="<?=URL_LINK?>itti-online-tefl-certification-500-Hour">500-Hour Teacher Trainer Certification</a></li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li class="has-droupdown menu-itti-specialized">
                                                                        <a class="parent" href="<?=URL_LINK?>#">Specialized TEFL Courses</a>
                                                                        <ul class="submenu mega-sub-menu mega-sub-menu-specialized sub-menu-itti" style="padding: 0;">
                                                                            <li>
                                                                                <ul style="padding: 0;">
                                                                                    <li><a href="<?=URL_LINK?>itti-specialized-how-to-teach-ielts">How to Teach IELTS</a></li>
                                                                                    <li><a href="<?=URL_LINK?>itti-specialized-how-to-teach-tofel">How to Teach TOEFL</a></li>
                                                                                    <li><a href="<?=URL_LINK?>itti-specialized-how-to-teach-young-learners">How to Teach Young Learners</a></li>
                                                                                    <li><a href="<?=URL_LINK?>itti-specialized-How-to-teach-business-english">How to Teach Business English</a></li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a class="parent" href="<?=URL_LINK?>cours/anglais/ielts">Certificat Langue Arabe (CIM)</a></li>
                                            <li>
                                                <ul class="submenu mega-sub-menu" style="padding-left: 0;">
                                                    <li class="has-droupdown">
                                                        <a class="parent" href="<?=URL_LINK?>formation/cambridge-exams">Cambridge exams (Préparation)</a>
                                                        <ul class="submenu mega-sub-menu" style="padding: 0;">
                                                            <li>
                                                                <ul style="padding: 0;">
                                                                    <li><a href="#">KET</a></li>
                                                                    <li><a href="#">PET</a></li>
                                                                    <li><a href="#">YLE</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul class="submenu mega-sub-menu-01">
                                            <li>
                                                <a href="<?=URL_LINK?>public/assets/images/iTTi_Official_Exclusive_Single_City_License_Partner_Badge2024.jpg" data-lightbox="roadtrip" data-title="iTTi Official Exclusive Single City License Partner Badge 2024">
                                                    <img style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;" src="<?=URL_LINK?>public/assets/images/iTTi_Official_Exclusive_Single_City_License_Partner_Badge2024.jpg" alt="iTTi Official Exclusive Single City License Partner Badge 2024">
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-droupdown">
                                <a href="<?=URL_LINK?>cours/entreprise">Langue Pour Entreprise</a>
                                <ul class="submenu mega-sub-menu">
                                    <li>
                                        <li class="has-droupdown menu-itti-online">
                                            <a class="parent" href="<?=URL_LINK?>#">Inter-entreprise</a>
                                            <ul class="submenu mega-sub-menu sub-menu-itti" style="padding: 0;">
                                                <li>
                                                    <ul style="padding: 0;">
                                                        <li><a href="<?=URL_LINK?>cours/adultes/langues/anglais">Anglais</a> </li>
                                                        <li><a href="<?=URL_LINK?>cours/adultes/langues/français">Fran&ccedil;ais</a> </li>
                                                        <li><a href="<?=URL_LINK?>cours/adultes/langues/allemand">Allemand</a> </li>
                                                        <li><a href="<?=URL_LINK?>cours/adultes/langues/espagnol">Espagnol</a> </li>
                                                        <li><a href="<?=URL_LINK?>cours/adultes/langues/italien">Italien</a> </li>
                                                        <li><a href="<?=URL_LINK?>cours/adultes/langues/arabe">Arabe</a> </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </li>
                                    <li>
                                        <a href="<?=URL_LINK?>cours/entreprise/intra-entreprise">Intra-entreprise</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="<?= ($activePage == 'sejour-linguistique') ? 'active-li shadow':$activePage; ?>"><a href="<?=URL_LINK?>sejour-linguistique">Séjour Linguistique</a> </li>
                            <li class="<?= ($activePage == 'conferences') ? 'active-li shadow':$activePage; ?>"><a href="<?=URL_LINK?>conferences">Conférences</a> </li>
                            <li class="<?= ($activePage == 'personal-development-seminar') ? 'active-li shadow':$activePage; ?> has-droupdown">
                                <a href="<?=URL_LINK?>personal-development-seminar">Séminaire et développement personnel</a>
                                <ul class="submenu">
                                    <li>
                                        <a href="<?=URL_LINK?>team-building">Team Building <span class="badge-1">new</span></a> 
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="header-right">
                    <ul class="header-action">

<!--                        <li class="header-btn">-->
<!--                            <a href="https://tandem.mtderp.com/Tandem/Questions/testniveau"-->
<!--                                class="edu-btn btn-medium">Test en ligne <i class="icon-4"></i></a>-->
<!--                        </li>-->
                        <li class="mobile-menu-bar d-block d-xl-none">
                            <button class="hamberger-button">
                                <i class="icon-54"></i>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>