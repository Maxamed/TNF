
<?php include '../partials/header.php';?>
<header class="header">
  <h1 class="headline">Welcome <small>Apple</small></h1>
  <ul class="header-subnav">
    <li>   <a href="yourclubs.php" alt="Your Clubs" >Your Clubs</a> </li>
    <li>   <a href="yourstats.php" alt="Stats"  class="is-active">Stats</a> </li>
    <li>   <a href="upcoming.php" alt="upcoming" >Matchs</a> </li>
    <li>   <a href="freeagent.php" alt="freeagent">Free Agent</a> </li>
    <li>   <a class="signup footWhitefont" href="#" data-open="CreateClub">Create a Club</a> </li>
    <li>   <a href="#" alt="logout">logout</a> </li>
  </ul>
</header>
<div class="content">

  <div class="row cardsList historyStyle">
    <form class="" action="index.html" method="post">
      <div class="row collapse">
        <div class="small-9 columns">
            <select>
              <optgroup label="Select Match Date">
                <option value="10-13-2016">10-13-2016 06:30</option>
                <option value="10-13-2016">10-13-2016 06:30</option>
                <option value="10-13-2016">10-13-2016 06:30</option>
                <option value="10-13-2016">10-13-2016 06:30</option>
              </optgroup>
            </select>
        </div>
      </div>
    </form>
    <div class="listHeader" style="">
        <div>Match Stats for Game Day - 10-13-2016 06:30</div>
    </div>

    <div class="row ">

    </div>

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
