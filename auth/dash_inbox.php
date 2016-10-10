
<?php include '../partials/header.php';?>
<header class="header">
  <h1 class="headline">Welcome <small>Figo</small></h1>
  <ul class="header-subnav">
    <li>   <a href="dash_admin.php" alt="Club members">Managment</a> </li>
    <li>   <a href="dash_inbox.php" alt="Inbox"class="is-active">Inbox</a></li>
    <li>   <a href="dash_pitchs.php" alt="Inbox">Pitchs</a></li>
    <li>   <a href="dash_history.php" alt="Inbox">Match History</a> </li>
    <li>  <a href="admin_match.php" >Setup a Match</a></li>
    <li>   <a href="profile.php" alt="profile">Profile</a> </li>
    <li>   <a href="#" alt="logout">logout</a> </li>
  </ul>
</header>
<div class="row cardsList">
  <div class="listHeader" style="">
      <div>Transfer In</div>
  </div>
  <!-- users -->
  <div class="medium-3 columns end singleCard">
    <div class="card">
      <div class="content">
        <span class="title">Robert Frost</span>
        <p>Position: RM</p>
      </div>
      <div class="action">
        <a data-open="AcceptPlayer" >Accept<span class="fi-check"></span></a>
        <a data-open="RejectPlayer"  >Reject<span class="fi-x"></span></a>
      </div>
    </div>
  </div>
  <!-- users -->
  <!-- users -->
  <div class="medium-3 columns end singleCard">
    <div class="card">
      <div class="content">
        <span class="title">Robert Frost</span>
        <p>Position: RM</p>
      </div>
      <div class="action">
        <a data-open="AcceptPlayer" >Accept<span class="fi-check"></span></a>
        <a data-open="RejectPlayer"  >Reject<span class="fi-x"></span></a>
      </div>
    </div>
  </div>
  <!-- users -->
  <!-- users -->
  <div class="medium-3 columns end singleCard">
    <div class="card">
      <div class="content">
        <span class="title">Robert Frost</span>
        <p>Position: RM</p>
      </div>
      <div class="action">
        <a data-open="AcceptPlayer" >Accept<span class="fi-check"></span></a>
        <a data-open="RejectPlayer"  >Reject<span class="fi-x"></span></a>
      </div>
    </div>
  </div>
  <!-- users -->
  <!-- users -->
  <div class="medium-3 columns end singleCard">
    <div class="card">
      <div class="content">
        <span class="title">Robert Frost</span>
        <p>Position: RM</p>
      </div>
      <div class="action">
        <a data-open="AcceptPlayer" >Accept<span class="fi-check"></span></a>
        <a data-open="RejectPlayer"  >Reject<span class="fi-x"></span></a>
      </div>
    </div>
  </div>
  <!-- users -->
  <!-- users -->
  <div class="medium-3 columns end singleCard">
    <div class="card">
      <div class="content">
        <span class="title">Robert Frost</span>
        <p>Position: RM</p>
      </div>
      <div class="action">
        <a data-open="AcceptPlayer" >Accept<span class="fi-check"></span></a>
        <a data-open="RejectPlayer"  >Reject<span class="fi-x"></span></a>
      </div>
    </div>
  </div>
  <!-- users -->
</div>

<!-- popup -->
<div class="small reveal"  class="reveal" id="AcceptPlayer" data-reveal >
  <p>John frost been added</p>
  <p>New addition to the team, your club is growing</p>
</div>
<!-- popup -->

<!-- popup -->
<div class="tiny reveal"  class="reveal" id="RejectPlayer" data-reveal >
  <p>John frost been Rejected</p>
  <p>Oh well, plenty of fish in the sea</p>
</div>
<!-- popup -->

<div class="row cardsList">
  <div class="listHeader" style="">
      <div>RSVP</div>
  </div>

  <!-- users -->
  <div class="medium-3 columns end singleCard">
    <div class="card">
              <img src="http://zurb.com/ink/images/inky-computer.svg" alt="Inky">
      <div class="content">
        <span class="title">Adbullahi Hussien</span>
        <p>Position: RM</p>
        <p>L:4-W:9-D:6</p>
        <p>Scored:10 - Assists:4</p>
      </div>
      <div class="action">
        <a data-open="PlayerIn" >In<span class="fi-check"></span></a>
        <a data-open="PlayerOut" >Not In<span class="fi-x"></span></a>
      </div>
      </div>
    </div>
  <!-- users -->

    <!-- users -->
    <div class="medium-3 columns end singleCard">
      <div class="card">
                <img src="http://zurb.com/ink/images/inky-computer.svg" alt="Inky">
        <div class="content">
          <span class="title">Adbullahi Hussien</span>
          <p>Position: RM</p>
          <p>L:4-W:9-D:6</p>
          <p>Scored:10 - Assists:4</p>
        </div>
        <div class="action">
          <a data-open="PlayerIn" >In<span class="fi-check"></span></a>
          <a data-open="PlayerOut" >Not In<span class="fi-x"></span></a>
        </div>
        </div>
      </div>
    <!-- users -->
    <!-- users -->
    <div class="medium-3 columns end singleCard">
      <div class="card">
                <img src="http://zurb.com/ink/images/inky-computer.svg" alt="Inky">
        <div class="content">
          <span class="title">Adbullahi Hussien</span>
          <p>Position: RM</p>
          <p>L:4-W:9-D:6</p>
          <p>Scored:10 - Assists:4</p>
        </div>
        <div class="action">
          <a data-open="PlayerIn" >In<span class="fi-check"></span></a>
          <a data-open="PlayerOut" >Not In<span class="fi-x"></span></a>
        </div>
        </div>
      </div>
    <!-- users -->
    <!-- popup -->
    <div class="small reveal"  class="reveal" id="PlayerIn" data-reveal >
      <p>John frost will play this week</p>
      <p>He got good record! lets see what he can do.</p>
    </div>
    <!-- popup -->

    <!-- popup -->
    <div class="tiny reveal"  class="reveal" id="PlayerOut" data-reveal >
      <p>John frost is Staying at home this week</p>
      <p>Lets give him a game next week though</p>
    </div>
    <!-- popup -->
</div>
    <?php include '../partials/modal.php'; ?>
    <script src="../js/vendor/jquery.js"></script>
    <script src="../js/vendor/foundation.min.js"></script>
    <script src="../js/vendor/datepicker.js"></script>
    <script src="../js/vendor/multiselect.js"></script>
    <script src="../js/app.js"></script>
  </body>
</html>
