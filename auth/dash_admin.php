
<?php include '../partials/header.php';?>
<header class="header">
  <h1 class="headline">Welcome <small>Figo</small></h1>
  <ul class="header-subnav">
    <li>   <a href="dash_admin.php" alt="Club members"class="is-active">Managment</a> </li>
    <li>   <a href="dash_inbox.php" alt="Inbox">Inbox</li>
    <li>   <a href="dash_pitchs.php" alt="Inbox">Pitchs</li>
    <li>   <a href="dash_history.php" alt="Inbox">Match History</a> </li>
    <li>  <a href="admin_match.php" >Setup a Match</a></li>
    <li>   <a href="#" alt="logout">logout</a> </li>
  </ul>
</header>
<div class="row" style="margin:10px">
  <!-- club -->
  <div class="medium-3 column">
    <div class="card">
      <div class="image">
        <img src="http://static.pexels.com/wp-content/uploads/2014/07/alone-clouds-hills-1909-527x350.jpg">
        <span class="title">Thursday Night Football</span>
      </div>
      <div class="content">
        <p>Members: 30</p>
        <p>Pitchs: 3</p>
      </div>
      <div class="action">
        <a href='#'>Edit</a>
      </div>
    </div>
  </div>
  <!-- club -->
  <!-- users -->
  <div class="medium-6 columns end">
    <div class="card">
      <div class="content">
        <span class="title">Robert Frost</span>
        <p>Two roads diverged in a yellow wood,	 And sorry I could not travel both	 And be one traveler, long I stood	 And looked down one as far as I could	. To where it bent in the undergrowth;</p>
      </div>
      <div class="action">
        <a href='#'>This is a link</a>
        <a href='#'>This is a link</a>
      </div>
    </div>
  </div>

  <!-- users -->
</div>
    <?php include '../partials/modal.php'; ?>
    <script src="../js/vendor/jquery.js"></script>
    <script src="../js/vendor/foundation.min.js"></script> 
    <script src="../js/app.js"></script>
  </body>
</html>
