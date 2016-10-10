
<?php include '../partials/header.php';?>
<header class="header">
  <h1 class="headline">Welcome <small>Figo</small></h1>
  <ul class="header-subnav">
    <li>   <a href="dash_admin.php" alt="Club members">Managment</a> </li>
    <li>   <a href="dash_inbox.php" alt="Inbox">Inbox</li>
    <li>   <a href="dash_pitchs.php" alt="Inbox">Pitchs</li>
    <li>   <a href="dash_history.php" alt="Inbox">Match History</a> </li>
    <li>  <a href="admin_match.php" class="is-active" >Setup a Match</a></li>
    <li>   <a href="profile.php" alt="profile">Profile</a> </li>
    <li>   <a href="#" alt="logout">logout</a> </li>
  </ul>
</header>

<!-- modal create a match content -->

  <div class="row" style="margin-top:20px">
    <div class="small-12 columns auth-plain " style="border:4px solid white;padding:20px;background: url(../img/bg.svg) repeat;background-color: white!important;">
        <div class="signup-panel left-solid">
        <!-- create  match-->
            <div id="contactForm" class="">
              <form id="myForm" method="post" data-abide="">

                  <h2>Create a Match</h2>
                  <label>Match Date</label>
                  <input type="text" placeholder="22/12/2019"  id="dp1">

                  <label>Select Players</label>
                  <select name="basic[]" multiple="multiple" class="3col active">
                      <option value="AK">FIGO</option>
                      <option value="AZ">Samsung</option>
                      <option value="AR">Chelsea</option>
                      <option value="CA">Apple</option>
                      <option value="CO">Uptown</option>
                      <option value="CT">Dhuux</option>
                      <option value="DE">Saeed</option>
                      <option value="FL">Yassin</option>
                      <option value="GA">Jeff</option>
                      <option value="WI">Hamza</option>
                      <option value="WY">Guelle</option>
                  </select>

                  <label>Select Your Pitch</label>
                  <select name="pitch">
                      <option value="SC">Sports City</option>
                      <option value="JA">Jabal Ali</option>
                  </select>

                  <label>Cost per person</label>
                  <input type="text" placeholder="Cost">


                <input type="submit" class="nice blue radius button" value="Lets go">
                </form>
            </div><!--end 8 columns-->
        <!-- create match-->
      </div>
    </div>
  </div>
<!-- modal create a match content -->

<!-- current matchs -->
<div class="row cardsList">
  <div class="listHeader column" style="">
      <div>Current Matchs</div>
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
        <a href='#'>Edit Match</a>
      </div>
    </div>
  </div>
  <!-- card end -->
  <!-- cards -->
  <div class="medium-3 column" style="">
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
        <a href='#'>Edit Match</a>
      </div>
    </div>
  </div>
  <!-- card end -->
</div>
<!-- current matchs -->
    <script src="../js/vendor/jquery.js"></script>
    <script src="../js/vendor/foundation.min.js"></script>
    <script src="../js/vendor/datepicker.js"></script>
    <script src="../js/vendor/multiselect.js"></script>
    <script src="../js/app.js"></script>
  </body>
</html>
