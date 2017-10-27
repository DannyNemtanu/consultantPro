<?php
  include 'inc/header.php';
  include 'inc/navigation.php';
 ?>

 <!-- header -->
 <header>
   <div class="consultant-banner">
     <div class="row">
       <h1>Welcome! <br> Name Surname</h1>
       <p>Here you can see all you recent activity</p>
       <img src="img/consultant.png" alt="">
     </div>
   </div>
 </header>
 <!-- end header -->
<!-- content -->
  <div class="consultant-content row col-xs-12">
    <!-- Left Side -->
    <div class="consultant-main col-md-8 col-xs-12">
      <div class="row">
        <div class="col-xs-12 section-content dashboard">
          <!-- Consultant Dashboard -->
          <div class="row text">
            <h1 id="bold">Your Dashboard</h1>
            <h4>Private to you !</h4>
          </div>
          <div class="row dash-info">
            <div class="col-md-4">
              <h1>13</h1>
              <h4>Who viewed you account</h4>
            </div>
            <div class="col-md-4">
              <h1>0</h1>
              <h4>Feedbacks to your account</h4>
            </div>
            <div class="col-md-4">
              <h1>13</h1>
              <h4>Search appearance</h4>
            </div>
          </div>
        </div>
        <!-- End Dashborrd -->

        <!-- Expirience -->
        <div class="row expirience">
          <div class="col-xs-12 section-content">
            <div class="col-md-3 hidden-xs">
              <img src="img/consBuilding.png" alt="Building">
            </div>
            <div class="col-md-9 col-xs-12">
              <h1>Job Title</h1>
              <h4>Company Name</h4>
              <p>2016 - Present</p>
              <p>Location</p>

              <p>
                Responding to complaints applying tact, diplomacy and judgement.<br>
                Maintaining well-built relationships with staff and members.<br>
                Reconcile and balancing the transaction at the end of the shift.<br>
                Perform credit checks and check credit references.<br>
                Restock and replenish casino supplies.<br>
              </p>
            </div>
          </div>
        </div>
        <!-- End Expirience -->

        <!-- Education -->
        <div class="row education">
          <div class="row">
            <div class="col-xs-12 section-content">
              <div class="col-md-3 hidden-xs">
                <img src="img/consEducation.png" alt="College Image">
              </div>
              <div class="col-md-9 col-xs-12">
                <h1>National College of Ireland</h1>
                <h4>Bachelor's Degree, BSc (Honours) in Accounting</h4>
                <span>2017 - 2019</span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 section-content">
              <div class="col-md-3 hidden-xs">
                <img src="img/consEducation.png" alt="College Image">
              </div>
              <div class="col-md-9 col-xs-12">
                <h1>National College of Ireland</h1>
                <h4>Bachelor's Degree, Business Support</h4>
                <span>2015 - 2017</span>
              </div>
            </div>
          </div>
        </div>
        <!-- End Education -->

        <!-- Certificates -->
        <div class="row certificates  ">
          <div class="row">
            <div class="col-xs-12 section-content">
              <div class="col-md-3 hidden-xs">
                <img src="img/consCertificate.png" alt="Certificate Image">
              </div>
              <div class="col-md-9 col-xs-12">
                <h1>ACCA QUALIFICATION</h1>
                <h4>PROFESSIONAL LEVEL CERTIFICATE</h4>
                <span>2017 - 2019</span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 section-content">
              <div class="col-md-3 hidden-xs">
                <img src="img/consCertificate.png" alt="Certificate Image">
              </div>
              <div class="col-md-9 col-xs-12">
                <h1>FOUNDATIONS IN ACCOUNTANCY</h1>
                <h4>FOUNDATIONS IN AUDIT</h4>
                <span>2015 - 2017</span>
              </div>
            </div>
          </div>
        </div>
        <!-- End Certificates -->
      </div>
    </div>
    <!-- Right Side -->
    <div class="consultant-raling hidden-xs col-md-4">
      <div class="row consultant-raling-padding">
        <div class="row share">
          <div class="col-md-12">
            <div class="row">
              <h3>Share with friends!</h3>
              <div class="row">
                <div class="col-md-4">
                  <a href="#"><img src="img/facebookShare.png" alt=""></a>
                </div>
                <div class="col-md-4">
                  <a href="#"><img src="img/linkedinShare.png" alt=""></a>
                </div>
                <div class="col-md-4">
                  <a href="#"><img src="img/twitterShare.png" alt=""></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Suggestions -->
        <div class="row suggestions">
          <div class="col-md-12">
            <h3>Our Suggested</h3>
            <!-- Consultants List -->
            <div class="row consultant-suugested">
              <div class="row">
                <div class="col-md-4 img">
                  <img src="img/consultant.png" alt="">
                </div>
                <div class="col-md-8">
                  <h4>Name Surname</h4>
                  <h5>Accounting | Business | Qualified</h5>
                  <h6>Rating: <br> 5+ Star</h6>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 img">
                  <img src="img/consultant.png" alt="">
                </div>
                <div class="col-md-8">
                  <h4>Name Surname</h4>
                  <h5>Accounting | Business | Qualified</h5>
                  <h6>Rating: <br> 5+ Star</h6>
                </div>
              </div>
              <div class="row no-border">
                <div class="col-md-4 img">
                  <img src="img/consultant.png" alt="">
                </div>
                <div class="col-md-8">
                  <h4>Name Surname</h4>
                  <h5>Accounting | Business | Qualified</h5>
                  <h6>Rating: <br> 5+ Star</h6>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <button type="button" class="btn btn-primary suggested-btn" name="button">See More</button>
            </div>
          </div>
        </div>
        <!-- End Suggestions -->
      </div>

    </div>
  </div>
<!-- end content -->
