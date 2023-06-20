<?php

include 'config.php';
session_start();

// page redirect
$usermail = "";
$usermail = $_SESSION['usermail'];
if ($usermail == true) {
} else {
  header("location: index.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/home.css">
  <title>NJ HOTELS</title>
  <!-- boot -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- fontowesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- sweet alert -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="./admin/css/roombook.css">
  <style>
    #guestdetailpanel {
      display: none;
    }

    #guestdetailpanel .middle {
      height: 450px;
    }
  </style>
</head>

<body>
  <nav>
    <div class="logo">
      <p>NJ Hotels</p>
    </div>
    <ul>
      <li><a href="#firstsection">Home</a></li>
      <li><a href="#secondsection">Rooms</a></li>
      <li><a href="#thirdsection">Facilites</a></li>
      <li><a href="#contactus">contact us</a></li>
      <a href="./logout.php"><button class="btn btn-danger">Logout</button></a>
    </ul>
  </nav>

  <section id="firstsection">
    <div class="hero">
      <h1>Welcome to NJ Hotels</h1>


      <!-- bookbox -->
      <div id="guestdetailpanel">
        <form action="" method="POST" class="guestdetailpanelform">
          <div class="head">
            <h3>RESERVATION

            </h3>
            <i class="fa-solid fa-circle-xmark" onclick="closebox()"></i>
          </div>
          <div class="middle">
            <div class="guestinfo">
              <h4>Guest information</h4>
              <input type="text" name="Name" placeholder="Enter Full name">
              <input type="email" name="Email" placeholder="Enter Email">

              <?php
              $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
              ?>

              <select name="Country" class="selectinput">
                <option value selected>Select your country</option>
                <?php
                foreach ($countries as $key => $value) :
                  echo '<option value="' . $value . '">' . $value . '</option>';
                //close your tags!!
                endforeach;
                ?>
              </select>
              <input type="text" name="Phone" placeholder="Enter Phoneno">
            </div>

            <div class="line"></div>

            <div class="reservationinfo">
              <h4>Reservation information</h4>
              <select name="RoomType" class="selectinput">
                <option value selected>Type Of Room</option>
                <option value="Superior Room">SUPERIOR ROOM</option>
                <option value="Deluxe Room">DELUXE ROOM</option>
                <option value="Guest House">GUEST HOUSE</option>
                <option value="Single Room">SINGLE ROOM</option>
              </select>
              <select name="Bed" class="selectinput">
                <option value selected>Bedding Type</option>
                <option value="Single">Single</option>
                <option value="Double">Double</option>
                <option value="Triple">Triple</option>
                <option value="Quad">Quad</option>
                <option value="None">None</option>
              </select>
              <select name="NoofRoom" class="selectinput">
                <option value selected>No of Room</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
              </select>
              <select name="Meal" class="selectinput">
                <option value selected>Meal</option>
                <option value="Room only">Room only</option>
                <option value="Breakfast">Breakfast</option>
                <option value="Half Board">Half Board</option>
                <option value="Full Board">Full Board</option>
              </select>
              <div class="datesection">
                <span>
                  <label for="cin"> Check-In</label>
                  <input name="cin" type="date">
                </span>
                <span>
                  <label for="cin"> Check-Out</label>
                  <input name="cout" type="date">
                </span>
              </div>
            </div>
          </div>
          <div class="footer">
            <button class="btn btn-success" name="guestdetailsubmit">Submit</button>
          </div>
        </form>

        <!-- ==== room book php ====-->
        <?php
        if (isset($_POST['guestdetailsubmit'])) {
          $Name = $_POST['Name'];
          $Email = $_POST['Email'];
          $Country = $_POST['Country'];
          $Phone = $_POST['Phone'];
          $RoomType = $_POST['RoomType'];
          $Bed = $_POST['Bed'];
          $NoofRoom = $_POST['NoofRoom'];
          $Meal = $_POST['Meal'];
          $cin = $_POST['cin'];
          $cout = $_POST['cout'];

          if ($Name == "" || $Email == "" || $Country == "") {
            echo "<script>swal({
                        title: 'Fill the proper details',
                        icon: 'error',
                    });
                    </script>";
          } else {
            $sta = "NotConfirm";
            $sql = "INSERT INTO roombook(Name,Email,Country,Phone,RoomType,Bed,NoofRoom,Meal,cin,cout,stat,nodays) VALUES ('$Name','$Email','$Country','$Phone','$RoomType','$Bed','$NoofRoom','$Meal','$cin','$cout','$sta',datediff('$cout','$cin'))";
            $result = mysqli_query($conn, $sql);


            if ($result) {
              echo "<script>swal({
                                title: 'Reservation successful',
                                icon: 'success',
                            });
                        </script>";
            } else {
              echo "<script>swal({
                                    title: 'Something went wrong',
                                    icon: 'error',
                                });
                        </script>";
            }
          }
        }
        ?>
      </div>
    </div>
    </div>
  </section>

  <section id="secondsection">
    <div class="ourroom">
      <h1 class="text-center my-5">Our rooms</h1>
      <div class="roomselect">
        <div class="roombox">
          <div class="card" style="width: 18rem;">
            <img src="./image/hotel1photo.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Superior Room</h5>
              <h6 class="text-secondary mb-2">&#8377 3000 per night</h6>
              <div class="features mb-2">
                <h5 class="mb-2">Features</h5>
                <span class="badge" style="background-color: #EA5147;">2 Rooms</span>
                <span class="badge" style="background-color: #EA5147;">1 Room</span>
                <h5 class=" mb-2">Facilities</h5>
                <span class="badge" style="background-color: #EA5147;">Wifi</span>
                <span class="badge" style="background-color: #EA5147;">AC</span>
                <span class="badge" style="background-color: #EA5147;">Television</span>
                <button class="btn btn-outline-danger mt-3" onclick="openbookbox()">Book Now</button>
              </div>
            </div>
          </div>
        </div>
        <div class="roombox">
          <div class="card" style="width: 18rem;">
            <img src="./image/hotel2photo.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Delux Room</h5>
              <h6 class="text-secondary mb-2">&#8377 4500 per night</h6>
              <div class="features mb-2">
                <h5 class="mb-2">Features</h5>
                <span class="badge" style="background-color: #EA5147;">2 Rooms</span>
                <span class="badge" style="background-color: #EA5147;">1 Room</span>
                <h5 class=" mb-2">Facilities</h5>
                <span class="badge" style="background-color: #EA5147;">Wifi</span>
                <span class="badge" style="background-color: #EA5147;">AC</span>
                <span class="badge" style="background-color: #EA5147;">Television</span>
                <button class="btn btn-outline-danger mt-3" onclick="openbookbox()">Book Now</button>
              </div>
            </div>
          </div>
        </div>
        <div class="roombox">
          <div class="card" style="width: 18rem;">
            <img src="./image/hotel3photo.avif" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Guest Room</h5>
              <h6 class="text-secondary mb-2">&#8377 2500 per night</h6>
              <div class="features mb-2">
                <h5 class="mb-2">Features</h5>
                <span class="badge" style="background-color: #EA5147;">2 Rooms</span>
                <span class="badge" style="background-color: #EA5147;">1 Room</span>
                <h5 class=" mb-2">Facilities</h5>
                <span class="badge" style="background-color: #EA5147;">Wifi</span>
                <span class="badge" style="background-color: #EA5147;">AC</span>
                <span class="badge" style="background-color: #EA5147;">Television</span>
                <button class="btn btn-outline-danger mt-3" onclick="openbookbox()">Book Now</button>
              </div>
            </div>
          </div>
        </div>
        <div class="roombox">
          <div class="card" style="width: 18rem;">
            <img src="./image/hotel4photo.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Single Room</h5>
              <h6 class="text-secondary mb-2">&#8377 2000 per night</h6>  
              <div class="features mb-2">
                <h5 class="mb-2">Features</h5>
                <span class="badge" style="background-color: #EA5147;">2 Rooms</span>
                <span class="badge" style="background-color: #EA5147;">1 Room</span>
                <h5 class=" mb-2">Facilities</h5>
                <span class="badge" style="background-color: #EA5147;">Wifi</span>
                <span class="badge" style="background-color: #EA5147;">AC</span>
                <span class="badge" style="background-color: #EA5147;">Television</span>
                <button class="btn btn-outline-danger mt-3" onclick="openbookbox()">Book Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="thirdsection">
    <h1 class="text-center my-5">Facilities</h1>
    <div class="facility">
      <div class="card mt-3" style="width: 18rem; height:fit-content;">
        <img class="card-img-top" src="./image/swimingpool.jpg" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">Swiming Pool</p>
        </div>
      </div>
      <div class="card mt-3" style="width: 18rem;height:fit-content">
        <img class="card-img-top" src="./image/spa.jpg" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">Spa</p>
        </div>
      </div>
      <div class="card mt-3" style="width: 18rem;height:fit-content">
        <img class="card-img-top" src="./image/food.jpg" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">24*7 Restaurants</p>
        </div>
      </div>
      <div class="card mt-3" style="width: 18rem;height:fit-content">
        <img class="card-img-top" src="./image/gym.jpg" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">24*7 Gym</p>
        </div>
      </div>
    </div>
  </section>
  <div class="contact" id="contactus">
    <h1 class="text-center">Contact</h1>
    <p class="d-flex justify-content-center align-items-center">Phone : +91 9952259514<br>Email : njwebdesigning@gmail.com</p>
  </div>
  <footer style="min-height: 20vh;" class="foot d-flex justify-content-center align-items-center">
    <h5 class="text-center">Designed By njwebdesigning</h5>
  </footer>
</body>

<script>
  var bookbox = document.getElementById("guestdetailpanel");

  openbookbox = () => {
    bookbox.style.display = "flex";
  }
  closebox = () => {
    bookbox.style.display = "none";
  }
</script>

</html>