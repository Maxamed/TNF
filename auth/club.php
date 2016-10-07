
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

<div class="off-canvas-wrapper">
  <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>

    <div class="off-canvas position-left reveal-for-large" id="my-info" data-off-canvas data-position="left">
      <div class="row column">
        <br>
        <img class="thumbnail" src="http://placehold.it/550x350">
        <h5>Mike Mikerson</h5>
        <p>Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed molestie augue sit amet leo.</p>
      </div>
    </div>

    <div class="off-canvas-content" data-off-canvas-content>
      <div class="title-bar hide-for-large">
        <div class="title-bar-left">
          <button class="menu-icon" type="button" data-open="my-info"></button>
          <span class="title-bar-title">Mike Mikerson</span>
        </div>
      </div>
      <div class="callout primary">
        <div class="row column">
          <h1>Hello! This is the portfolio of a very witty person.</h1>
          <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla.</p>
        </div>
      </div>
      <div class="row small-up-2 medium-up-3 large-up-4">
        <div class="column">
          <img class="thumbnail" src="http://placehold.it/550x550">
          <h5>My Site</h5>
        </div>
        <div class="column">
          <img class="thumbnail" src="http://placehold.it/550x550">
          <h5>My Site</h5>
        </div>
        <div class="column">
          <img class="thumbnail" src="http://placehold.it/550x550">
          <h5>My Site</h5>
        </div>
        <div class="column">
          <img class="thumbnail" src="http://placehold.it/550x550">
          <h5>My Site</h5>
        </div>
        <div class="column">
          <img class="thumbnail" src="http://placehold.it/550x550">
          <h5>My Site</h5>
        </div>
        <div class="column">
          <img class="thumbnail" src="http://placehold.it/550x550">
          <h5>My Site</h5>
        </div>
        <div class="column">
          <img class="thumbnail" src="http://placehold.it/550x550">
          <h5>My Site</h5>
        </div>
        <div class="column">
          <img class="thumbnail" src="http://placehold.it/550x550">
          <h5>My Site</h5>
        </div>
        <div class="column">
          <img class="thumbnail" src="http://placehold.it/550x550">
          <h5>My Site</h5>
        </div>
        <div class="column">
          <img class="thumbnail" src="http://placehold.it/550x550">
          <h5>My Site</h5>
        </div>
        <div class="column">
          <img class="thumbnail" src="http://placehold.it/550x550">
          <h5>My Site</h5>
        </div>
        <div class="column">
          <img class="thumbnail" src="http://placehold.it/550x550">
          <h5>My Site</h5>
        </div>
      </div>

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
