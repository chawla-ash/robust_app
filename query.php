
<?php
	session_start();
	if(!isset($_SESSION['person'])){
		header("Location: ./signup.php");
	}else{

include('./head.php'); 
?>
<title> Home </title>
</head>
<body class="green lighten-2">

<?php include('./nav.php'); ?>

 <div class="parallax-container">
      <div class="parallax"><img src="img/cover.png"></div>
</div>
<!-- This Code is designed and developed by Ashish Chawla -->



<div class="container">
<h3 class="center-align"> Fill up this form</h3>
<h4 class="center-align">And we shall convey the same to authority in-charge</h4>
<div class="card-panel hoverable">
    <form class="col s12 l8" action="querypros.php" method="POST" enctype="multipart/form-data">

    <input type="hidden" name="username" value="<?php echo $_SESSION['person']; ?>">
  
    <div class="file-field input-field">
      <div class="btn">
        <span>File</span>
        <input type="file" name="img">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
    </div>
    </div>

     <div class="input-field col s12">
          <textarea id="textarea1" name="desc" class="materialize-textarea"></textarea>
          <label for="textarea1">Description of the Query</label>
        </div>

  <div id="locationField" class="input-field col s12">
      <input id="autocomplete" name="address" onFocus="geolocate()" type="text">
     
    </div>
 <table id="address">
      <tr>
        <td class="label">Street address</td>
        <td class="wideField" colspan="3"><input class="field" name="street" id="street_number" ></input></td>
      </tr>
      <tr>
        <td class="label">City</td>
        <!-- Note: Selection of address components in this example is typical.
             You may need to adjust it for the locations relevant to your app. See
             https://developers.google.com/maps/documentation/javascript/examples/places-autocomplete-addressform
        -->
        <td class="wideField" colspan="3"><input class="field" name="city" id="locality" ></input></td>
      </tr>
      <tr>
        <td class="label">State</td>
        <td class="slimField"><input class="field" name="state" id="administrative_area_level_1" ></input></td>
        <td class="label">Zip code</td>
        <td class="wideField"><input class="field" name="zip" id="postal_code" ></input></td>
      </tr>
      <tr>
        <td class="label">Country</td>
        <td class="wideField" colspan="3"><input class="field" name="country" id="country" ></input></td>
      </tr>
    </table>


      <script type="text/javascript">
        
      // This example displays an address form, using the autocomplete feature
      // of the Google Places API to help users fill in the information.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
          document.getElementById(component).value = '';
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
          }
        }
      }

      </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC_vB5-cVliYDE9YLkd4l7eVjsr3Z15ymY&libraries=places&callback=initAutocomplete"
        async defer></script>


	<center><input type="submit" class="waves-effect waves-light btn" value="Submit"></center>
</form>
</div>
<br>
</div>



<?php include('./footer.php'); ?>

<?php } ?>