<div class="popup-mobile-menu">
    <div class="inner">
        <div class="header-top">
            <div class="logo">
                <a href="<?=URL_LINK?>">
                    <img class="logo-light" src="<?=URL_LINK?>public/assets/images/logo/logo-dark.png" alt="Corporate Logo">
                    <img class="logo-dark" src="<?=URL_LINK?>public/assets/images/logo/logo-white.png" alt="Corporate Logo">
                </a>
            </div>
            <div class="close-menu">
                <button class="close-button">
                    <i class="icon-73"></i>
                </button>
            </div>
        </div>
        <ul class="mainmenu"> 
            <li class="has-droupdown">
                <a href="#">Cours</a>
                <ul class="submenu">
                <?php 
                    $categories = $parent_categories ?? get_parent_categories(); 
                    if(!empty($categories)){ 
                        foreach($categories as $category):
                ?>

                    <li class="has-droupdown">
                        <a href="<?=URL_LINK?>category<?=get_category_predecessors($category['category_id'])?>"><?=$category['category_name']?></a>
                        <ul class="submenu mega-sub-menu">
                            <?php
                            $cc = get_parent_categories($category['category_id']); 
                            if(!empty($cc)){ 
                                foreach($cc as $c):
                                $cid = $c['category_id'];
                            ?>
                            <li>
                                <a href="<?=URL_LINK?>category<?=get_category_predecessors($c['category_id'])?>"><?=$c['category_name']?></a>
                                
                                <?php
                                    $ccc = get_parent_categories($cid); 
                                    if(!empty($ccc)){ 
                                        echo '<ul>';
                                        foreach($ccc as $c):
                                            
                                            ?>
                                    <li><a href="<?=URL_LINK?>category<?=get_category_predecessors($c['category_id'])?>"><?=$c['category_name']?></a></li>
                                <?php
                                    endforeach;
                                    echo '</ul>';
                                }
                                ?>
                            </li>
                            <?php
                                endforeach;
                                }
                            ?>
                        </ul>
                    </li>
                <?php
                    endforeach;
                    }
                ?>
                </ul>
            </li>
            <li class="has-droupdown"><a href="#">Certifications</a>
                <ul class="mega-menu mega-menu-one">
                    <li>
                        <ul class="submenu mega-sub-menu mega-sub-menu-01">
                            <li><a href="#">Cambridge Exams</a></li>
                            <li><a href="#">IELTS</a></li>
                            <li><a href="#">TCF/TEF</a></li>
                            <li><a href="#">Allemand (OSD/TELK)</a></li>
                        </ul>
                    </li>
                    <li>
                        <ul class="submenu mega-sub-menu mega-sub-menu-01">
                            <li><a href="#">Atelier FLE</a></li>
                            <li><a href="#">TFI</a></li>
                            <li><a href="#">DELF</a></li>
                            <li><a href="#">DELF Junior</a></li>
                        </ul>
                    </li>
                    <li>
                        <ul class="submenu mega-sub-menu-01">
                            <li>
                                <a href="#">
                                    <img src="<?=URL_LINK?>public/assets/images/others/certificat.png" alt="advertising Image">
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="<?=URL_LINK?>sejour-linguistique">Séjour Linguistique</a> </li>
            <li><a href="<?=URL_LINK?>#">Co-working space</a> </li>
            <li><a href="<?=URL_LINK?>#">Softskills</a> </li>
            <li><a href="<?=URL_LINK?>contact">Contact</a> </li>
        </ul>
    </div>
</div>