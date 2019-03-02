<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="theme-color" content="#4db6ac">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
  <!-- Add to homescreen for Chrome on Android -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="icon" sizes="192x192" href="../images/logo.jpg">

  <!-- Add to homescreen for Safari on iOS -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="Material Design Lite">
  <link rel="apple-touch-icon-precomposed" href="../images/logo.jpg">



  <link rel="shortcut icon" href="../images/logo.jpg">
  <link rel="stylesheet" href="manifest.json">
  <title>GIT I&E</title>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <style media="screen">
    header, main, footer,.page-content,.navbar{
padding-left: 300px;
}
@media only screen and (max-width : 992px) {
header, main, footer,.page-content,.navbar {
  padding-left: 0;
}
}

@media only screen and (max-width : 992px) {
  .left {
    float: left;
    margin-left: 25px;
  }
}
</style>
</head>

<body>

  <div class="navbar-fixed">
    <nav class="navbar">
      <div class="nav-wrapper teal lighten-2">
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>

        <a href="#" class="brand-logo left"> &nbsp GIT I & E</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">

        </ul>
      </div>
    </nav>
  </div>

  <ul id="slide-out" class="side-nav fixed">
    <li>
      <div class="user-view">
        <div class="background">
          <img src="image.jpg">
        </div>
        <center>
          <a href="#!user"><img class="circle" src="default-user.png"></a>
          <a href="#!name"><span class="white-text name" style="font-size:25px;">Welcome</span></a>
          <a href="#" class="white-text name">Prof. Eddie Jessup</a>
        </center>
      </div>
    </li>
    <li class="active"><a class="waves-effect" href="administrate.php"><i class="material-icons">add_box</i>Create Class</a></li>
    <li><a class="waves-effect" href="viewAllCompetition.php"><i class="material-icons">apps</i>View my classes</a></li>
    <li>
      <div class="divider"></div>
    </li>
    <li><a class="waves-effect" href="../index2.html"><i class="material-icons">home</i>Home</a></li>
  </ul>
  </ul>

  <div class="page-content">
    <div id="main-content">
      <h5 style="padding-left:10px;">Class List</h5>

      <table class="bordered">
        <thead>
          <tr>
              <th>Class Name</th>
              <th>No. synopsis submitted</th>
              <th>No. project submitted</th>
              <th>Actions</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Software Design</td>
            <td>25</td>
            <td>20</td>
            <td><a href="#">Backup & Delete</a>  &nbsp;&nbsp;<a href="#">Delete</a></td>
          </tr>
          <tr>
            <td>Computer Graphics</td>
            <td>20</td>
            <td>15</td>
            <td><a href="#">Backup & Delete</a>  &nbsp;&nbsp;<a href="#">Delete</a></td>
          </tr>
        </tbody>
      </table>

      </div>
    </div>

  </div>

</body>

</html>



<script type="text/javascript">
  // Initialize collapse button
  $(".button-collapse").sideNav();
  // Initialize collapsible (uncomment the line below if you use the dropdown variation)
  //$('.collapsible').collapsible();
  $('.button-collapse').sideNav({
    menuWidth: 300, // Default is 300
    edge: 'left', // Choose the horizontal origin
    closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
    draggable: true, // Choose whether you can drag to open on touch screens,
    onOpen: function(el) { /* Do Stuff   */ }, // A function to be called when sideNav is opened
    onClose: function(el) { /* Do Stuff */ }, // A function to be called when sideNav is closed
  });
</script>
