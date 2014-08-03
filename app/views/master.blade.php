<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Bioproces</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://maps.googleapis.com/maps/api/js"></script>
  <script>
    function initialize() {
      var map_canvas = document.getElementById('map_canvas');
      var map_options = {
        center: new google.maps.LatLng(44.5403, -78.5463),
        zoom: 15,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      }
      var map = new google.maps.Map(map_canvas, map_options)
    }
    google.maps.event.addDomListener(window, 'load', initialize);
  </script>
</head>
<body>

<div class="container">
  <div class="header row">
    <div class="row">
      <div class="col-sm-2  col-sm-offset-5">
        <img src="img/logo.png" alt="Bioproces" class="img-responsive">
      </div>
      <div class="col-sm-3 col-sm-offset-2 search">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
          <div class="input-group-btn">
            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
          </div>
        </div>
      </div>
    </div>
  </div>

  @yield('content')

   <div class="footer">

    <div class="row">
      <div class="text-center">
        <div class="footerSectionL1 col-sm-4 borderTest">
          <div class="inlineBLock">
            <h3>Kontakt</h3>
            <img src="img/icons/phone.png" alt="Phone icon" class="inlineBLock">
            <p class="inlineBLock text-left">Telefoni: <br/>
              +381 11 374 2569<br/>
              +381 11 004 4599<br/>
              +381 64 858 5217<br/>
            </p><br/>
            <img src="img/icons/fax.png" alt="Fax icon" class="inlineBLock">
            <p class="inlineBLock text-left">Fax: <br/>
              +381 11 374 2569
            </p>
          </div>
        </div>
        <div class="footerSectionC1 col-sm-4">
          <div class="inlineBLock">
            <h3>Kontakt</h3>
            <img src="img/icons/phone.png" alt="Phone icon" class="inlineBLock">
            <p class="inlineBLock text-left">Telefoni: <br/>
              +381 11 374 2569<br/>
              +381 11 004 4599<br/>
              +381 64 858 5217<br/>
            </p><br/>
            <img src="img/icons/fax.png" alt="Fax icon" class="inlineBLock">
            <p class="inlineBLock text-left">Fax: <br/>
              +381 11 374 2569
            </p>
          </div>
        </div>
        <div class="footerSectionR1 col-sm-4">
          <div class="inlineBLock footerMenu">
            <h3>Navigacija</h3>
            <ul class="text-left">
              <li><a href="#">Početna</a></li>
              <li><a href="#">O nama</a></li>
              <li><a href="#">Proizvodi</a></li>
              <li><a href="#">Reference</a></li>
              <li><a href="#">Kontakt</a></li>

            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="footerSection2LCR col-sm-12" align="center">
        <div id="map_canvas"></div>
      </div>
    </div>
    <div class="row">
      <div class="footerSection3L col-sm-6 text-left"><p>Text footer1</p></div>
      <div class="footerSection3R col-sm-6 text-right"><p>Text footer2</p></div>
    </div>
  </div>
</div>
</body>
</html>
