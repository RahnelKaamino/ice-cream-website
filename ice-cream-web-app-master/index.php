<?php

include_once 'includes/dbh.php';
include_once 'URL.PHP';

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Yummy scoops!</title>
  <link rel="icon" href="./images/favicon.png" type="image/gif" sizes="20x20">
  <link href="styles/style.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <script src='URL.js'></script>
<style>

.table_div {
  margin-left: auto; 
  margin-right: auto;
  width: 50%;
}

.styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 100%;
    box-shadow: 0 0 20px "rgba(0, 0, 0, 0.15)";
}

.styled-table thead tr {
    background-color: #5356AD;
    color: #ffffff;
    text-align: left;
}

.styled-table th,
.styled-table td {
    padding: 12px 15px;
}

.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}

.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}

.deleteBtn {
  cursor: pointer;
  background-color: #999EDE;
  border-radius: 3px;
  padding: 5px 10px;
}

.th_buttons {
  width: 100px;
}

</style>
</head>


<body>
  <header>
    <div class="row" id="navbarSection">
      <ul class="nav">
        <li>
          <a href="#homeSection">HOME</a>
        </li>
        <li>
          <a href="#aboutUsSection">ABOUT US</a>
        </li>
        <li>
          <a href="#flavourSection">FLAVOURS</a>
        </li>
        <li>
          <a href="#contactSection">CONTACT</a>
        </li>
      </ul>
    </div>
    <div class="title" id="homeSection">
      <p>Yummy scoops ;)</p>
      <a href="#aboutUsSection">
        <i class="fa fa-angle-double-down down-arrow"></i>
      </a>
    </div>
  </header>
  <div class="about-us-container" id="aboutUsSection">
    <div class="column">
      <div class="slideshow-container">
        <div class="mySlides fade">
          <img src="./images/carousel-1.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
          <img src="./images/carousel-2.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
          <img src="./images/carousel-3.jpg" style="width:100%">
        </div>
        <div class="mySlides fade">
          <img src="./images/carousel-4.jpg" style="width:100%">
        </div>
        <div class="mySlides fade">
          <img src="./images/carousel-5.jpg" style="width:100%">
        </div>
      </div>


    </div>
    <div class="column description-container">
      <div class="description">
        <p class="about-us-title">About us</p>
        <p class="about-us-content">We are a group of students doing  business!
          <br>
          <br>We serve happiness with smile ;)
        </p>
        <a class="button" href="#flavourSection">
          <p>Check out the flavours</p>
        </a>

      </div>


    </div>
  </div>

  <div class="flavour-section" id="flavourSection">
    <p class="flavour-header">Flavours</p>
    <p>
      <div class="table_div">
    <table class="styled-table center">
            <tr>
              <th>Flavour</th>
              <th>Price</th>
              <!-- DO NOT REMOVE THE HEADER BETWEEN THESE COMMENTS THIS IS FOR THE BUTTON COLUMN -->
              <th class="th_buttons"></th>
              <th class="th_buttons"></th>
              <!-- DO NOT REMOVE THE HEADER BETWEEN THESE COMMENTS THIS IS FOR THE BUTTON COLUMN -->
            </tr>
            <?php if (isset(json_decode($response)->data)): ?>
              <?php foreach (json_decode($response)->data as $key => $value): ?>
            <tr>
              <td><?= $value->name; ?></td>
              <td>₱<?= $value->price; ?></td>
              <td><div class="deleteBtn" onclick="editFood(<?= $value->id; ?>, '<?= $value->name; ?>', <?= $value->price; ?>)">EDIT</div></td>
              <td><div class="deleteBtn" onclick="deleteFood(<?= $value->id; ?>)">DELETE</div></td>
            </tr>
              <?php endforeach; ?>
            <?php endif; ?>
    </table>
    <form action="http://localhost/ice-cream-web-app-master/add-food">
      <button>Add Flavor</button>
    </form>
  </div>
<br> 
<br>
  </div>
  <div class="contact-container" id="contactSection">
    <div class="contact-section">
      <p class="subtext">Call for orders</p>
      <div class="card phone-section">
        <div class="contactNumber">
          <i class="fa fa-phone phone-icon"></i>
          <p>09060000000</p>
        </div>
      </div>
      <p class="subtext visti-text">or visit us...</p>
      <div class="card">
        <div class="address">
          <i class="fa fa-map-signs"></i>
          <p>Xavier Heights, Upper Balulang, Cagayan de Oro City</p>
        </div>
      </div>
    </div>
  </div>
  <footer>
    <div class="up-arrow-section">
      <a href="#navbarSection">
        <i class="fa fa-angle-double-up up-arrow"></i>
      </a>
    </div>
  </footer>
</body>
<script src='./scripts/script.js'></script>

</html>