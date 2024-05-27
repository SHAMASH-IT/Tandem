</main>
<!-- ======= Footer Start =======-->
<footer class="footer pt-5 bg-dark">
      <div class="container"> 
        <!-- copy rigth text-->
        <div class="copy-right">
          <div class="row py-3 mt-3 text-center text-md-start align-items-center">
            <div class="col-md-8 order-2 order-md-1 mt-2 mt-md-0"><span class="copy-right-txt">© 2023 Anoha Digital. All rights reserved</span></div>
            <div class="col-md-4 order-1 order-md-2 footer-socila-link">
              <div class="d-flex align-items-center justify-content-center justify-content-md-end">
                <!-- facebook logo--><a href="https://www.facebook.com/"> 
                  <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewbox="0 0 28 28">
                    <g transform="translate(-0.183 -0.183)">
                      <path d="M19,3.592A.591.591,0,0,0,18.41,3H15.455A5.638,5.638,0,0,0,9.546,8.32v3.191H6.591A.591.591,0,0,0,6,12.1v3.073a.591.591,0,0,0,.591.591H9.546v7.919a.591.591,0,0,0,.591.591h3.546a.591.591,0,0,0,.591-.591V15.765h3.1a.591.591,0,0,0,.579-.437l.851-3.073a.591.591,0,0,0-.567-.745H14.273V8.32a1.182,1.182,0,0,1,1.182-1.064H18.41A.591.591,0,0,0,19,6.665Z" transform="translate(1.091 0.545)"></path>
                    </g>
                  </svg></a>
                <!-- twitter logo--><a href="https://twitter.com/"> 
                  <svg class="mx-3" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewbox="0 0 28 28">
                    <path d="M8.926,22.666A12.915,12.915,0,0,0,22.273,9.833,9.438,9.438,0,0,0,24,6.519a.513.513,0,0,0-.723-.595,2.193,2.193,0,0,1-2.52-.443,4.538,4.538,0,0,0-6.51-.2A4.818,4.818,0,0,0,12.9,9.833C9,10.066,6.313,8.211,4.166,5.668a.5.5,0,0,0-.875.28A11.293,11.293,0,0,0,8.658,17.673a7.852,7.852,0,0,1-5.215,2.66.525.525,0,0,0-.163.98,12.833,12.833,0,0,0,5.647,1.353" transform="translate(0.501 0.667)"></path>
                  </svg></a>
                <!-- gmial logo--><a href="https://mail.google.com/mail/"> 
                  <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewbox="0 0 28 28">
                    <path d="M20.084,16a6.428,6.428,0,0,1-5.25,4.585,7.175,7.175,0,0,1-8.167-6.358,7,7,0,0,1,7-7.56,7.14,7.14,0,0,1,2.648.513.583.583,0,0,0,.747-.245l1.68-3.092a.607.607,0,0,0-.268-.817A11.667,11.667,0,0,0,2,14.007,11.807,11.807,0,0,0,13.166,25.335a11.667,11.667,0,0,0,12.168-11.06V11.942a.6.6,0,0,0-.583-.583h-10.5a.583.583,0,0,0-.583.583v3.5a.583.583,0,0,0,.583.583h5.833" transform="translate(0.333 0.332)"></path>
                  </svg></a>
                <!-- linkedin logo--><a href="https://www.linkedin.com/"> 
                  <svg class="ms-3" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewbox="0 0 28 28">
                    <path d="M16.125,8.4A6.8,6.8,0,0,0,9.3,15.19v6.86a1.05,1.05,0,0,0,1.05,1.05H12.8a1.05,1.05,0,0,0,1.05-1.05V15.19a2.263,2.263,0,0,1,2.508-2.252A2.333,2.333,0,0,1,18.4,15.272V22.05a1.05,1.05,0,0,0,1.05,1.05H21.9a1.05,1.05,0,0,0,1.05-1.05V15.19A6.8,6.8,0,0,0,16.125,8.4Z" transform="translate(1.55 1.4)"></path>
                    <rect width="5.25" height="13.65" rx="0.9" transform="translate(3.5 10.85)"></rect>
                    <circle cx="2.625" cy="2.625" r="2.625" transform="translate(3.5 3.5)"></circle>
                  </svg></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- ******* Footer End *******-->
    <!-- header-footer script-->
    <script src="<?=URL?><?=ASSETS_DIR?>js/header-footer.js" defer> </script>
    <!-- bootstrap script-->
    <script src="<?=URL?><?=ASSETS_DIR?>vendor/bootstrap/bootstrap.bundle.min.js" defer></script>
    <!-- jquery -->
    <script src="<?=URL?><?=ASSETS_DIR?>vendor/jquery-3.6.0.js" defer> </script>
    <!-- slick js-->
    <script src="<?=URL?><?=ASSETS_DIR?>vendor/slick/slick.js" defer> </script>
    <!-- course card heart js-->
    <script src="<?=URL?><?=ASSETS_DIR?>js/course-card.js" defer> </script>
    <!-- crd slider sec js-->
    <script src="<?=URL?><?=ASSETS_DIR?>js/crd-slider-sec.js" defer> </script>
    <!-- testimonial sec js-->
    <script src="<?=URL?><?=ASSETS_DIR?>js/testimonial.js" defer> </script>
    <!-- custom slick btns sec js-->
    <script src="<?=URL?><?=ASSETS_DIR?>js/custom-slick-btn.js" defer> </script>
    <!-- custom slick btns sec js-->
    <script src="<?=URL?><?=ASSETS_DIR?>js/partner-slider.js" defer> </script>
    <?php echo $script ?? ''; ?>
  </body>
</html>
<?php exit(); ?>