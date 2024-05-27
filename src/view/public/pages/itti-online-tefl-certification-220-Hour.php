<?php require_once 'src/view/public/includes/header.php';?>
    <style>
         .thumbnail::before{
            content: unset !important;
        }
        .thumbnail img {
            transform: scale(1);
            filter: drop-shadow(0 1rem 3rem rgba(0,0,0,.175));
        }
        .thumbnail img:nth-child(2) {
            position: absolute;
            left: 0;
            top: 0;
            z-index: -1;
            transform: scale(1.2);
        }
        .thumbnail img:nth-child(3) {
            position: absolute;
            left: 0;
            top: 0;
            z-index: -1;
            transform: scale(1.4);
            opacity: .5;
        }
        p{
            font-size: 3rem !important;
            text-align: justify !important;
            width: 100% !important;
            margin: 0 !important;
        }
        .hero-style-4 {
            padding-top: 50px;
        }
    </style>

    <div class="hero-banner hero-style-9 hero-style-4 motivation-banner">
        <div class="container edublink-animated">
            <div class="row align-items-center">
                <div class="col-lg-6 edu-order-md-2">
                    <div class="banner-content sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="1000">
                        <h1 class="title sal-animate text-right" style="text-align: left;" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">
                            Online TEFL/TESOL Course
                        </h1>
                        <p class="sal-animate">
                            220-HOUR <code>TEFL/TESOL</code> Online course.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 edu-order-md-1">
                    <div class="banner-thumbnail">
                        <div class="video-gallery video-gallery-5" data-sal-delay="150" data-sal="slide-left" data-sal-duration="800">
                            <div class="thumbnail sal-animate">
                                <img src="<?=URL_LINK?>public/assets/images/tesol class.png" alt="Pi-chart Image">
                                <img src="<?=URL_LINK?>public/assets/images/shape tesol class.png" alt="Pi-chart Image">
                                <img src="<?=URL_LINK?>public/assets/images/shape tesol class.png" alt="Pi-chart Image">
                                <a href="https://www.youtube.com/watch?v=NYOURzxRkSg?si=Szzwm3gDu8oCAKBf" class="video-play-btn video-popup-activation">
                                    <i class="icon-18"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="shape-group">
                <li class="shape-1 sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                    <span></span>
                </li>
                <li class="shape-2 sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                    <img class="rotateit" src="<?=URL_LINK?>public/assets/images/about/shape-03.png" alt="Shape">
                </li>
                <li class="shape-3 scene sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                    <span data-depth="2.5" style="transform: translate3d(-17.1px, 11.2px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;"></span>
                </li>
            </ul>
        </div>
        <ul class="shape-group">
            <li class="shape-5 scene sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                <img data-depth="1" src="<?=URL_LINK?>public/assets/images/counterup/shape-02.png" alt="Shape" style="transform: translate3d(-15.6px, 11.2px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
            </li>
            <li class="shape-6 scene sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                <img data-depth="-1" src="<?=URL_LINK?>public/assets/images/others/shape-38.png" alt="Shape" style="transform: translate3d(17px, -11.1px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
            </li>
        </ul>
    </div>

    <div class="features-area-5">
        <div class="container edublink-animated-shape">
            <div class="section-title section-center sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <span class="pre-title pre-textsecondary">220H TEFL/TESOL</span>
                <h2 class="title">TEFL/TESOL Master CERTIFICATION</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
            </div>
            <div class="features-grid-wrap" style="grid-template-columns: repeat(3, 1fr); padding: 50px">
                <div class="features-box features-style-6 ">
                    <div class="icon icon-course shadow-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="47" height="40" data-inject-url="https://edublink.html.devsblink.com/assets/images/svg-icons/online-class.svg" class="svgInject"><path fill-rule="evenodd" fill="#8E56FF" d="M43.248 20.613v8.962c0 .476-.356 1.474-1.212 1.937h2.413c1.337 0 2.481.513 2.481 1.859 0 3.736-2.387 6.626-6.101 6.626H7.045c-3.714 0-6.101-2.89-6.101-6.626 0-1.346 1.145-1.859 2.482-1.859h2.413c-.857-.385-1.207-1.948-1.207-2.423V13.33c0-2.241 1.391-3.636 3.62-3.636h16.892V3.633c0-2.243 2.597-3.636 4.826-3.636h13.272c2.228 0 3.62 1.393 3.62 3.636v13.334c0 2.121-1.554 3.462-3.614 3.646ZM3.426 33.937c.139 2.116 1.481 3.635 3.619 3.635h33.784c2.138 0 3.48-1.519 3.62-3.635H3.426Zm12.065-9.698c-1.196 0-2.413 1.607-2.413 2.424v4.849h4.826v-4.849c0-.574-.885-2.424-2.413-2.424Zm1.351-3.519c0-.848-.685-1.537-1.527-1.537-.842 0-1.527.689-1.527 1.537 0 .847.685 1.536 1.527 1.536.842 0 1.527-.689 1.527-1.536Zm8.497 1.267a2.698 2.698 0 0 1-.946-2.934l.751-3.299v-3.636H8.252c-.743 0-1.207.466-1.207 1.212v15.759c0 .746.464 2.423 1.207 2.423h2.413v-4.849c0-1.248.34-2.533 1.341-3.31a4.243 4.243 0 0 1-.913-2.633c0-2.342 1.894-4.246 4.222-4.246 2.328 0 4.221 1.904 4.221 4.246a4.24 4.24 0 0 1-.911 2.63c.023.018.046.034.069.053.992.797 1.623 2.089 1.623 3.26v4.849h18.099c.743 0 2.413-1.677 2.413-2.423v-8.486l-10.039.026-2.389 1.503a2.675 2.675 0 0 1-1.43.416 2.67 2.67 0 0 1-1.632-.561Zm19.11-18.354c0-.747-.818-1.076-1.561-1.076H29.506c-.743 0-1.949.329-1.949 1.076v12.121l-1.207 4.849 3.34-2.477c.214-.136.027.053.28.053h13.272c.743 0 1.207-.465 1.207-1.212V3.633Zm-4.827 4.849h-7.239l.176-.142a1.351 1.351 0 0 1-1.347-1.355c0-.75.427-.927 1.171-.927h7.239c.745 0 1.47.177 1.47.927 0 .748-.725 1.497-1.47 1.497Zm-4.907 3.654h2.874a1.35 1.35 0 0 1 1.347 1.355c0 .749-.983 1.052-1.727 1.052h-2.413c-.744 0-1.428-.303-1.428-1.052a1.35 1.35 0 0 1 1.347-1.355Zm-7.158 3.618c.037-.126 0 .132 0 0Z" style="stroke-dasharray: 525, 527; stroke-dashoffset: 0;"></path></svg>
                    </div>
                    <div class="content">
                        <h5 class="title">Duration</h5>
                    </div>
                </div>
                <div class="features-box features-style-6  feature-wrapper">
                    <div class="icon certificate icon-certificate shadow-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="46" height="41" data-inject-url="https://edublink.html.devsblink.com/assets/images/svg-icons/certificate.svg" class="svgInject"><path fill-rule="evenodd" fill="#1AB69D" d="M42.461 33.712h-1.824l.88 4.018c.403 2.435-1.803 2.548-2.732 2.009l-4.91-2.639c-.137-.072-.515-.072-.652 0l-4.91 2.639c-1.506.812-3.006-.295-2.732-2.009l.367-4.018H3.538C1.808 33.712 0 31.868 0 30.101V3.61C0 1.841 1.808-.003 3.538-.003h38.923l.077-.011c1.731 0 3.461 1.855 3.462 3.624v26.491c0 1.767-1.809 3.611-3.539 3.611Zm-8.936.836 5.398 2.777-.995-4.972-.003-.015-.429-2.681a7.974 7.974 0 0 1-3.947 1.043 7.967 7.967 0 0 1-3.946-1.043l-1.296 7.668 5.218-2.777Zm.024-6.596c3.016 0 5.469-2.506 5.469-5.587s-2.453-5.587-5.469-5.587c-3.016 0-5.469 2.506-5.469 5.587s2.453 5.587 5.469 5.587ZM43.641 4.813c0-1.553-.814-2.408-2.359-2.408H4.718c-1.497 0-2.359.953-2.359 2.408v24.082c0 1.444.945 2.41 2.359 2.41h21.703l.78-3.666c.001-.012.005-.025.007-.036a8.405 8.405 0 0 1-1.818-5.238c0-4.596 3.66-8.336 8.159-8.336 4.499 0 8.159 3.74 8.159 8.336 0 1.69-1.197 4.203-2.255 5.795.268 1.07.649 3.145.649 3.145h1.18c1.548 0 2.359-1.102 2.359-2.41V4.813Zm-5.898 6.022H7.077c-.744 0-1.18-.447-1.18-1.205 0-.759.436-1.204 1.18-1.204h30.666c.743 0 1.18.445 1.18 1.204 0 .758-.437 1.205-1.18 1.205ZM7.077 15.651h12.974c.742 0 1.179.444 1.179 1.204 0 .758-.437 1.204-1.179 1.204H7.077c-.744 0-1.18-.446-1.18-1.204 0-.76.436-1.204 1.18-1.204Z" style="stroke-dasharray: 508, 510; stroke-dashoffset: 0;"></path></svg>
                    </div>
                    <div class="content">
                        <h5 class="title">Certificates</h5>
                    </div>
                </div>
                <div class="features-box features-style-6 feature-wrapper">
                    <div class="icon icon-member shadow-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="41" data-inject-url="https://edublink.html.devsblink.com/assets/images/svg-icons/user.svg" class="svgInject"><path fill-rule="evenodd" fill="#F8941F" d="M47.642 30.508c0-2.8-.823-5.504-2.381-7.82a13.865 13.865 0 0 0-4.236-4.076 10.472 10.472 0 0 0 3.201-7.556c0-5.741-4.587-10.412-10.224-10.412-3.342 0-6.473 1.684-8.375 4.448a10.169 10.169 0 0 0-1.48-.111c-.503 0-.996.04-1.48.111C20.765 2.328 17.634.644 14.292.644 8.655.644 4.069 5.315 4.069 11.056a10.47 10.47 0 0 0 3.2 7.556 13.865 13.865 0 0 0-4.236 4.076 13.959 13.959 0 0 0-2.381 7.82V36.3h9.855v4.336h27.281V36.3h9.855v-5.792h-.001ZM34.002 3.214c4.246 0 7.701 3.518 7.701 7.842 0 4.326-3.455 7.843-7.701 7.843l-.228-.003a10.444 10.444 0 0 0 .523-2.278c.01-.086.02-.173.028-.26.008-.087.014-.177.02-.266.004-.071.01-.141.013-.21.007-.152.011-.303.011-.455l.002-.034-.001-.018a11.769 11.769 0 0 0-.048-.985l-.008-.087c-.381-3.753-2.709-6.966-6.068-8.451 1.448-1.656 3.541-2.638 5.756-2.638ZM21.483 8.035l.074-.027a7 7 0 0 1 .409-.135l.13-.038.235-.063a7.602 7.602 0 0 1 1.816-.222 7.617 7.617 0 0 1 2.05.286l.132.037.176.056a6.447 6.447 0 0 1 .306.106c2.574.971 4.506 3.304 4.942 6.137l.01.068c.014.096.026.192.036.289l.012.107c.008.089.014.178.02.268l.007.115c.005.114.008.229.009.345V15.407c0 .112-.004.223-.008.333-.002.036-.003.07-.006.104a6.923 6.923 0 0 1-.062.647l-.023.157a5.995 5.995 0 0 1-.043.24c-.013.071-.028.14-.043.211a6.764 6.764 0 0 1-.11.437c-.01.042-.022.082-.033.123a9.052 9.052 0 0 1-.056.176l-.047.141c-.018.052-.035.105-.055.157-.033.09-.067.177-.102.265l-.05.116a6.223 6.223 0 0 1-.096.218l-.012.026-.036.076a8.308 8.308 0 0 1-.116.231c-.016.028-.031.058-.046.088l-.003.005c-.044.081-.09.161-.136.24l-.055.094a8.697 8.697 0 0 1-.258.397 4.856 4.856 0 0 1-.089.126c-.038.054-.078.106-.118.16l-.082.106c-.043.054-.085.108-.129.161l-.083.098c-.045.052-.09.105-.137.157l-.085.091a7.49 7.49 0 0 1-.375.378l-.101.092-.168.147-.087.073a8.436 8.436 0 0 1-.208.167l-.058.044a7.568 7.568 0 0 1-9.169 0l-.056-.044a6.945 6.945 0 0 1-.209-.167l-.087-.072-.168-.149-.101-.091-.142-.139a6.65 6.65 0 0 1-.318-.33 5.206 5.206 0 0 1-.137-.159c-.028-.032-.056-.063-.083-.096-.044-.053-.086-.107-.129-.161a4.892 4.892 0 0 1-.082-.106c-.04-.053-.08-.106-.118-.16-.03-.042-.06-.084-.088-.127l-.103-.148a10.44 10.44 0 0 1-.156-.249l-.054-.093a9.483 9.483 0 0 1-.138-.242l-.047-.091a10.065 10.065 0 0 1-.156-.315l-.006-.013a5.196 5.196 0 0 1-.101-.227l-.047-.109a8.834 8.834 0 0 1-.156-.418c-.017-.051-.035-.102-.051-.154a11.87 11.87 0 0 1-.123-.418 9.368 9.368 0 0 1-.043-.179l-.032-.141c-.013-.058-.026-.115-.037-.174a7.372 7.372 0 0 1-.097-.641l-.012-.108a7.022 7.022 0 0 1-.029-.422 6.9 6.9 0 0 1 0-.731l.006-.101c.006-.095.013-.188.022-.282l.009-.097c.011-.101.024-.201.038-.301l.009-.058c.436-2.835 2.367-5.17 4.943-6.141ZM6.592 11.056c0-4.324 3.454-7.842 7.7-7.842 2.215 0 4.308.982 5.755 2.638-3.359 1.486-5.687 4.7-6.067 8.454a10.598 10.598 0 0 0-.044 1.578c.003.066.008.131.013.196.006.094.012.189.02.283.008.083.018.166.027.248.009.073.017.145.027.217l.042.282.029.167c.019.105.039.21.06.313l.024.102c.085.386.192.765.318 1.132l.023.072a8.534 8.534 0 0 1-.227.003c-4.246 0-7.7-3.517-7.7-7.843Zm6.03 16.383c-.028.044-.054.089-.081.135a10.195 10.195 0 0 0-.261.447c-.049.088-.099.177-.146.268a13.362 13.362 0 0 0-.224.441l-.082.17-.13.286c-.023.053-.047.105-.069.158-.049.115-.096.231-.142.347l-.041.102c-.059.152-.114.303-.167.457-.013.034-.024.071-.035.105-.04.118-.079.236-.116.356-.017.054-.032.11-.048.163-.03.101-.059.202-.086.303l-.048.182-.071.293a10.239 10.239 0 0 0-.104.485l-.035.181c-.02.109-.037.218-.055.327l-.024.154c-.024.161-.045.321-.063.483l-.001.006c-.016.148-.03.294-.042.442H3.175v-3.222c0-4.401 2.484-8.352 6.377-10.23a10.012 10.012 0 0 0 6.222 1.079 9.833 9.833 0 0 0 .907 1.138c.042.047.085.092.129.139.074.077.15.154.226.23.029.028.056.058.085.087-.11.067-.218.136-.326.207l-.052.034a18.03 18.03 0 0 0-.429.297 9.1 9.1 0 0 0-.279.206 15.587 15.587 0 0 0-.435.342c-.025.019-.05.041-.075.062-.091.076-.181.153-.27.232l-.103.09c-.089.081-.177.162-.265.245-.022.021-.046.042-.068.065-.107.102-.213.206-.316.313-.027.027-.054.054-.08.083-.08.083-.158.166-.236.251l-.093.102c-.086.096-.173.194-.257.294l-.041.047a19.667 19.667 0 0 0-.361.449c-.069.092-.138.182-.206.275-.026.036-.053.07-.079.107-.088.123-.176.248-.262.374a14.55 14.55 0 0 0-.266.413Zm.408 10.628v-3.222c0-.141.003-.285.008-.425l.008-.14c.004-.095.009-.189.016-.283.003-.058.01-.115.015-.171.007-.084.014-.167.023-.249.006-.06.015-.12.023-.18.009-.079.019-.158.03-.235l.031-.186.037-.226.038-.189c.015-.074.029-.146.045-.218.014-.064.03-.127.045-.191.017-.071.033-.141.052-.212l.053-.191c.019-.069.037-.137.058-.206.019-.064.04-.127.06-.19.022-.068.042-.135.065-.201a7.11 7.11 0 0 1 .067-.189l.072-.198.073-.184.079-.195.08-.185.085-.188.087-.182.091-.185.095-.178c.032-.06.063-.121.096-.181l.101-.175c.034-.059.067-.118.103-.176l.107-.173c.035-.057.072-.114.109-.171.037-.057.075-.113.113-.168.038-.057.076-.113.115-.168.039-.056.079-.11.119-.165l.12-.162.126-.161.126-.159.131-.155.132-.154.137-.151.137-.149.143-.146.143-.145.147-.14c.05-.047.099-.094.15-.139.05-.047.101-.091.152-.136.051-.046.103-.09.154-.134l.157-.13.161-.13.162-.125c.054-.041.11-.082.166-.122a6.338 6.338 0 0 1 .337-.238l.17-.112.178-.112c.058-.036.116-.072.174-.106.061-.036.121-.072.183-.107.059-.033.118-.067.178-.099a7.654 7.654 0 0 1 .37-.194l.144-.07c1.418.759 3.03 1.19 4.74 1.19 1.71 0 3.322-.431 4.74-1.19l.144.069.183.095c.063.032.125.065.186.099l.18.1.181.106.176.107a10.418 10.418 0 0 1 .347.225 8.73 8.73 0 0 1 .502.359l.163.125c.054.043.107.085.159.129.053.043.106.086.159.131l.154.133c.051.046.102.09.152.137l.149.138c.05.046.099.094.148.142l.143.143.142.147.137.148c.047.05.093.101.138.152l.131.152c.044.053.089.105.132.159.042.05.084.104.125.156a10.06 10.06 0 0 1 .703.996c.036.058.072.114.107.173l.103.175.101.176.096.18.095.179.09.185.088.182.084.188c.028.062.055.123.081.185l.078.192c.024.063.05.125.075.187l.07.198c.023.063.047.125.068.189l.065.201.06.19.058.207.053.19.051.212c.016.064.032.127.046.191.016.072.03.144.045.217.012.064.026.126.037.19.014.074.026.149.038.224l.031.188c.011.077.02.155.03.233.008.061.017.121.023.182.01.082.016.165.023.249.006.056.012.113.016.171.007.094.011.188.016.283.002.047.006.092.007.139.006.141.008.285.008.426v3.222H13.03Zm24.713-4.337c-.024-.311-.06-.624-.105-.933l-.023-.146c-.018-.112-.036-.224-.057-.335-.01-.059-.022-.116-.033-.175-.02-.102-.041-.203-.063-.304l-.042-.183a9.816 9.816 0 0 0-.072-.296c-.016-.06-.03-.12-.047-.179a10.744 10.744 0 0 0-.087-.307l-.047-.161a18.952 18.952 0 0 0-.15-.46c-.054-.155-.11-.307-.169-.459l-.039-.098a11.704 11.704 0 0 0-.144-.35c-.022-.053-.045-.104-.068-.155a12.757 12.757 0 0 0-.212-.458c-.044-.092-.09-.182-.136-.273a8.972 8.972 0 0 0-.235-.438l-.09-.161a10.363 10.363 0 0 0-.172-.287l-.08-.133a14.55 14.55 0 0 0-.266-.413 20.691 20.691 0 0 0-.262-.374c-.026-.037-.053-.071-.079-.107a18.034 18.034 0 0 0-.283-.374 13.593 13.593 0 0 0-.285-.35l-.038-.045c-.086-.101-.173-.2-.26-.297l-.091-.101c-.079-.085-.157-.169-.238-.252l-.078-.082a15.56 15.56 0 0 0-.317-.313l-.068-.065a20.754 20.754 0 0 0-.265-.245l-.103-.09a10.03 10.03 0 0 0-.271-.232c-.025-.021-.049-.043-.074-.062a18.293 18.293 0 0 0-.347-.277l-.088-.066a13.22 13.22 0 0 0-.389-.283 11.023 11.023 0 0 0-.372-.253c-.107-.071-.216-.14-.325-.207l.083-.084c.078-.078.155-.156.23-.235l.126-.135a8.974 8.974 0 0 0 .343-.393 9.46 9.46 0 0 0 .248-.313l.08-.102c.081-.109.159-.219.237-.331a10.012 10.012 0 0 0 6.222-1.08c3.893 1.878 6.377 5.829 6.377 10.23v3.222h-7.376Z" style="stroke-dasharray: 464, 466; stroke-dashoffset: 0;"></path></svg>
                    </div>
                    <div class="content">
                        <h5 class="title">Lesson</h5>
                    </div>
                </div>
            </div>
            <ul class="shape-group">
                <li class="shape-1 sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                    <img class="rotateit" src="<?=URL_LINK?>public/assets/images/about/shape-37.png" alt="Shape">
                </li>
                <li class="shape-2 scene sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                    <img src="<?=URL_LINK?>public/assets/images/others/shape-41.png" alt="Shape" style="transform: translate3d(0px, 0px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                </li>
            </ul>
        </div>
    </div>

    <div class="edu-about-area photography-about-style section-gap-equal about-style-1 about-style-10 about-style-4 about-style-8 pt-5">
        <div class="container edublink-animated-shape">
            <div class="section-title section-center">
                <h2 class="title">About</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-lg-12 mx-auto sal-animate" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                <div class="about-content">
                        <p style="text-align: justify; font-size: 2rem">
                            For those looking for something special, the 220-hour accredited online master's TEFL certification is just what you need. This comprehensive program offers her 100% distance learning with dedicated educational support. This course is designed for those who would like to take an internationally accredited TEFL/TESOL course, but are limited by time or budget constraints and cannot attend a training center. The benefits of this course are:
                        </p>
                    </div>
                    <div class="about-content">
                        <ul class="features-list">
                            <li>you can take the course from anywhere in the world.</li>
                            <li>our online tuitions are very competitive.</li>
                        </ul>
                    </div>
                    <div class="about-content">
                        <p style="text-align: justify; font-size: 2rem">
                            This is an online TEFL/TESOL course, so no coursework or internship is required. However, you can access and watch his videos of his real EFL lessons. This program covers the same course content as the full-time program, including in-depth grammatical analysis and lesson planning. At the end of the course, you will have acquired the following skills:
                        </p>
                    </div>
                    <div class="about-content">
                        <ul class="features-list">
                            <li>Understand the qualities that make great teachers.</li>
                            <li>Gain knowledge about past and current EFL teaching methodologies.</li>
                            <li>Know how to effectively organize and manage an English class.</li>
                            <li>Create high-energy classes every day.</li>
                            <li>Acquire know-how of teaching different types of students.</li>
                            <li>How to make efficient use of technology in your class.</li>
                            <li>Partner with artificial intelligence in your English instruction.</li>
                            <li>Understand what is going on inside your English language learners.</li>
                            <li>Become an expert in language skill development.</li>
                            <li>Turn boring subjects into engaging classes.</li>
                            <li>How to correct errors in speech and writing.</li>
                            <li>Assessment strategies to achieve accuracy and fluency at the same time.</li>
                            <li>Understand how to design business courses and materials.</li>
                            <li>Learn how to conduct Business English Classes.</li>
                            <li>Understand the differences between the adult and the young learner.</li>
                        </ul>
                    </div>
                    <div class="about-content">
                        <p style="text-align: justify; font-size: 2rem">
                            Throughout the program, your personal tutor will monitor your progress and grade your assignments. We have mock tests to help you stay on track. Additionally, you are entitled to two 45-minute appointments for additional support if needed. Once all assignments are completed and submitted, your certificate will be sent to you via email or mail. Our courses include comprehensive career support services, including resume preparation, access to school lists and recruiter information, direct introductions to schools, and finding job openings as they arise. TANDEM has a presence in many countries in Asia, Europe, the Middle East, Africa, South America and North America, so we offer many opportunities for your teaching career.
                        </p>
                        <p style="text-align: justify; font-size: 2rem">
                            To enroll in this course or any course offered by us, applicants must meet the following prerequisites: proficiency in spoken and written English, a minimum education requirement of a high school diploma, and Be over 18 years old.
                        </p>
                    </div>
                </div>
            </div>
            <ul class="shape-group">
                <li class="shape-1 scene sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                    <img data-depth="2" src="http://127.0.0.1/tandem/public/assets/images/about/shape-13.png" alt="Shape" style="transform: translate3d(-37px, 17px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                </li>
                <li class="shape-2 sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                    <img src="http://127.0.0.1/tandem/public/assets/images/counterup/shape-02.png" alt="Shape">
                </li>
                <li class="shape-6 sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200" style="top: unset">
                    <img data-parallax="{&quot;x&quot;: 0, &quot;y&quot;: -70}" src="http://127.0.0.1/tandem/public/assets/images/itti/220-hour-master-tefl-tesol-certification.png" width="250px" height="250px" alt="About Image" style="transform:translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); -webkit-transform:translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); transform:translate3d(0px, -37.728px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); -webkit-transform:translate3d(0px, -37.728px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); ">
                </li>
            </ul>
        </div>
        <ul class="shape-group">
            <li class="shape-7 scene sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                <img data-depth="2" src="http://127.0.0.1/tandem/public/assets/images/about/shape-13.png" alt="Shape" style="transform: translate3d(-37px, 17px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
            </li>
            <li class="shape-8 sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                <span></span>
            </li>
        </ul>
    </div>

    <div class="edu-faq-area faq-style-1 faq-style-6">
        <div class="container">
            <div class="row g-5 row--45">
                <div class="col-lg-12">
                    <div class="edu-faq-content">
                        <div class="section-title section-left sal-animate" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                            <h2 class="title text-justify">
                                LOOK INSIDE OUR BEST ONLINE TESOL MASTER COURSE CURRICULUM
                            </h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                        </div>
                        <h3><code>Section 1: 120-Hour Standard Teacher Training</code></h3>
                        <div class="faq-accordion sal-animate row" id="faq-accordion" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                            <div class="accordion col-md-6">
                                <div class="accordion-item">
                                    <h5 class="accordion-header"><button class="accordion-button collapsed" type="button">Introduction</button></h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header"><button class="accordion-button collapsed" type="button">Unit 1: Teachers and Learners</button></h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header"><button class="accordion-button collapsed" type="button">Unit 2: The English Language</button></h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header"><button class="accordion-button collapsed" type="button">Unit 3: EFL Methodology – A Journey through History</button></h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header"><button class="accordion-button collapsed" type="button">Unit 4: Present Tenses</button></h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header"><button class="accordion-button collapsed" type="button">Unit 5: Successful Classroom Management</button></h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header"><button class="accordion-button collapsed" type="button">Unit 6: Past Tenses</button></h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header"><button class="accordion-button collapsed" type="button">Unit 7: Teaching New Language</button></h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header"><button class="accordion-button collapsed" type="button">Unit 8: Future Tenses</button></h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header"><button class="accordion-button collapsed" type="button">Unit 9: The Art of Lesson Design</button></h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header"><button class="accordion-button collapsed" type="button">Unit 10: Teaching & Technology – Making the Match</button></h5>
                                </div>
                            </div>
                            <div class="accordion col-md-6">
                                <div class="accordion-item">
                                    <h5 class="accordion-header"><button class="accordion-button collapsed" type="button">Unit 11: Partnering with Artificial Intelligence</button></h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header"><button class="accordion-button collapsed" type="button">Unit 12: Teaching Listening, Speaking, Reading & Writing</button></h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header"><button class="accordion-button collapsed" type="button">Unit 13: Teaching Pronunciation & Phonology</button></h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header"><button class="accordion-button collapsed" type="button">Unit 14: Course Books and Lesson Materials</button></h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header"><button class="accordion-button collapsed" type="button">Unit 15: Tradition & Innovation in Testing</button></h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header"><button class="accordion-button collapsed" type="button">Unit 16: Conditionals & Reported Speech</button></h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header"><button class="accordion-button collapsed" type="button">Unit 17: Equipment and Teaching Aids</button></h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header"><button class="accordion-button collapsed" type="button">Unit 18: Modals, Phrasal Verbs and Passive Voice</button></h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header"><button class="accordion-button collapsed" type="button">Unit 19: Teaching Special</button></h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header"><button class="accordion-button collapsed" type="button">Unit 20: Final lesson design task</button></h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header"><button class="accordion-button collapsed" type="button">Unit 21: Career Support</button></h5>
                                </div>
                            </div>
                        </div>

                        <h3 class="pt-5 mt-5"><code>Section 2: 50-Hour Teaching Business English</code></h3>
                        <div class="about-content">
                            <ul class="features-list">
                                <li><h5 class="text-warning">PART 1: Basic Principles in conducting business English classes.</h5></li>
                            </ul>
                        </div>
                        <div class="faq-accordion sal-animate row" id="faq-accordion" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                            <div class="accordion col-md-12">
                                <div class="accordion-item" style="margin-bottom: 30px;">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                        Unit 3: The four language acquisition skills and how they are applied to teaching Business English.
                                        </button>
                                    </h5>
                                </div>
                            </div>
                            <div class="accordion col-md-6">
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                        Unit 1: An introduction and overview of English for Specific Purposes (ESP), who your target students are and the process of teaching Business English.
                                        </button>
                                    </h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                        Unit 2: Methods and approaches to teaching Business English.
                                        </button>
                                    </h5>
                                </div>
                            </div>
                            <div class="accordion col-md-6">
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                        Unit 4: Case studies in which you will have to analyze materials that have already been developed.
                                        </button>
                                    </h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                        Unit 5: Evaluation and how to evaluate the progress of your students and the course.
                                        </button>
                                    </h5>
                                </div>
                            </div>
                            <div class="about-content">
                                <ul class="features-list">
                                    <li><h5 class="text-warning">PART 2: Basic Principles in conducting business English classes.</h5></li>
                                </ul>
                            </div>
                            <div class="faq-accordion sal-animate row" id="faq-accordion" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                            <div class="accordion col-md-6">
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                        Unit 6: An introduction and an overview on how to develop business materials.
                                        </button>
                                    </h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                        Unit 7: Adapting business materials.
                                        </button>
                                    </h5>
                                </div>
                            </div>
                            <div class="accordion col-md-6">
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                        Unit 8: Developing business materials.
                                        </button>
                                    </h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                        Unit 9: Developing business courses.
                                        </button>
                                    </h5>
                                </div>
                            </div>
                            <h3 class="pt-5 mt-5"><code>Section 3: 50-Hour Teaching Young Learners</code></h3>
                            <div class="accordion col-md-12">
                                <div class="accordion-item" style="margin-bottom: 30px;">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                        Unit 1: The Child as a Language Learner
                                        </button>
                                    </h5>
                                </div>
                            </div>
                            <div class="accordion col-md-6">
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                        Unit 2: Teaching Listening to Young Learners
                                        </button>
                                    </h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                        Quiz: Modules 1 & 2
                                        </button>
                                    </h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                        Unit 3: Teaching Speaking to Young Learners
                                        </button>
                                    </h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                        Unit 4: Teaching Reading to Young Learners
                                        </button>
                                    </h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                        Quiz: Modules 3 & 4
                                        </button>
                                    </h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                        Unit 5: Teaching Writing to Young Learners
                                        </button>
                                    </h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                        Unit 6: Teaching Vocabulary to Young Learners
                                        </button>
                                    </h5>
                                </div>
                            </div>
                            <div class="accordion col-md-6">
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                        Quiz: Modules 5 & 6
                                        </button>
                                    </h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                        Unit 7: Assessing Young Learners
                                        </button>
                                    </h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                        Unit 8: Working with Parents of Young Learners
                                        </button>
                                    </h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                        Quiz: Modules 7 & 8
                                        </button>
                                    </h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                        Unit 9: Key Issues in Teaching Young Learners
                                        </button>
                                    </h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                        Final Test
                                        </button>
                                    </h5>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button">
                                        Lesson Plan Assignment
                                        </button>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="video-area-5 gap-bottom-equal">
        <div class="container">
            <div class="row g-5 justify-content-center">
                <div class="col-lg-6 mx-auto">
                    <div class="video-gallery">
                        <div class="thumbnail">
                            <img src="<?=URL_LINK?>public/assets/images/bg-videos/chaima background tandem.png" alt="Thumb">
                            <a href="https://www.youtube.com/watch?v=NYOURzxRkSg?si=Szzwm3gDu8oCAKBf" class="video-play-btn video-popup-activation">
                                <i class="icon-18"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php require_once 'src/view/public/pages/inscription.php'; ?>

<?php require_once 'src/view/public/includes/footer.php'; ?>