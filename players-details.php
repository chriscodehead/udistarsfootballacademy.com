<?php
require_once('include.php');
$active1 = 'active';
$title = 'Players | ' . $siteName;
$description = 'Udi Stars Football Academy is a premier Nigerian football academy dedicated to nurturing young talents and providing educational opportunities. Founded by Barr. Joseph Chukwudi Chime, we blend football training with academic support to empower underprivileged youths for global success.';
$keyword = 'football academy Nigeria, Udi Stars Football Academy, Nigerian football talent, youth football development, Enugu football academy, football training Nigeria, sports and education, professional football coaching, grassroots football Nigeria, football scholarships Nigeria.';

if (isset($_GET['id']) && !empty($_GET['id'])) {
  $user_id = $_GET['id'];
} else {
  header("location:players");
}

$sql = query_sql("SELECT * FROM $team_tb WHERE `user_id`= '" . $user_id . "' LIMIT 1");
$row = mysqli_fetch_assoc($sql);
?>
<!doctype html>
<html lang="en">

<?php require_once('head.php'); ?>

<body>
  <?php require_once('header.php'); ?>

  <section class="sub-main-banner float-start w-100">


    <div class="sub-banner">
      <div class="container">
        <h1 class="text-center"> Players details </h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"> Players details </li>
          </ol>
        </nav>
      </div>
    </div
      </section>

    <section class="body-part-total float-start w-100">
      <div class="playerrs-details-div-total py-5">
        <div class="top-details-palya">
          <div class="container">
            <div class="row g-lg-5">
              <div class="col-lg-4">
                <figure>
                  <img src="photo/<?php print $row['picture']; ?>" alt="gps1" />
                </figure>
              </div>
              <div class="col-lg-8">
                <div class="players-details-div">
                  <h2 class="comon-heading m-0"> <?php print $row['name']; ?>
                    <span class="d-block mt-2">
                      <?php print $row['category']; ?>
                    </span>
                  </h2>

                  <ul class="list-unstyled mt-2">
                    <li style="display: none;">
                      <span> Nationality :</span>
                      <span> American </span>
                    </li>
                    <li style="display: none;">
                      <span> DateOfBith :</span>
                      <span> 25/02/1988 </span>
                    </li>
                    <li style="display: none;">
                      <span> Height :</span>
                      <span> 190cm </span>
                    </li>
                    <li>
                      <span> Position :</span>
                      <span> <?php print $row['position']; ?> </span>
                    </li>
                  </ul>
                  <h2 class="comon-heading mt-3 mb-3"> Biography</h2>
                  <p> <?php print $row['bio']; ?></p>



                  <div style="display: none;" class="perform-div mt-4">
                    <h2 class="comon-heading mt-4"> Players Performance </h2>
                    <div class="comonper-m">
                      <div class="d-flex justify-content-between align-items-center">
                        <h5> Attack </h5>
                        <span>25%</span>
                      </div>

                      <div class="progress">

                        <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>

                    <div class="comonper-m">
                      <div class="d-flex justify-content-between align-items-center">
                        <h5> Defence </h5>
                        <span>25%</span>
                      </div>

                      <div class="progress">

                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                    <div class="comonper-m">
                      <div class="d-flex justify-content-between align-items-center">
                        <h5> Kick </h5>
                        <span>25%</span>
                      </div>

                      <div class="progress">

                        <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>

                  </div>

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