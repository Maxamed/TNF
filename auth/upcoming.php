
<?php include '../partials/header.php';?>
<header class="header">
  <h1 class="headline">Welcome <small>Apple</small></h1>
  <ul class="header-subnav">
    <li>   <a href="yourclubs.php" alt="Your Clubs">Your Clubs</a> </li>
    <li>   <a href="yourstats.php" alt="Stats">Stats</a> </li>
    <li>   <a href="upcoming.php" alt="upcoming"  class="is-active">Matchs</a> </li>
    <li>   <a class="signup footWhitefont" href="#" data-open="CreateClub">Create a Club</a> </li>
    <li>   <a href="profile.php" alt="profile">Profile</a> </li>
    <li>   <a href="#" alt="logout">logout</a> </li>
  </ul>
</header>
<!-- current matchs -->
<div class="row cardsList">
  <div class="listHeader column" style="">
      <div>upcoming Matchs</div>
  </div>
  <!-- cards -->
  <div class="medium-3 column"  >
    <div class="card">
      <div class="image">
        <img src="http://static.pexels.com/wp-content/uploads/2014/07/alone-clouds-hills-1909-527x350.jpg">
        <span class="title">Thursday Night Football</span>
      </div>
      <div class="content">
        <p>Thursday night football Match @ SportsCity. kick off: 8.20</p>
        <p>Players In: 20</p>
      </div>
      <div class="action">
        <a href='#'>Leave</a>
      </div>
    </div>
  </div>
  <!-- card end -->
  <!-- cards -->
  <div class="medium-3 column"  >
    <div class="card">
      <div class="image">
        <img src="http://static.pexels.com/wp-content/uploads/2014/07/alone-clouds-hills-1909-527x350.jpg">
        <span class="title">Thursday Night Football</span>
      </div>
      <div class="content">
        <p>Thursday night football Match @ SportsCity. kick off: 8.20</p>
        <p>Players In: 20</p>
      </div>
      <div class="action">
        <a href='#'>Leave</a>
      </div>
    </div>
  </div>
  <!-- card end -->
  <!-- cards -->
  <div class="medium-3 column"  >
    <div class="card">
      <div class="image">
        <img src="http://static.pexels.com/wp-content/uploads/2014/07/alone-clouds-hills-1909-527x350.jpg">
        <span class="title">Thursday Night Football</span>
      </div>
      <div class="content">
        <p>Thursday night football Match @ SportsCity. kick off: 8.20</p>
        <p>Players In: 20</p>
      </div>
      <div class="action">
        <a href='#'>Leave</a>
      </div>
    </div>
  </div>
  <!-- card end -->
</div>
<!-- current matchs -->
    <?php include '../partials/modal.php'; ?>
    <script src="../js/vendor/jquery.js"></script>
    <script src="../js/vendor/foundation.min.js"></script>
    <script src="../js/vendor/datepicker.js"></script>
    <script src="../js/vendor/multiselect.js"></script>
    <script src="../js/app.js"></script>
  </body>
</html>
