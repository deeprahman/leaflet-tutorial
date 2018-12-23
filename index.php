<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>


  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
 

  <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"
   integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
   crossorigin=""></script>


  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css"
   integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
   crossorigin=""/>

   

  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="example-container">
<div class="row">
  <section class="col col-2 header">Location</section>
  <section class="col col-10">
    <div class="row">
      <section class="col col-6">
        <div id="MapLocation" style="height: 350px"></div>
      </section>
    </div>
    <div class="row">
      <section class="col col-3">
        <label class="input">
          <input id="Latitude" placeholder="Latitude" name="Location.Latitude" />
          <!-- @Html.TextBoxFor(m => m.Location.Latitude, new {id = "Latitude", placeholder = "Latitude"}) -->
        </label>
      </section>
      <section class="col col-3">
        <label class="input">
          <input id="Longitude" placeholder="Longitude" name="Location.Longitude" />
          <!-- @Html.TextBoxFor(m => m.Location.Longitude, new {id = "Longitude", placeholder = "Longitude"}) -->
        </label>
      </section>
    </div>
  </section>
</div>
</div>
<script src="script.js"></script>
</body>
</html>
