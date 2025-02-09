<?php
require_once('include.php');
$active2 = 'active';
$title = 'Player | ' . $siteName;
$description = 'Udi Stars Football Academy is a premier Nigerian football academy dedicated to nurturing young talents and providing educational opportunities. Founded by Barr. Joseph Chukwudi Chime, we blend football training with academic support to empower underprivileged youths for global success.';
$keyword = 'football academy Nigeria, Udi Stars Football Academy, Nigerian football talent, youth football development, Enugu football academy, football training Nigeria, sports and education, professional football coaching, grassroots football Nigeria, football scholarships Nigeria.'; ?>
<!doctype html>
<html lang="en">

<?php require_once('head.php'); ?>

<body>

  <?php require_once('header.php'); ?>

  <section class="sub-main-banner float-start w-100">
    <div class="sub-banner">
      <div class="container">
        <h1 class="text-center"> Players </h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"> Players </li>
          </ol>
        </nav>
      </div>
    </div>
  </section>

  <section class="body-part-total float-start w-100">
    <div class="playerrs-div-total py-5">
      <div class="golaskipers-div">
        <div class="container">
          <h1 class="comon-heading m-0"> GoalKeeper </h1>
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 mt-0 mt-lg-0 g-4 g-lg-4">

            <?php $sql = query_sql("SELECT * FROM $team_tb WHERE `category`='GoalKeeper' ORDER BY id ASC");
            if (mysqli_num_rows($sql) > 0) {
              $c = 0;
              while ($row = mysqli_fetch_assoc($sql)) { ?>
                <div class="col">
                  <a href="players-details?id=<?php print $row['user_id']; ?>" class="<?php print $row['name']; ?>">
                    <figure>
                      <img src="photo/<?php print $row['picture']; ?>" alt="gl1" />
                    </figure>
                    <div class="d-flex align-items-center justify-content-between">

                      <h5> <?php print $row['name']; ?>
                        <span class="d-block"> <?php print $row['category']; ?> </span>
                      </h5>
                      <span class="num text-center"> <?php print $row['position']; ?> </span>
                    </div>
                  </a>
                </div>
              <?php $c++;
              }
            } else { ?>
              <h4 style="padding: 20px;">No data found!</h4>
            <?php } ?>

          </div>
        </div>
      </div>

      <div class="golaskipers-div bg-gray-new py-5">
        <div class="container">
          <h1 class="comon-heading m-0"> Defender </h1>
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 mt-0 mt-lg-0 g-4 g-lg-4">

            <?php $sql = query_sql("SELECT * FROM $team_tb WHERE `category`='Defender' ORDER BY id ASC");
            if (mysqli_num_rows($sql) > 0) {
              $c = 0;
              while ($row = mysqli_fetch_assoc($sql)) { ?>
                <div class="col">
                  <a href="players-details?id=<?php print $row['user_id']; ?>" class="<?php print $row['name']; ?>">
                    <figure>
                      <img src="photo/<?php print $row['picture']; ?>" alt="gl1" />
                    </figure>
                    <div class="d-flex align-items-center justify-content-between">

                      <h5> <?php print $row['name']; ?>
                        <span class="d-block"> <?php print $row['category']; ?> </span>
                      </h5>
                      <span class="num text-center"> <?php print $row['position']; ?> </span>
                    </div>
                  </a>
                </div>
              <?php $c++;
              }
            } else { ?>
              <h4 style="padding: 20px;">No data found!</h4>
            <?php } ?>

          </div>
        </div>
      </div>

      <div class="golaskipers-div">
        <div class="container">
          <h1 class="comon-heading m-0"> Forward </h1>
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 mt-0 mt-lg-0 g-4 g-lg-4">


            <?php $sql = query_sql("SELECT * FROM $team_tb WHERE `category`='Forward' ORDER BY id ASC");
            if (mysqli_num_rows($sql) > 0) {
              $c = 0;
              while ($row = mysqli_fetch_assoc($sql)) { ?>
                <div class="col">
                  <a href="players-details?id=<?php print $row['user_id']; ?>" class="<?php print $row['name']; ?>">
                    <figure>
                      <img src="photo/<?php print $row['picture']; ?>" alt="gl1" />
                    </figure>
                    <div class="d-flex align-items-center justify-content-between">

                      <h5> <?php print $row['name']; ?>
                        <span class="d-block"> <?php print $row['category']; ?> </span>
                      </h5>
                      <span class="num text-center"> <?php print $row['position']; ?> </span>
                    </div>
                  </a>
                </div>
              <?php $c++;
              }
            } else { ?>
              <h4 style="padding: 20px;">No data found!</h4>
            <?php } ?>


          </div>
        </div>
      </div>

      <div class="golaskipers-div sp-margin">
        <div class="container">
          <h1 class="comon-heading m-0"> Midfinder </h1>
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 mt-0 mt-lg-0 g-4 g-lg-4">


            <?php $sql = query_sql("SELECT * FROM $team_tb WHERE `category`='Midfinder' ORDER BY id ASC");
            if (mysqli_num_rows($sql) > 0) {
              $c = 0;
              while ($row = mysqli_fetch_assoc($sql)) { ?>
                <div class="col">
                  <a href="players-details?id=<?php print $row['user_id']; ?>" class="<?php print $row['name']; ?>">
                    <figure>
                      <img src="photo/<?php print $row['picture']; ?>" alt="gl1" />
                    </figure>
                    <div class="d-flex align-items-center justify-content-between">

                      <h5> <?php print $row['name']; ?>
                        <span class="d-block"> <?php print $row['category']; ?> </span>
                      </h5>
                      <span class="num text-center"> <?php print $row['position']; ?> </span>
                    </div>
                  </a>
                </div>
              <?php $c++;
              }
            } else { ?>
              <h4 style="padding: 20px;">No data found!</h4>
            <?php } ?>


          </div>
        </div>
      </div>

    </div>
  </section>

  <?php require_once('footer.php'); ?>
</body>

</html>