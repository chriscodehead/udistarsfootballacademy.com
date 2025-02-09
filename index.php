<?php
require_once('include.php');
$active1 = 'active';
$title = 'Welcome to ' . $siteName;
$description = 'Udi Stars Football Academy is a premier Nigerian football academy dedicated to nurturing young talents and providing educational opportunities. Founded by Barr. Joseph Chukwudi Chime, we blend football training with academic support to empower underprivileged youths for global success.';
$keyword = 'football academy Nigeria, Udi Stars Football Academy, Nigerian football talent, youth football development, Enugu football academy, football training Nigeria, sports and education, professional football coaching, grassroots football Nigeria, football scholarships Nigeria.'; ?>
<!DOCTYPE html>
<html lang="en">

<?php require_once('head.php'); ?>

<body>
  <?php require_once('header.php'); ?>

  <section class="banner float-start w-100">
    <div class="container">

      <div class="banner-part">
        <div class="css-slider-wrapper">
          <input
            type="radio"
            name="slider"
            class="slide-radio1"
            checked
            id="slider_1" />
          <input
            type="radio"
            name="slider"
            class="slide-radio2"
            id="slider_2" />
          <input
            type="radio"
            name="slider"
            class="slide-radio3"
            id="slider_3" />

          <div class="slider-pagination">
            <label for="slider_1" class="page1"> </label>
            <label for="slider_2" class="page2"> </label>
            <label for="slider_3" class="page3"> </label>
          </div>

          <div class="slider slide-1">
            <div class="slider-content">
              <h3>Welcome To <?php print $siteName; ?></h3>
              <h2>
                Unlocking Talent,
                <span class="d-block"> Transforming Lives </span>
              </h2>
              <p>
                At Udi Stars Football Academy, we nurture young football talents and provide them with educational opportunities. Join us in shaping future champions!
              </p>
              <a href="about"><button type="button" class="buy-now-btn" name="button">
                  About Club
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-arrow-right"
                    viewBox="0 0 16 16">
                    <path
                      fill-rule="evenodd"
                      d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                  </svg>
                </button></a>
            </div>
            <div class="number-pagination">
              <span>1</span>
            </div>
          </div>

          <div class="slider slide-2">
            <div class="slider-content">
              <h2>
                World-Class
                <span class="d-block"> Football Training</span>
              </h2>
              <p>
                Our expert coaches and structured training programs prepare young athletes for professional football careers both locally and internationally.
              </p>
              <a href="about"><button type="button" class="buy-now-btn" name="button">
                  Abount Club
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-arrow-right"
                    viewBox="0 0 16 16">
                    <path
                      fill-rule="evenodd"
                      d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                  </svg>
                </button></a>
            </div>
            <div class="number-pagination">
              <span>2</span>
            </div>
          </div>

          <div class="slider slide-3">
            <div class="slider-content">
              <h2>
                Join the <?php print $siteName; ?> Family <span class="d-block"> </span>
              </h2>
              <p>
                Ticket prices for the international challenge match between FC
                United and Spain have been confirmed for October's encounter.
              </p>
              <a href="about"><button type="button" class="buy-now-btn" name="button">
                  About Club
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-arrow-right"
                    viewBox="0 0 16 16">
                    <path
                      fill-rule="evenodd"
                      d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                  </svg>
                </button></a>
            </div>
            <div class="number-pagination">
              <span>3</span>
            </div>
          </div>

        </div>
      </div>

      <div style="display: none;" class="next-match-banner">
        <a class="top-next-mc text-center">
          <h5 class="mn-mc-titel">Next Match</h5>
          <hr />
          <h4>2022-2023 UEFA Champions League</h4>
          <div class="d-flex align-items-center justify-content-center mt-2">
            <figure>
              <img src="images/clubs-logo1.png" alt="cl1" />
            </figure>
            <div class="mc-details-top text-center">
              <p class="time">19:20pm</p>
              <h5 class="date">24/ 11/ 2022</h5>
              <p class="location-mc">GD Stadium, London</p>
            </div>

            <figure>
              <img src="images/clubs-lgo2.png" alt="cl2" />
            </figure>
          </div>
        </a>

        <a class="top-mc-starts mt-4">
          <h5 class="mn-mc-titel text-center">2022 Premier League Starts</h5>
          <hr />

          <ul
            class="list-unstyled d-flex flex-column justify-content-center w-100">
            <li
              class="d-flex align-items-center justify-content-between w-100">
              <span class="ct-2"> <i class="far fa-futbol"></i> Goals </span>
              <span>12 </span>
            </li>

            <li class="d-flex align-items-center justify-content-between">
              <span class="ct-2">
                <i class="fas fa-mitten"></i> Assists
              </span>
              <span>54 </span>
            </li>

            <li class="d-flex align-items-center justify-content-between">
              <span class="ct-2">
                <i class="fas fa-running"></i> Apperarences
              </span>
              <span>34 </span>
            </li>
          </ul>
        </a>
      </div>

    </div>
  </section>

  <section class="body-part-total float-start w-100">
    <div class="latest-news-div">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <h2 class="py-3">Latest News</h2>
          </div>
          <div class="col-lg-9">
            <div class="latest-news owl-carousel owl-theme mt-3 py-3">
              <a href="news" class="comon-news-links">
                <i class="far fa-dot-circle"></i> <?php print $siteName; ?> News Updates
              </a>
              <a href="news" class="comon-news-links">
                <i class="far fa-dot-circle"></i> Live Football Trends
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="about-page-main comon-sub-page-main">
      <div class="about-club-top">
        <div class="container">
          <div class="row row-cols-1 row-cols-lg-2 g-lg-5">
            <div class="col position-relative">
              <figure class="big-img">
                <img src="img/udi-stars-football-academy-7.jpg" alt="pic">
              </figure>
              <figure class="small-img">
                <img src="img/udi-stars-football-academy-8.jpg" alt="pic2">
              </figure>
            </div>
            <div class="col">
              <h5 class="samll-sub mb-1 mt-0"> Our Story </h5>
              <h2 class="comon-heading m-0"> About <?php print $siteName; ?> </h2>
              <p class="mt-3"> Udi Stars Football Academy is a Nigerian football academy established on December 2, 2021, by Barr. Joseph Chukwudi Chime. The academy was founded as a charitable initiative aimed at supporting underprivileged youths with exceptional football talent, combining sports development with educational opportunities.
              </p>

              <p class="mt-3">
                <?php print $siteName; ?> is more than just a football training center—it is a life-changing opportunity for young, underprivileged athletes with exceptional talent. Founded on December 2, 2021, by Barr. Joseph Chukwudi Chime, our academy blends football development with educational support, ensuring our players have a solid foundation both on and off the pitch.

              </p>

            </div>
          </div>
        </div>
      </div>
    </div>


    <div style="display: none;" class="result-div1 mt-5">
      <div class="container">
        <div class="row gx-lg-5">
          <div class="col-lg-7 col-xl-8">
            <div class="d-flex justify-content-between align-items-center">
              <h2 class="comon-heading m-0">Fixtures & Results</h2>
              <a href="#" class="btn all-cm-btn">
                All Matches
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  fill="currentColor"
                  class="bi bi-arrow-right"
                  viewBox="0 0 16 16">
                  <path
                    fill-rule="evenodd"
                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                </svg>
              </a>
            </div>
            <div
              class="row row-cols-1 row-cols-lg-2 gy-5 g-lg-4 mt-0 mt-lg-0">
              <div class="col">
                <a href="#" class="items-matchs">
                  <figure class="m-0 bg-mc-1">
                    <img src="images/bg-mc.jpg" alt="bg-ms" />
                  </figure>
                  <div class="matches-div-home">
                    <h5>
                      Central Olympic Stadium
                      <span class="d-block"> April 02, 2019 </span>
                    </h5>
                    <div
                      class="d-flex align-items-center justify-content-between">
                      <figure>
                        <img src="images/1.png" alt="cl2" />
                        <figcaption>Istanbul</figcaption>
                      </figure>
                      <h4>VS</h4>
                      <figure>
                        <img src="images/8.png" alt="cl2" />
                        <figcaption>Italy FC.</figcaption>
                      </figure>
                    </div>
                  </div>
                </a>
              </div>

              <div class="col">
                <a href="#" class="items-matchs">
                  <figure class="m-0 bg-mc-1">
                    <img src="images/bg-ms2.jpg" alt="bg-ms" />
                  </figure>
                  <div class="matches-div-home">
                    <h5>
                      Central Olympic Stadium
                      <span class="d-block"> April 02, 2019 </span>
                    </h5>
                    <div
                      class="d-flex align-items-center justify-content-between">
                      <figure>
                        <img src="images/9.png" alt="cl2" />
                        <figcaption>Rayal FC</figcaption>
                      </figure>
                      <h4>VS</h4>
                      <figure>
                        <img src="images/8.png" alt="cl2" />
                        <figcaption>Italy FC.</figcaption>
                      </figure>
                    </div>
                  </div>
                </a>
              </div>

              <div class="col">
                <a href="#" class="items-matchs">
                  <figure class="m-0 bg-mc-1">
                    <img src="images/bg-mc3.jpg" alt="bg-ms" />
                  </figure>
                  <div class="matches-div-home">
                    <h5>
                      Central Olympic Stadium
                      <span class="d-block"> April 02, 2019 </span>
                    </h5>
                    <div
                      class="d-flex align-items-center justify-content-between">
                      <figure>
                        <img src="images/3.png" alt="cl2" />
                        <figcaption>DC Unfo.</figcaption>
                      </figure>
                      <h4>VS</h4>
                      <figure>
                        <img src="images/9.png" alt="cl2" />
                        <figcaption>Italy FC.</figcaption>
                      </figure>
                    </div>
                  </div>
                </a>
              </div>

              <div class="col">
                <a href="#" class="items-matchs">
                  <figure class="m-0 bg-mc-1">
                    <img src="images/bg-mc.jpg" alt="bg-ms" />
                  </figure>
                  <div class="matches-div-home">
                    <h5>
                      Central Olympic Stadium
                      <span class="d-block"> April 02, 2019 </span>
                    </h5>
                    <div
                      class="d-flex align-items-center justify-content-between">
                      <figure>
                        <img src="images/1.png" alt="cl2" />
                        <figcaption>Istanbul</figcaption>
                      </figure>
                      <h4>VS</h4>
                      <figure>
                        <img src="images/8.png" alt="cl2" />
                        <figcaption>Italy FC.</figcaption>
                      </figure>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-5 col-xl-4">
            <div class="latest-result-div mt-5 mt-lg-0">
              <div class="d-flex align-items-center justify-content-between">
                <h2 class="comon-heading m-0">Latest Results</h2>
                <a href="#" class="btn viw-btn">
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
                </a>
              </div>

              <div class="ltest-divbm mt-4">
                <a href="#" class="comon-items-div">
                  <div
                    class="d-flex justify-content-between align-items-center">
                    <div class="cm-culb">
                      <figure class="d-flex align-items-center">
                        <figcaption class="me-2">Italy FC.</figcaption>
                        <img src="images/fc-1.jpg" alt="cl2" />
                      </figure>
                    </div>
                    <h5 class="m-0">1 - 2</h5>
                    <div class="cm-culb">
                      <figure class="d-flex align-items-center">
                        <figcaption class="me-2">Italy FC.</figcaption>
                        <img src="images/fc-2.jpg" alt="cl2" />
                      </figure>
                    </div>
                  </div>
                  <p class="text-center">
                    <i class="fas fa-map-marker-alt"></i> Nov 2, 2022/ SGM
                    Stadium
                  </p>
                </a>

                <a href="#" class="comon-items-div">
                  <div
                    class="d-flex justify-content-between align-items-center">
                    <div class="cm-culb">
                      <figure class="d-flex align-items-center">
                        <figcaption class="me-2">Italy FC.</figcaption>
                        <img src="images/fc-1.jpg" alt="cl2" />
                      </figure>
                    </div>
                    <h5 class="m-0">2 - 0</h5>
                    <div class="cm-culb">
                      <figure class="d-flex align-items-center">
                        <figcaption class="me-2">Italy FC.</figcaption>
                        <img src="images/fc-2.jpg" alt="cl2" />
                      </figure>
                    </div>
                  </div>
                  <p class="text-center">
                    <i class="fas fa-map-marker-alt"></i> Nov 2, 2022/ SGM
                    Stadium
                  </p>
                </a>

                <a href="#" class="comon-items-div">
                  <div
                    class="d-flex justify-content-between align-items-center">
                    <div class="cm-culb">
                      <figure class="d-flex align-items-center">
                        <figcaption class="me-2">Italy FC.</figcaption>
                        <img src="images/fc-1.jpg" alt="cl2" />
                      </figure>
                    </div>
                    <h5 class="m-0">1 - 0</h5>
                    <div class="cm-culb">
                      <figure class="d-flex align-items-center">
                        <figcaption class="me-2">Italy FC.</figcaption>
                        <img src="images/fc-2.jpg" alt="cl2" />
                      </figure>
                    </div>
                  </div>
                  <p class="text-center">
                    <i class="fas fa-map-marker-alt"></i> Nov 2, 2022/ SGM
                    Stadium
                  </p>
                </a>

                <a href="#" class="comon-items-div">
                  <div
                    class="d-flex justify-content-between align-items-center">
                    <div class="cm-culb">
                      <figure class="d-flex align-items-center">
                        <figcaption class="me-2">Italy FC.</figcaption>
                        <img src="images/fc-1.jpg" alt="cl2" />
                      </figure>
                    </div>
                    <h5 class="m-0">1 - 0</h5>
                    <div class="cm-culb">
                      <figure class="d-flex align-items-center">
                        <figcaption class="me-2">Italy FC.</figcaption>
                        <img src="images/fc-2.jpg" alt="cl2" />
                      </figure>
                    </div>
                  </div>
                  <p class="text-center">
                    <i class="fas fa-map-marker-alt"></i> Nov 2, 2022/ SGM
                    Stadium
                  </p>
                </a>

                <a href="#" class="comon-items-div">
                  <div
                    class="d-flex justify-content-between align-items-center">
                    <div class="cm-culb">
                      <figure class="d-flex align-items-center">
                        <figcaption class="me-2">Italy FC.</figcaption>
                        <img src="images/fc-1.jpg" alt="cl2" />
                      </figure>
                    </div>
                    <h5 class="m-0">1 - 0</h5>
                    <div class="cm-culb">
                      <figure class="d-flex align-items-center">
                        <figcaption class="me-2">Italy FC.</figcaption>
                        <img src="images/fc-2.jpg" alt="cl2" />
                      </figure>
                    </div>
                  </div>
                  <p class="text-center">
                    <i class="fas fa-map-marker-alt"></i> Nov 2, 2022/ SGM
                    Stadium
                  </p>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="home-about-part">
      <div class="container">
        <h5>Our History</h5>

        <p class="col-lg-7 my-4">
          The academy’s founder and chairman, Barr. Joseph Chukwudi Chime, has been a lifelong football enthusiast and player. His passion for the sport and his dedication to giving back to his community inspired the creation of Udi Stars Football Academy.
        </p>
        <p class="col-lg-7 my-4">
          Before founding the academy, Barr. Chime sponsored football competitions in his hometown, Obinagu, located in Udi Local Government Area, Enugu State, for over 15 years. However, he later shifted his focus to educational development by establishing the Joe & Onyi Foundation, which provides scholarships and educational support for underprivileged children.
        </p>
        <a href="about" class="btn all-cm-btn">
          Learn More
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="16"
            height="16"
            fill="currentColor"
            class="bi bi-arrow-right"
            viewBox="0 0 16 16">
            <path
              fill-rule="evenodd"
              d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
          </svg>
        </a>
      </div>
    </div>

    <div class="team-div-1">
      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <h2 class="comon-heading m-0">Players Squad</h2>
          <a href="players" class="btn all-cm-btn">
            Show All
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              fill="currentColor"
              class="bi bi-arrow-right"
              viewBox="0 0 16 16">
              <path
                fill-rule="evenodd"
                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
            </svg>
          </a>
        </div>

        <div class="team-slid owl-carousel owl-theme mt-5">

          <?php $sql = query_sql("SELECT * FROM $team_tb WHERE (`category`='Midfinder' || `category`='GoalKeeper' || `category`='Defender' || `category`='Forward') ORDER BY id ASC");
          if (mysqli_num_rows($sql) > 0) {
            $c = 0;
            while ($row = mysqli_fetch_assoc($sql)) { ?>
              <a href="players-details?id=<?php print $row['user_id']; ?>" class="comon-plyaers">
                <figure>
                  <img src="photo/<?php print $row['picture']; ?>" alt="<?php print $row['name']; ?>" />
                </figure>
                <div
                  class="name d-flex align-items-center justify-content-between">
                  <h5>
                    <?php print $row['name']; ?>
                    <span class="d-block"> <?php print $row['category']; ?></span>
                  </h5>
                  <span class="num"> <?php print $row['position']; ?> </span>
                </div>
              </a>
            <?php $c++;
            }
          } else { ?>
            <h4 style="padding: 20px;">No data found!</h4>
          <?php } ?>


        </div>
      </div>
    </div>

    <div class="join-us-div">
      <div class="container">
        <div class="d-lg-flex justify-content-between">
          <h1 class="comon-heading m-0">Become part of a Great Team</h1>
          <a href="contact" class="btn all-cm-btn mt-4 mt-lg-0">
            Join Us
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              fill="currentColor"
              class="bi bi-arrow-up-short"
              viewBox="0 0 16 16">
              <path
                fill-rule="evenodd"
                d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z" />
            </svg>
          </a>
        </div>
      </div>
    </div>

    <div class="newd-blogs-div py-5">
      <div class="container">

        <div class="d-flex align-items-center justify-content-between">
          <h2 class="comon-heading m-0">News & Media Gallery</h2>

          <a href="news" class="btn all-cm-btn">
            View All
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              fill="currentColor"
              class="bi bi-arrow-right"
              viewBox="0 0 16 16">
              <path
                fill-rule="evenodd"
                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
            </svg>
          </a>
        </div>

        <div class="row g-lg-5 mt-5 mt-lg-0">
          <div class="col-lg-8">

            <?php $sql = query_sql("SELECT * FROM $news ORDER BY id DESC LIMIT 3");
            if (mysqli_num_rows($sql) > 0) {
              $c = 0;
              while ($row = mysqli_fetch_assoc($sql)) { ?>
                <a href="news-details?id=<?php print $row['id']; ?>" class="left-cm-blogs">
                  <figure class="m-0">
                    <img src="<?php print 'photo/' . $row['post_image']; ?>" alt="<?php print $row['title']; ?>" />
                  </figure>
                  <div class="blogs-ps-right ps-lg-4 pt-lg-4">
                    <h5><?php print $row['title']; ?></h5>
                    <ul class="list-unstyled d-flex align-items-center mt-2">
                      <li><i class="fas fa-calendar-alt"></i> <?php print $row['date_post']; ?></li>

                    </ul>
                    <p class="mt-2">
                      <?php print $bassic->reduceTextLength($row['news'], 150);
                      ?>
                    </p>
                    <h4 class="btn mt-4">
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
                    </h4>
                  </div>
                </a>
              <?php $c++;
              }
            } else { ?>
              <h4 style="padding: 20px;">No updates found!</h4>
            <?php } ?>


          </div>

          <div class="col-lg-4 right-home-blogs">

            <?php $sql = query_sql("SELECT * FROM $news ORDER BY RAND() LIMIT 3");
            if (mysqli_num_rows($sql) > 0) {
              $c = 0;
              while ($row = mysqli_fetch_assoc($sql)) { ?>
                <a href="news-details?id=<?php print $row['id']; ?>" class="left-cm-blogs">
                  <figure class="m-0">
                    <img src="<?php print 'photo/' . $row['post_image']; ?>" alt="<?php print $row['title']; ?>" />
                  </figure>
                  <div class="blogs-ps-right ps-lg-4 pt-lg-1">
                    <h5 class="mt-0"><?php print $row['title']; ?></h5>
                    <ul class="list-unstyled d-flex align-items-center mt-2">
                      <li><i class="fas fa-calendar-alt"></i> <?php print $row['date_post']; ?></li>
                    </ul>
                  </div>
                </a>
              <?php $c++;
              }
            } else { ?>
              <h4 style="padding: 20px;">No updates found!</h4>
            <?php } ?>


          </div>
        </div>
      </div>
    </div>
  </section>

  <?php require_once('footer.php'); ?>
</body>

</html>