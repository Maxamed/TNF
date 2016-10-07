
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

<!-- modal create a club content -->
<div id="CreateClub">
  <div class="row">
    <div class="large-12 columns auth-plain">
      <div class="signup-panel left-solid">
        <!-- create  club-->
            <div id="contactForm" class="">
              <form id="myForm" method="post" data-abide="">

                  <h2>Create a club</h2>
                  <label>Club Name <input type="text" placeholder="Club Name" required aria-describedby="clubname"></label>
                  <p class="help-text" id="clubname">You need a club name, make it fierce.</p>

                  <label>Club Rules</label>
                  <textarea placeholder="Lets have some order here" height="140px" required aria-describedby="clubrules"></textarea></label>
                  <p class="help-text" id="clubrules">Rules: 1. no slide tackle?, 2. don't be late</p>

                  <label>Invite players
                  <input type="text" placeholder="john@gmail.com,ali@hotmail.com,Adam@gmail.com" required aria-describedby="playeremail"></label>
                  <p class="help-text" id="playeremail">please use comma between emails.</p>


                <input type="submit" class="nice blue radius button" value="Create your club">
                </form>
            </div><!--end 8 columns-->
        <!-- create club-->
      </div>
    </div>

   </div>
</div>

<!-- modal create a clubcontent -->

    <?php include '../partials/modal.php'; ?>
    <script src="../js/vendor/jquery.js"></script>
    <script src="../js/vendor/foundation.min.js"></script>
    <script src="../js/vendor/datepicker.js"></script>
    <script src="../js/vendor/multiselect.js"></script>
    <script src="../js/app.js"></script>
  </body>
</html>
