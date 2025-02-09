 <footer class="py-5 float-start w-100">
   <div class="container">
     <div class="row row-cols-1 row-cols-lg-3">
       <div class="col">
         <div class="comon-footer">
           <h5>Contact Info</h5>
           <p class="col-lg-10">
             Udi Stars Football Academy is a Nigerian football academy established on December 2, 2021, by Barr. Joseph Chukwudi Chime.
           </p>
           <ul class="list-unstyled d-flex align-items-center mt-2">
             <li>
               <a href="#"> <i class="fab fa-facebook"></i> </a>
             </li>
             <li class="mx-2">
               <a href="#">
                 <svg
                   xmlns="http://www.w3.org/2000/svg"
                   width="16"
                   height="16"
                   fill="currentColor"
                   class="bi bi-twitter-x"
                   viewBox="0 0 16 16">
                   <path
                     d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
                 </svg></a>
             </li>
             <li>
               <a href="#"><i class="fab fa-instagram"></i> </a>
             </li>
           </ul>
         </div>
       </div>

       <div class="col">
         <div class="comon-footer">
           <h5>Resources</h5>
           <ul class="list-unstyled">
             <li>
               <a href="./"> Home </a>
             </li>
             <li>
               <a href="about"> The Club </a>
             </li>
             <li>
               <a href="news"> News </a>
             </li>
             <li>
               <a href="players"> Players </a>
             </li>
             <li>
               <a href="gallery">Gallery</a>
             </li>
             <li>
               <a href="contact"> Contact </a>
             </li>
           </ul>
         </div>
       </div>

       <div class="col">
         <div class="comon-footer">
           <h5>Newsletter</h5>
           <p>
             We'll send updates straight to your Mail. Let's Do stay
             connected!
           </p>
           <div class="d-flex mt-3 align-items-center">
             <input
               type="text"
               class="form-control" id="subcribe_email" name="subcribe_email"
               placeholder="Enter Email" />
             <button onclick="contatMail();" type="button" class="btn scub-btn">
               <svg
                 xmlns="http://www.w3.org/2000/svg"
                 width="16"
                 height="16"
                 fill="currentColor"
                 class="bi bi-arrow-up-right-square-fill"
                 viewBox="0 0 16 16">
                 <path
                   d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM5.904 10.803 10 6.707v2.768a.5.5 0 0 0 1 0V5.5a.5.5 0 0 0-.5-.5H6.525a.5.5 0 1 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 .707.707z" />
               </svg>
             </button>
           </div>
         </div>
       </div>
     </div>
     <hr />
     <p class="text-center copy-t">
       Copyright <?php print $siteYear; ?> <?php print $siteName; ?>, All Right Reserved.
     </p>
   </div>
 </footer>


 <!--right silde-bar-->
 <div
   class="offcanvas offcanvas-end"
   tabindex="-1"
   id="offcanvasRightmobile"
   aria-labelledby="offcanvasRightLabel">
   <div class="offcanvas-header py-0">
     <button
       type="button"
       class="close-menu mt-4"
       data-bs-dismiss="offcanvas"
       aria-label="Close">
       <svg
         xmlns="http://www.w3.org/2000/svg"
         width="16"
         height="16"
         fill="currentColor"
         class="bi bi-x-circle-fill"
         viewBox="0 0 16 16">
         <path
           d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
       </svg>
     </button>
   </div>
   <div class="offcanvas-body">
     <div class="head-contact d-none d-lg-block">
       <a href="./" class="logo-side">
         <img width="120px" src="img/logo.png" alt="logo" />
       </a>
       <p class="mt-4">
         Udi Stars Football Academy is more than just a football training center—it is a life-changing opportunity for young, underprivileged athletes with exceptional talent.
       </p>
       <div class="quick-link my-4">
         <ul>
           <li>
             <i class="fas fa-map-marker-alt"></i>
             <span> <?php print $siteAddress; ?> </span>
           </li>
           <li>
             <i class="fab fa-whatsapp"></i> <span> <?php print $sitePhone; ?> </span>
           </li>
           <li>
             <i class="fas fa-envelope"></i> <span style="font-size: 12px;"> <?php print $siteEmail; ?> </span>
           </li>
         </ul>
       </div>
       <ul class="side-media">
         <li>
           <a href="<?php print $siteFacebook; ?>"> <i class="fab fa-facebook-f"></i> </a>
         </li>
         <li>
           <a href="<?php print $siteTwitter; ?>">
             <svg
               xmlns="http://www.w3.org/2000/svg"
               width="16"
               height="16"
               fill="currentColor"
               class="bi bi-twitter-x"
               viewBox="0 0 16 16">
               <path
                 d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
             </svg></a>
         </li>
         <li>
           <a href="<?php print $siteInstagram; ?>"> <i class="fab fa-instagram"></i> </a>
         </li>
       </ul>
     </div>

     <div class="head-contact d-block d-lg-none">
       <a href="./" class="logo-side">
         <img src="img/logo.png" alt="logo" />
       </a>

       <div class="mobile-menu-sec mt-3">
         <ul>
           <li>
             <a href="about"> The Club </a>
           </li>

           <li>
             <a href="news"> News </a>
           </li>
           <li>
             <a href="players"> Players </a>
           </li>
           <li>
             <a href="contact"> Contact </a>
           </li>
         </ul>
       </div>
       <div class="quick-link">
         <ul>
           <li>
             <i class="fab fa-whatsapp"></i> <span> <?php print $sitePhone; ?> </span>
           </li>
           <li>
             <i class="bi bi-envelope"></i> <span> <?php print $siteEmail; ?></span>
           </li>
         </ul>
       </div>

     </div>

   </div>
 </div>

 <script src="js/bootstrap.bundle.min.js"></script>
 <script src="js/jquery.min.js"></script>
 <script src="js/custom.js"></script>
 <script src="unpkg.com/aos%402.3.0/dist/aos.js"></script>
 <script src="js/owl.carousel.min.js"></script>
 <script src="cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
 <script src="js/jquery.fancybox.min.js"></script>

 <script>
   AOS.init({
     offset: 100,
     easing: "ease",
     delay: 0,
     once: true,
     duration: 800,
   });
 </script>

 <script>
   $(document).ready(function() {
     var TIMEOUT = 6000;

     var interval = setInterval(handleNext, TIMEOUT);

     function handleNext() {
       var $radios = $('input[class*="slide-radio"]');
       var $activeRadio = $('input[class*="slide-radio"]:checked');

       var currentIndex = $activeRadio.index();
       var radiosLength = $radios.length;

       $radios.attr("checked", false);

       if (currentIndex >= radiosLength - 1) {
         $radios.first().attr("checked", true);
       } else {
         $activeRadio
           .next('input[class*="slide-radio"]')
           .attr("checked", true);
       }
     }
   });
 </script>
 &nbsp;
 <script>
   function contatMail() {
     var hr = new XMLHttpRequest();
     var url = "reg_process.php";
     var subcribe_email = document.getElementById('subcribe_email').value;
     var vars = "subcribe_email=" + subcribe_email;

     if (subcribe_email == "") {
       sweetUnpre("Please enter a valid email address!");
     } else {
       var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
       if (!emailReg.test(subcribe_email)) {
         sweetUnpre('Please use a valid email address!');
       } else {
         hr.open("POST", url, true);
         hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         hr.onreadystatechange = function() {
           if (hr.readyState == 4 && hr.status == 200) {
             var return_data = hr.responseText;
             sweetUnpre(return_data);
             document.getElementById('subcribe_email').value = "";
           }
         }
         hr.send(vars);
       }
       sweetUnpre('processing...');
     }
   }
 </script>