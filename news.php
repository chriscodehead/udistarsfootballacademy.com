<?php
require_once('include.php');
$active2 = 'active';
$title = 'News | ' . $siteName;
$description = 'Udi Stars Football Academy is a premier Nigerian football academy dedicated to nurturing young talents and providing educational opportunities. Founded by Barr. Joseph Chukwudi Chime, we blend football training with academic support to empower underprivileged youths for global success.';
$keyword = 'football academy Nigeria, Udi Stars Football Academy, Nigerian football talent, youth football development, Enugu football academy, football training Nigeria, sports and education, professional football coaching, grassroots football Nigeria, football scholarships Nigeria.';
require_once('head.php'); ?>
<!doctype html>
<html lang="en">

<?php require_once('head.php'); ?>

<body>

  <?php require_once('header.php'); ?>

  <section class="sub-main-banner float-start w-100">

    <div class="sub-banner">
      <div class="container">
        <h1 class="text-center"> News </h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"> News </li>
          </ol>
        </nav>
      </div>
    </div>
  </section>

  <section class="body-part-total float-start w-100">

    <div class="our-news-div-main py-5">
      <div class="container">

        <div class="d-flex align-items-center justify-content-between">
          <h2 class="comon-heading"> Our News </h2>
          <div class="d-lg-flex align-items-center">
            <p class="me-3"> Showing 1-4 of 13 results </p>
          </div>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 gy-5 gx-md-5 gy-lg-0 gx-lg-5 mt-0">


          <div class="col mb-3">
            <a href="news-details.html" class="comon-blogs1">
              <figure>
                <img src="images/bg-mc.jpg" alt="bn" />
              </figure>
              <div class="news-items-del">
                <h5>Ireland qualification In 10 Racking</h5>
                <ul class="list-unstyled d-flex align-items-center my-2">
                  <li>
                    <i class="far fa-user"></i> Thomas Wills
                  </li>
                  <li>
                    <i class="far fa-clock"></i> 1 Day ago
                  </li>
                </ul>

                <p class="mt-2"> Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                  Lorem Ipsum has been the industry's </p>

                <h6 class="btn reda-btn mt-3"> Read more </h6>
              </div>

            </a>
          </div>



        </div>


        <div class="next-buuton-div d-flex flex-column flex-md-row justify-content-between align-items-center">
          <div class="left-page-number order-3 order-lg-1 d-flex align-items-center">
            Users per page


            <select class="form-select" aria-label="Default select example">
              <option selected="">23</option>
              <option value="1">22</option>
              <option value="2">20</option>
              <option value="3">10</option>
            </select>
          </div>

          <button type="text" class="btn new-btn order-1  order-lg-2"> Next page <i class="fas fa-angle-right"></i> </button>
          <div class="right-arrow-btn d-flex align-items-center order-2 my-4 my-lg-0 order-lg-3">

            <input type="text" class="form-control num-box" placeholder="23">
            <div class="arrow-buuton-div">
              <span class="me-2">of 1,761 </span>
              <button type="button" class="btn cm-arrow-2">
                <i class="fas fa-angle-left"></i>
              </button>
              <button type="button" class="btn ms-2 cm-arrow-2">
                <i class="fas fa-angle-right"></i>
              </button>
            </div>
          </div>
        </div>

      </div>
    </div>


  </section>


  <footer class="py-5 float-start w-100">

    <div class="container">
      <div class="row row-cols-1 row-cols-lg-3">
        <div class="col">
          <div class="comon-footer">
            <h5> Contact Info </h5>
            <p class="col-lg-10">We're a professional football club in Kolkata, India, founded in 1990.
              It is a long established fact.
            </p>
            <ul class="list-unstyled d-flex align-items-center mt-2">
              <li>
                <a href="#"> <i class="fab fa-facebook"></i> </a>
              </li>
              <li class="mx-2">
                <a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                    <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
                  </svg> </a>
              </li>
              <li>
                <a href="#"><i class="fab fa-instagram"></i> </a>
              </li>
            </ul>
          </div>
        </div>

        <div class="col">
          <div class="comon-footer">
            <h5> Resources </h5>
            <ul class="list-unstyled">
              <li>
                <a href="#"> Matches </a>
              </li>
              <li>
                <a href="#"> The Club </a>
              </li>
              <li>
                <a href="#"> Member </a>
              </li>
              <li>
                <a href="#"> News </a>
              </li>
              <li>
                <a href="#"> Players </a>
              </li>

              <li>
                <a href="#"> Media </a>
              </li>

              <li>
                <a href="#"> Shop </a>
              </li>

              <li>
                <a href="#"> Contact </a>
              </li>
            </ul>

          </div>
        </div>

        <div class="col">
          <div class="comon-footer">
            <h5>Newsletter</h5>
            <p> We'll send updates straight to your Mail. Let's Do stay connected!</p>
            <div class="d-flex mt-3 align-items-center">
              <input type="text" class="form-control" placeholder="Enter Email" />
              <button type="submit" class="btn scub-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-square-fill" viewBox="0 0 16 16">
                  <path d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM5.904 10.803 10 6.707v2.768a.5.5 0 0 0 1 0V5.5a.5.5 0 0 0-.5-.5H6.525a.5.5 0 1 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 .707.707z" />
                </svg>
              </button>
            </div>

          </div>
        </div>

      </div>
      <hr />
      <p class="text-center copy-t"> Copyright 2020 Soccer FC Club, All Right Reserved</p>
    </div>
  </footer>



  <!-- login Modal -->
  <div class="modal fade login-div-modal" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">

        </div>
        <div class="modal-body">

          <div id="login-td-div" class="com-div-md">
            <span class="text-center d-table m-auto user-icon"> <i class="fas fa-user-circle"></i> </span>
            <h5 class="text-center mb-3"> Sign In </h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
            <div class="login-modal-pn">

              <div class="cm-select-login mt-3">
                <div class="country-dp">

                  <input type="email" class="form-control" placeholder="Username Or Email" alt="pn">
                </div>
                <div class="phone-div">

                  <input type="password" class="form-control" placeholder="Password" alt="pn">
                </div>


              </div>



              <button class="btn continue-bn"> <i class="fas fa-lock"></i> SIGN IN </button>
            </div>

            <p class="text-center  mt-3">
              <a data-bs-toggle="modal" class="regster-bn" data-bs-target="#lostpsModal" data-bs-dismiss="modal"> Lost Password ? </a>
            </p>


            <p class="text-center  mt-3"> Do not have an account?
              <a data-bs-toggle="modal" class="regster-bn" data-bs-target="#registerModal" data-bs-dismiss="modal"> Register </a>
            </p>
          </div>


        </div>

      </div>
    </div>
  </div>


  <!-- register Modal -->

  <div class="modal fade login-div-modal" id="registerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">

        </div>
        <div class="modal-body">
          <div id="login-td-div" class="com-div-md">
            <span class="text-center d-table m-auto user-icon"> <i class="fas fa-user-circle"></i> </span>
            <h5 class="text-center mb-3"> Register </h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
            <div class="login-modal-pn">

              <div class="cm-select-login mt-3">
                <div class="country-dp">

                  <input type="text" class="form-control" placeholder="Full Name" alt="pn">
                </div>
                <div class="phone-div">

                  <input type="email" class="form-control" placeholder="Email or Phone Number" alt="pn">
                </div>
                <div class="phone-div">

                  <input type="password" class="form-control" placeholder="Create Password" alt="pn">
                </div>
                <div class="phone-div">

                  <input type="password" class="form-control" placeholder="Confirm Password" alt="pn">
                </div>

                <div class="forget2 mt-3 ml-3 d-flex justify-content-between">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1"> By clicking Register, you agree to our
                    Terms of Use
                    and
                    Cookie Policy</label>
                </div>

              </div>




              <button class="btn continue-bn"> Register </button>
            </div>

            <h6 class="text-center">
              or sign in with
            </h6>
            <ul class="list-unstyled socal-linka-div d-flex  align-content-center justify-content-center">
              <li>
                <a href="#" class="facebtn"> <i class="fab fa-facebook-f"></i> </a>
              </li>
              <li>
                <a href="#" class="twiiterbtn"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                    <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
                  </svg> </a>
              </li>
              <li>
                <a href="#" class="googlebtn"> <i class="fab fa-google-plus-g"></i> </a>
              </li>
              <li>
                <a href="#" class="instagbtn"> <i class="fab fa-instagram"></i> </a>
              </li>
            </ul>
            <p class="text-center  mt-3"> Do not have an account?
              <a data-bs-toggle="modal" class="regster-bn" data-bs-target="#loginModal" data-bs-dismiss="modal"> Login </a>
            </p>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- lost password -->

  <div class="modal fade login-div-modal" id="lostpsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
        </div>
        <div class="modal-body">
          <div id="login-td-div" class="com-div-md">
            <span class="text-center d-table m-auto user-icon"> <i class="fas fa-user-circle"></i> </span>
            <h5 class="text-center mb-3"> Forget Your Password? </h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
            <div class="login-modal-pn">
              <p> We'll email you a link to reset your password</p>
              <div class="cm-select-login mt-3">

                <div class="phone-div">

                  <input type="email" class="form-control" placeholder="Enter Your Email " alt="pn">
                </div>


              </div>



              <button class="btn continue-bn"> Send Me a password reset Link </button>
            </div>

          </div>
        </div>

      </div>
    </div>
  </div>



  <!--right silde-bar-->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRightmobile" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header py-0">
      <button type="button" class="close-menu mt-4" data-bs-dismiss="offcanvas" aria-label="Close">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
        </svg>
      </button>
    </div>
    <div class="offcanvas-body">
      <div class="head-contact d-none d-lg-block">
        <a href="index-2.html" class="logo-side">
          <img src="images/logo.png" alt="logo">
        </a>
        <p class="mt-4"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
          standard dummy text ever since the 1500s, when an unknown printer
          took a galley of type and scrambled it to make a type specimen book.
        </p>
        <div class="quick-link my-4">
          <ul>
            <li> <i class="fas fa-map-marker-alt"></i> <span> 89 Mounthoolie Lane, Sutton Bassett, UK </span> </li>
            <li> <i class="fab fa-whatsapp"></i> <span> 180-205-2560 </span> </li>
            <li> <i class="fas fa-envelope"></i> <span> example@gmail.com </span> </li>
          </ul>
        </div>
        <ul class="side-media">
          <li> <a href="#"> <i class="fab fa-facebook-f"></i> </a> </li>
          <li> <a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
              </svg> </a> </li>
          <li> <a href="#"> <i class="fab fa-google-plus-g"></i> </a> </li>
          <li> <a href="#"> <i class="fab fa-instagram"></i> </a> </li>
        </ul>
      </div>

      <div class="head-contact d-block d-lg-none">
        <a href="index-2.html" class="logo-side">
          <img src="images/logo.png" alt="logo">
        </a>

        <div class="mobile-menu-sec mt-3">
          <ul>
            <li class="active-m">
              <a href="matches.html"> Matches </a>
            </li>
            <li>
              <a href="about.html"> The Club </a>
            </li>

            <li class="active-m">
              <a href="schedule.html"> Schedule </a>
            </li>
            <li>
              <a href="news.html"> News </a>
            </li>
            <li>
              <a href="players.html"> Players </a>
            </li>
            <li>
              <a href="media.html"> Media </a>
            </li>
            <li>
              <a href="shop.html"> Shop </a>
            </li>
            <li>
              <a href="contact.html"> Contact </a>
            </li>
          </ul>
        </div>
        <div class="quick-link">
          <ul>
            <li> <i class="fab fa-whatsapp"></i> <span> 180-250-9625 </span> </li>
            <li> <i class="bi bi-envelope"></i> <span> example@gmail.com</span> </li>
          </ul>
        </div>
        <ul class="side-media">
          <li> <a href="#"> <i class="fab fa-facebook-f"></i> </a> </li>
          <li> <a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
              </svg> </a> </li>
          <li> <a href="#"> <i class="fab fa-google-plus-g"></i> </a> </li>
          <li> <a href="#"> <i class="fab fa-instagram"></i> </a> </li>
        </ul>
      </div>
    </div>
  </div>




  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="../../../unpkg.com/aos%402.3.0/dist/aos.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="../../../cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>

  <script>
    AOS.init({
      offset: 100,
      easing: 'ease',
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
          $activeRadio.next('input[class*="slide-radio"]').attr("checked", true);
        }
      }
    });
  </script>



</body>

<!-- Mirrored from oxentictemplates.in/templatemonster/soocer/news.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Jan 2025 03:08:55 GMT -->

</html>