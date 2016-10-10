
<?php include '../partials/header.php';?>
<header class="header">
  <h1 class="headline">Welcome <small>Figo</small></h1>
  <ul class="header-subnav">
    <li>   <a href="dash_admin.php" alt="Club members"class="is-active">Managment</a> </li>
    <li>   <a href="dash_inbox.php" alt="Inbox">Inbox</a></li>
    <li>   <a href="dash_pitchs.php" alt="Inbox">Pitchs</a></li>
    <li>   <a href="dash_history.php" alt="Inbox">Match History</a> </li>
    <li>  <a href="admin_match.php" >Setup a Match</a></li>
    <li>   <a href="#" alt="logout">logout</a> </li>
  </ul>
</header>
<div class="row" style="margin-top:20px;">

  <div class="small-12 columns auth-plain " style="margin-bottom:20px;border:4px solid white;padding:20px;background: url(../img/bg.svg) repeat;background-color: white!important;">

<!-- start -->
<!-- Header and Nav -->
  <div class="row">
    <div class="large-12 columns">
      <div class="panel">
        <h1>Abdullahi Noor</h1>
      </div>
    </div>
  </div>

  <div class="row">
    <!-- Nav Sidebar -->
    <!-- This is source ordered to be pulled to the left on larger screens -->
    <div class="large-4 columns ">
      <div class="panel">
        <a href="#"><img src="http://static.pexels.com/wp-content/uploads/2014/07/alone-clouds-hills-1909-527x350.jpg" /></a>
          <div class="section-container vertical-nav" style="background-color:white;padding:15px;"data-section data-options="deep_linking: false; one_up: true">
          <section class="section">
            <h5 class="title">Joined on</h5><span>12/12/2015</span>
          </section>
          <section class="section">
            <h5 class="title">Stats</h5><span>Player</span>
          </section>
          <section class="section">
            <h5 class="title">Position</h5><span>CB - RB</span>
          </section>
          <section class="section">
            <h5 class="title">Games</h5><span> L:4-W:9-D:6</span>
          </section>
          <section class="section">
            <h5 class="title">Clubs</h5><span>Champions Club - Diera Rude Boys</span>
          </section>
        </div>

      </div>
    </div>

    <!-- Main Feed -->
    <!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
    <div class="large-8 columns" >



    </div>


  </div>

<!-- end -->

  </div>
</div>

    <?php include '../partials/modal.php'; ?>
    <script src="../js/vendor/jquery.js"></script>
    <script src="../js/vendor/foundation.min.js"></script>
    <script src="../js/vendor/datepicker.js"></script>
    <script src="../js/vendor/multiselect.js"></script>
    <script src="../js/app.js"></script>
  </body>
</html>
