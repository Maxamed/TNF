
<?php include '../partials/header.php';?>
<header class="header">
  <h1 class="headline">Welcome <small>Figo</small></h1>
  <ul class="header-subnav">
    <li>   <a href="dash_admin.php" alt="Club members">Managment</a> </li>
    <li>   <a href="dash_inbox.php" alt="Inbox">Inbox</li>
    <li>   <a href="dash_pitchs.php" alt="Inbox">Pitchs</li>
    <li>   <a href="dash_history.php" alt="Inbox">Match History</a> </li>
    <li>  <a href="admin_match.php"  >Setup a Match</a></li>
    <li>   <a href="profile.php" alt="profile" class="is-active" >Profile</a> </li>
    <li>   <a href="#" alt="logout">logout</a> </li>
  </ul>
</header>

<!-- modal create a match content -->

  <div class="row" style="margin:20px;position:relative">
    <div class="small-12 columns auth-plain " style="border:4px solid white;padding:20px;background: url(../img/bg.svg) repeat;background-color: white!important;">
      <div class="signup-panel">
        <!-- create  match-->
            <div id="contactForm" class="">
              <form id="myForm" method="post" data-abide="">

                  <h2>Your profile</h2>

                  <label>Name</label>
                  <input type="text" disabled placeholder="Mohamed Jama">
                  <p class="help-text" >From your social login</p>

                  <label>Email</label>
                  <input type="text" disabled placeholder="Mohamed.Jama@gmail.com">
                  <p class="help-text" >From your social login</p>

                  <label>Nickname</label>
                  <input type="text" required placeholder="Nickname">

                  <label>Date of birth</label>
                  <input type="text" required placeholder="22/12/1980"  id="dp2">

                  <label>Favourite position</label>
                  <select name="basic[]" required  multiple="multiple" required class="2col active">
                      <option value="gk">Goal Keeper</option>
                      <option value="rb">Right Back</option>
                      <option value="lb">Left Back</option>
                      <option value="cb">Center Back</option>
                      <option value="rm">Right Midfield</option>
                      <option value="cm">Centre Midfield</option>
                      <option value="lm">Left Midfield</option>
                      <option value="n10">No 10</option>
                      <option value="cf">Forward</option>
                      <option value="lw">Left Wing</option>
                      <option value="rw">Right Wing</option>
                  </select><br/>
                    <p class="help-text" >Only Select 2 position, if more than 2 position selected then default will be goal keeper!</p>

                  <label>Phone number</label>
                  <input type="text" required placeholder="phone">


                <input type="submit" class="nice blue radius button" value="Lets go">
                </form>
            </div><!--end 8 columns-->
        <!-- create match-->
      </div>
    </div>
  </div>
<!-- modal create a match content -->


    <script src="../js/vendor/jquery.js"></script>
    <script src="../js/vendor/foundation.min.js"></script>
    <script src="../js/vendor/datepicker.js"></script>
    <script src="../js/vendor/multiselect.js"></script>
    <script src="../js/app.js"></script>
  </body>
</html>
