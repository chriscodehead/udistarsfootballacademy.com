<!doctype html>
<html lang="en">

<?php
require_once('include.php');
$active2 = 'active';
$title = 'News Details | ' . $siteName;
$description = 'Udi Stars Football Academy is a premier Nigerian football academy dedicated to nurturing young talents and providing educational opportunities. Founded by Barr. Joseph Chukwudi Chime, we blend football training with academic support to empower underprivileged youths for global success.';
$keyword = 'football academy Nigeria, Udi Stars Football Academy, Nigerian football talent, youth football development, Enugu football academy, football training Nigeria, sports and education, professional football coaching, grassroots football Nigeria, football scholarships Nigeria.';

if (isset($_GET['id']) && !empty($_GET['id'])) {
  $user_id = $_GET['id'];
} else {
  header("location:blog");
}

$sql = query_sql("SELECT * FROM $news WHERE id= '" . $user_id . "' LIMIT 1");
$row = mysqli_fetch_assoc($sql);
require_once('head.php'); ?>

<body>

  <?php require_once('header.php'); ?>

  <section class="sub-main-banner float-start w-100">


    <div class="sub-banner">
      <div class="container">

        <h1 class="text-center"> News Details </h1>


        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"> News Details </li>
          </ol>
        </nav>
      </div>
    </div>
  </section>

  <section class="body-part-total float-start w-100">

    <div class="blog-details-page comon-services-pge py-5">

      <div class="container">
        <div class="row gx-lg-5">
          <div class="col-lg-7 col-xl-8">
            <div class="blog-post">
              <figure>
                <img src="<?php print 'photo/' . $row['post_image']; ?>" alt="<?php print $row['title']; ?>" />
              </figure>
              <div class="d-lg-flex justify-content-between share-div">
                <ul class="list-unstyled d-flex">
                  <li> <i class="far fa-user"></i> By Admin </li>
                  <li> <i class="far fa-calendar-alt"></i> <?php print $row['date_post']; ?> </li>
                </ul>

              </div>
              <h2 class="comon-heading mt-4"> <?php print $row['title']; ?> </h2>
              <p style="text-align: justify;"> <?php print $row['news']; ?> </p>

            </div>
            <div style="display: none;" class="comment-sec-part mt-4">
              <h2 class="comon-heading mt-0 mb-3"> Comments</h2>
              <div class="comon-com-div mt-4">
                <div class="d-lg-flex justify-content-between">
                  <figure>
                    <img src="images/istockphoto-1300512215-612x612.jpg" alt="user-pic" />
                  </figure>
                  <div class="comment-text">
                    <div class="d-flex align-items-center">
                      <h5 class="m-0"> Jone due </h5> <span class="d-inline ms-3"> Oct 12 ,2021 </span>
                    </div>

                    <p class="mt-2"> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin
                      literature from 45 BC, making it over 2000 years old. Richard McClintock. </p>
                  </div>
                </div>

              </div>
              <div class="comon-com-div mt-4">
                <div class="d-lg-flex justify-content-between">
                  <figure>
                    <img src="images/manages-st.jpg" alt="user-pic" />
                  </figure>
                  <div class="comment-text">
                    <div class="d-flex align-items-center">
                      <h5 class="m-0"> John due </h5> <span class="d-inline ms-3"> Oct 12 ,2021 </span>
                    </div>

                    <p class="mt-2"> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin
                      literature from 45 BC, making it over 2000 years old. Richard McClintock. </p>
                  </div>
                </div>

              </div>
            </div>

            <div style="display: none;" class="leave-sec-part mt-4">
              <h2 class="comon-heading mt-0 mb-3"> Leave a Comment </h2>
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Full Name" />
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Email" />
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <textarea class="form-control" placeholder="Message"></textarea>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <input type="submit" class="btn subimt-comment" value="Post Comment" />
                  </div>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-5 col-xl-4">

            <div class="recent-post-div mt-5">
              <h2 class="mb-4 comon-heading"> Recent Post </h2>
              <div class="recent-post-div-insiide">

                <?php $sql = query_sql("SELECT * FROM $news ORDER BY RAND() LIMIT 13");
                if (mysqli_num_rows($sql) > 0) {
                  $c = 0;
                  while ($row = mysqli_fetch_assoc($sql)) { ?>
                    <a href="news-details?id=<?php print $row['id']; ?>" class="d-flex w-100 justify-content-between align-items-center">
                      <figure>
                        <img src="<?php print 'photo/' . $row['post_image']; ?>" alt="<?php print $row['title']; ?>" />
                      </figure>
                      <h5> <?php print $row['title']; ?> </h5>
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
      </div>

    </div>


  </section>

  <?php require_once('footer.php'); ?>

</body>

</html>