<!DOCTYPE html>
<head>
  <link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />
  <meta name="apple-mobile-web-app-title" content="CodePen">
  
  <link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />
  
  <link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111" />
    
   
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
  <style>
  @import 'https://fonts.googleapis.com/css?family=Montserrat|Open+Sans';
  .navbar-brand {
    font-family: 'Montserrat', sans-serif;
    text-transform: uppercase
  }
  
  .navbar .nav {
    font-family: 'Open Sans', sans-serif;
    text-transform: uppercase;
    letter-spacing: 3px;
    font-size: 1.2rem
  }
  
  .navbar-inverse {
    background-color: #003300
  }
  
  .navbar-inverse .navbar-nav>.active>a:hover,
  .navbar-inverse .navbar-nav>li>a:hover,
  .navbar-inverse .navbar-nav>li>a:focus {
    background-color: #002200
  }
  
  .navbar-inverse .navbar-nav>.active>a,
  .navbar-inverse .navbar-nav>.open>a,
  .navbar-inverse .navbar-nav>.open>a,
  .navbar-inverse .navbar-nav>.open>a:hover,
  .navbar-inverse .navbar-nav>.open>a,
  .navbar-inverse .navbar-nav>.open>a:hover,
  .navbar-inverse .navbar-nav>.open>a:focus {
    background-color: #003300
  }
  
  .dropdown-menu {
    background-color: #006B00
  }
  
  .dropdown-menu>li>a:hover,
  .dropdown-menu>li>a:focus {
    background-color: #002200
  }
  
  .navbar-inverse {
    background-image: none;
  }
  
  .dropdown-menu>li>a:hover,
  .dropdown-menu>li>a:focus {
    background-image: none;
  }
  
  .navbar-inverse {
    border-color: #003300
  }
  
  .navbar-inverse .navbar-brand {
    color: #FFFFFF
  }
  
  .navbar-inverse .navbar-brand:hover {
    color: #FFCC00
  }
  
  .navbar-inverse .navbar-nav>li>a {
    color: #FFFFFF
  }
  
  .navbar-inverse .navbar-nav>li>a:hover,
  .navbar-inverse .navbar-nav>li>a:focus {
    color: #FFCC00
  }
  
  .navbar-inverse .navbar-nav>.active>a,
  .navbar-inverse .navbar-nav>.open>a,
  .navbar-inverse .navbar-nav>.open>a:hover,
  .navbar-inverse .navbar-nav>.open>a:focus {
    color: #FFCC00
  }
  
  .navbar-inverse .navbar-nav>.active>a:hover,
  .navbar-inverse .navbar-nav>.active>a:focus {
    color: #FFCC00
  }
  
  .dropdown-menu>li>a {
    color: #FFFFFF
  }
  
  .dropdown-menu>li>a:hover,
  .dropdown-menu>li>a:focus {
    color: #FFCC00
  }
  
  .navbar-inverse .navbar-nav>.dropdown>a .caret {
    border-top-color: #FFFFFF
  }
  
  .navbar-inverse .navbar-nav>.dropdown>a:hover .caret {
    border-top-color: #FFFFFF
  }
  
  .navbar-inverse .navbar-nav>.dropdown>a .caret {
    border-bottom-color: #FFFFFF
  }
  
  .navbar-inverse .navbar-nav>.dropdown>a:hover .caret {
    border-bottom-color: #FFFFFF
  }
  
  
  .dropdown {
    position: relative;
    display: inline-block;
  }
  .dropdown-menu {
    display: none;
    position: absolute;
    z-index: 1;
  }
  .dropdown:hover .dropdown-menu {
    display: block;
  }
  </style>
</head>
<body>
  <header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
    <div class="container">
      <div class="navbar-header">
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="./" class="navbar-brand">Hood App</a>
      </div>
      <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
        <ul class="nav navbar-nav navbar-right">
          
          <li class="dropdown">
            <a class="dropbtn" href="#">Book<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="AddBook.php">Add Book</a></li>
              <li><a href="AdminHome.php">View Book</a></li>
              
            </ul>
          </li>
          <li class="dropdown">
            <a class="dropbtn" href="#">Librarian <b class="caret"></b></a>
            <ul class="dropdown-menu">
            <li><a href="Addlib.php">Add Librarian</a></li>
              <li><a href="viewlib.php">View Librarian</a></li>
            
            </ul>
          </li>
          <li class="dropdown">
            <a class="dropbtn" href="#">Student <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="viewstudent.php">View Student</a></li>
              <li><a href="viewstudentfeedback.php">View Student Feedback</a></li>
            
            </ul>
          </li>
          

      <li><a href="index.php">Logout</a> </li>
        </ul>
      </nav>
    </div>
  </header>

<br><br>
<section id="about-area" class="section-padding">
<div class="container" >
            <div class="row" style="margin-bottom:20px">
                <!-- Section Title Start -->
                
                <div class="col-lg-3">
                </div>
                <div class="col-lg-6">
                    <div class="section-title  text-center">
                        <h2>View Books</h2>

                                                   
                    </div>
                </div>
                 <div class="col-lg-3">
                </div>
                <!-- Section Title End -->
            </div>

 <table class="table table-striped table-hover table-bordered" style="text-align:center">
  <tr style='background: whitesmoke;'>
   <th>BOOK_ID</th>
   <th>Book_Name</th>
   <th>Book_Author</th>
   <th>Book_Publisher</th>
  </tr>

<?php 
  
  $con = mysqli_connect("localhost","sa56","password");

  mysqli_select_db($con,"team4db");

    $query = "select * from book";

    $res = mysqli_query($con,$query) or die(mysqli_error($con));

  while($row = mysqli_fetch_array($res))
    {
 ?>
    <tr>
     <td><?php echo $row[0]; ?></td>
     <td><?php echo $row[1]; ?></td>
     <td><?php echo $row[2]; ?></td>
     <td><?php echo $row[3]; ?></td>
      </tr>
  
<?php
   
  }
  ?>
  </table>
</div>
</body>
</html>