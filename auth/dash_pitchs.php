
<?php include '../partials/header.php';?>
<header class="header">
  <h1 class="headline">Welcome <small>Figo</small></h1>
  <ul class="header-subnav">
    <li>   <a href="dash_admin.php" alt="Club members">Managment</a> </li>
    <li>   <a href="dash_inbox.php" alt="Inbox">Inbox</a></li>
    <li>   <a href="dash_pitchs.php" alt="Inbox"class="is-active">Pitchs</a></li>
    <li>   <a href="dash_history.php" alt="Inbox">Match History</a> </li>
    <li>  <a href="admin_match.php" >Setup a Match</a></li>
    <li>   <a href="profile.php" alt="profile">Profile</a> </li>
    <li>   <a href="#" alt="logout">logout</a> </li>
  </ul>
</header>
<div class="row" style="margin-top:20px;">
  <div class="large-5 columns" style="border:4px solid white;padding:20px;background: url(../img/bg.svg) repeat;background-color: white!important;">
    <form method="post" id="geocoding_form">
      <div class="input-group">
        <span class="input-group-label">Address</span>
        <input class="input-group-field" type="text" id="address" name="address">
        <div class="input-group-button">
          <input type="submit" class="button" value="Submit">
        </div>
      </div>
    </form>
      <div id="map" style=" height:300px;"></div>
      <div id="result" style="background-color:white;padding:10px;">
        <p> </p>
      </div>
  </div>
  <div class="large-7 columns">
    <table>
  <thead>
    <tr>
      <th width="150">Pitch name</th>
      <th>Pitch address</th>
      <th width="50">default</th>
      <th width="150">Action</th>
    </tr>
  </thead>
  <tbody> <form>
    <tr>
      <td>Sports City</td>
      <td>12 hasssa road, al barsha , JVC</td>
      <td><label><input type="radio"  name="optradio"></label></td>
      <td><a href="#">Delete</a></td>
    </tr>
    <tr>
      <td>Sports City</td>
      <td>12 hasssa road, al barsha , JVC</td>
      <td><label><input type="radio"   name="optradio"></label></td>
      <td><a href="#">Delete</a></td>
    </tr>
      <tr>
        <td>Sports City</td>
        <td>12 hasssa road, al barsha , JVC</td>
        <td><label><input type="radio"   name="optradio"></label></td>
        <td><a href="#">Delete</a></td>
      </tr> </form>
  </tbody>
</table>
  </div>
</div>


<script src="../js/vendor/jquery.js"></script>
<script type="text/javascript" src="//maps.google.com/maps/api/js?key=AIzaSyC49xjd7Oum8acc0G5tDCQcmPJlj8H0WD0"></script>
<script src="../js/vendor/foundation.min.js"></script>
<script src="../js/vendor/datepicker.js"></script>
<script src="../js/vendor/multiselect.js"></script>
<script src="../js/app.js"></script>
<script src="../js/vendor/gmaps.js"></script>
<script>
var map;
$(document).ready(function(){
  map = new GMaps({
    el: '#map',
    lat: -12.043333,
    lng: -77.028333
  });
  $('#geocoding_form').submit(function(e){
    e.preventDefault();
    GMaps.geocode({
      address: $('#address').val().trim(),
      callback: function(results, status){
        if(status=='OK'){
          var latlng = results[0].geometry.location;
          map.setCenter(latlng.lat(), latlng.lng());
          map.addMarker({
            lat: latlng.lat(),
            lng: latlng.lng()
          });
          $action = "- <a href='#'>Add to list</a>";
          $('#result p').append($('#address').val().trim(),latlng.lat(), latlng.lng(), $action);
        }
      }
    });
  });
});
</script>
  </body>
</html>

<!-- AIzaSyC49xjd7Oum8acc0G5tDCQcmPJlj8H0WD0 -->
