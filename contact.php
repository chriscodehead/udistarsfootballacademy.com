<?php
require_once('include.php');
$active2 = 'active';
$title = 'Contact | ' . $siteName;
$description = 'Udi Stars Football Academy is a premier Nigerian football academy dedicated to nurturing young talents and providing educational opportunities. Founded by Barr. Joseph Chukwudi Chime, we blend football training with academic support to empower underprivileged youths for global success.';
$keyword = 'football academy Nigeria, Udi Stars Football Academy, Nigerian football talent, youth football development, Enugu football academy, football training Nigeria, sports and education, professional football coaching, grassroots football Nigeria, football scholarships Nigeria.';

if (isset($_POST['sub'])) {
 $name = $_POST['name'];
 $phone = $_POST['phone'];
 $email = $_POST['email'];
 $location = $_POST['location'];
 $subject = ucfirst(strtolower($name)) . ' Contacted you!';
 $message = $_POST['message'];
 if (!empty($_POST['email']) && !empty($_POST['message'])) {
  $msg = $email_call->contactUsMail($name, $phone, $email, $subject, $message, $location);
 } else {
  $msg =  'Please fill all fields';
 }
}

?>
<!doctype html>
<html lang="en">

<?php require_once('head.php'); ?>

<body>

 <?php require_once('header.php'); ?>

 <section class="sub-main-banner float-start w-100">
  <div class="sub-banner">
   <div class="container">
    <h1 class="text-center"> Booking</h1>
    <nav aria-label="breadcrumb">
     <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Booking</li>
     </ol>
    </nav>
   </div>
  </div>
 </section>

 <section class="body-part-total float-start w-100">

  <div class="checkout-page-main-div booking-page-main my-5">

   <div class="container">
    <div class="form-wizard">
     <form action="#" enctype="multipart/form-data" method="post" role="form">
      <div class="form-wizard-header">

       <ul class="list-unstyled form-wizard-steps clearfix d-none">
        <li class="active">
         <small class="d-block mb-3"> Checkout </small>
         <span>1</span>

        </li>


        <li>
         <small class="d-block mb-3"> Finished </small>
         <span>4</span>

        </li>

       </ul>

      </div>


      <fieldset class="wizard-fieldset show">


       <div class="row g-lg-5">
        <div class="col-lg-8">

         <div class="ad-fm ">
          <div class="comon-steps-div">
           <?php if (!empty($msg)) { ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
             <?php print @$msg; ?>
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
           <?php } ?>
           <h2 class="comon-heading m-0"> Get in Touch
            Let’s Chat</h2>
           <p>Ready to discuss how our personal care services can help you or your loved one? </p>
           <div class="row mt-4">
            <div class="col-lg-6">
             <div class="form-group">
              <label> Full Name </label>
              <input type="text" name="name" class="form-control wizard-required">
              <div class="wizard-form-error"></div>
             </div>
            </div>

            <div class="col-lg-6">
             <div class="form-group">
              <label> Email </label>
              <input type="email" name="email" class="form-control">
             </div>
            </div>

            <div class="col-lg-6">
             <div class="form-group">
              <label> Phone </label>
              <input type="text" name="phone" class="form-control">
             </div>
            </div>

            <div class="col-lg-6">
             <div class="form-group">
              <label> Location </label>
              <input type="text" name="location" class="form-control wizard-required">
              <div class="wizard-form-error"></div>
             </div>
            </div>

            <div class="col-lg-12">
             <div class="form-group">
              <label> Message </label>
              <textarea style="height: 100px;" name="message" class="form-control"></textarea>
              <div class="wizard-form-error"></div>
             </div>
            </div>

            <div class="col-lg-12">
             <div class="form-group">
              <button type="submit" name="sub" class="nav-link btn join-btn" class="regster-bn">Send Now</button>
             </div>
            </div>


           </div>
          </div>
         </div>
        </div>

        <div class="col-lg-4">
         <div class="ceck-out-right-div new-checkout">
          <div class="d-flex justify-content-between align-items-center">
           <h2 class="page-titel comon-heading m-0"> Contact Details
           </h2>
          </div>
          <hr class="mt-2">

          <div class="oder-summary-item">
           <div class="ad-booking">
            <h3 class="m-0"> Email:</h3><br />
            <span> <a href="mailto:<?php print $siteEmail; ?>"><?php print $siteEmail; ?></a></span>
           </div>

           <div class="ad-booking mt-3">
            <h3 class="m-0"> Phone:</h3><br />
            <span> <a href="tel:<?php print $sitePhone; ?>"><?php print $sitePhone; ?></a></span>
           </div>

           <div class="ad-booking mt-3">
            <h3 class="m-0"> Address:</h3><br />
            <span> <?php print $siteAddress; ?></span>
           </div>

          </div>

         </div>
        </div>

       </div>
       <div class="form-group d-lg-flex clearfix">
       </div>
      </fieldset>
     </form>
    </div>
   </div>
  </div>
 </section>

 <?php require_once('footer.php'); ?>
</body>

</html>