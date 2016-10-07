
<?php include '../partials/header.php';?>
<header class="header">
  <h1 class="headline">Welcome <small>Figo</small></h1>
  <ul class="header-subnav">
    <li>   <a href="dash_admin.php" alt="Club members">Managment</a> </li>
    <li>   <a href="dash_inbox.php" alt="Inbox">Inbox</li>
    <li>   <a href="dash_pitchs.php" alt="Inbox">Pitchs</li>
    <li>   <a href="dash_history.php" alt="Inbox" class="is-active">Match History</a> </li>
    <li>  <a href="admin_match.php" >Setup a Match</a></li>
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
        <div>Match History for Game Day - 10-13-2016 06:30</div>
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
