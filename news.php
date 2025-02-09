<?php
require_once('include.php');
$active2 = 'active';
$title = 'News | ' . $siteName;
$description = 'Udi Stars Football Academy is a premier Nigerian football academy dedicated to nurturing young talents and providing educational opportunities. Founded by Barr. Joseph Chukwudi Chime, we blend football training with academic support to empower underprivileged youths for global success.';
$keyword = 'football academy Nigeria, Udi Stars Football Academy, Nigerian football talent, youth football development, Enugu football academy, football training Nigeria, sports and education, professional football coaching, grassroots football Nigeria, football scholarships Nigeria.';

if (isset($_GET['page'])) {
  $page = $_GET['page'];
} else {
  $page = 1;
}

$no_of_records_per_page = 100;
$offset = ($page - 1) * $no_of_records_per_page;

$total_pages_sql = "SELECT COUNT(*) FROM $news";
$result = query_sql($total_pages_sql);
$total_rows = mysqli_fetch_array($result)[0];
$total_pages = ceil($total_rows / $no_of_records_per_page);
?>
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
            <!-- <p class="me-3"> Showing 1-4 of 13 results </p> -->
          </div>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 gy-5 gx-md-5 gy-lg-0 gx-lg-5 mt-0">

          <?php $sql = query_sql("SELECT * FROM $news ORDER BY id DESC LIMIT $offset, $no_of_records_per_page");
          if (mysqli_num_rows($sql) > 0) {
            $c = 0;
            while ($row = mysqli_fetch_assoc($sql)) { ?>
              <div class="col mb-3">
                <a href="news-details?id=<?php print $row['id']; ?>" class="comon-blogs1">
                  <figure>
                    <img src="<?php print 'photo/' . $row['post_image']; ?>" alt="<?php print $row['title']; ?>" />
                  </figure>
                  <div class="news-items-del">
                    <h5><?php print $row['title']; ?></h5>
                    <ul class="list-unstyled d-flex align-items-center my-2">
                      <li>
                        <i class="far fa-user"></i> Admin
                      </li>
                      <li><i class="far fa-clock"></i> <?php print $row['date_post']; ?>
                      </li>
                    </ul>
                    <p class="mt-2"> <?php print $bassic->reduceTextLength($row['news'], 150);
                                      ?> </p>
                  </div>
                </a>
              </div>
            <?php $c++;
            }
          } else { ?>
            <h4 style="padding: 20px;">No updates found!</h4>
          <?php } ?>


        </div>


        <div class="col-lg-12">
          <div class="pagination-area text-center mt-4">
            <a href="<?php if ($page <= 1) {
                        echo '#';
                      } else {
                        echo "?page=" . ($page - 1);
                      } ?>" class="next page-numbers">
              <i class="btn btn-primary fas fa-angle-left" style="margin-right: 10px;"></i>
            </a>
            <a href="?page=1" class="page-numbers current" aria-current="page">Start</a>
            <span class="page-numbers">.....</span>
            <a href="?page=<?php echo $total_pages; ?>" class="page-numbers">End</a>
            <a href="<?php if ($page >= $total_pages) {
                        echo '#';
                      } else {
                        echo "?page=" . ($page + 1);
                      } ?>" class="next page-numbers">
              <i class="btn ms-2 btn-primary fas fa-angle-right"></i>
            </a>
          </div>
        </div>


      </div>
    </div>


  </section>


  <?php require_once('footer.php'); ?>

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

</html>