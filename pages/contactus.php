<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--><html class="no-js"><!--<![endif]-->
<head>
<title>Επικοινωνία</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<link href='http://fonts.googleapis.com/css?family=Arvo:400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css">
<script src="js/modernizr.js"></script>
</head>
<body>
<div class="wrapper">
  <header class="cf">
    <div id="logo"><a href="index.html"><img src="img/logo.png" alt=""></a></div>
    <ul id="social-bar" class="cf">
      <li class="dribbble"><a href="#" title="Dribbble"></a></li>
      <li class="facebook"><a href="#" title="Facebook"></a></li>
      <li class="googleplus"><a href="#" title="googleplus"></a></li>
      <li class="twitter"><a href="#" title="twitter"></a></li>
    </ul>
  </header>
  <nav class="cf">
    <ul id="nav" class="sf-menu">
      <li class="current-menu-item"><a href="index.html">ΑΡΧΙΚΗ</a></li>
      
      <li><a href="#">ΤΟ ΣΧΟΛΕΙΟ ΜΑΣ</a>
        <ul>
          <li><a href="page.html">Λίγα Λόγια</a></li>
          <li><a href="page-typography.html">Σύλλογος Γονέων</a></li>
          <li><a href="page-elements.html">Εσωτερικός Κανονισμός Λειτουργίας</a></li>
          <li><a href="page-elements.html">Διδακτικό Προσωπικό</a></li>
        </ul>
      </li>
      <li><a href="#">ΓΙΑ ΤΟΥΣ ΓΟΝΕΙΣ</a>
        <ul>
          <li><a href="page.html">Ωρολόγιο Πρόγραμμα</a></li>
           <li><a href="page-typography.html">Ενημερώσεις</a></li>
        </ul>
      </li>
      <li><a href="#">ΕΥΡΩΠΑΪΚΑ ΠΡΟΓΡΑΜΜΑΤΑ</a>
        <ul>
          <li><a href="page.html">e-tunning</a></li>
          <li><a href="page-typography.html">Erasmus+</a></li>
        </ul>
      </li>
      <li><a href="work.html">ΔΡΑΣΕΙΣ</a></li>
      <li><a href="contactus.php">ΕΠΙΚΟΙΝΩΝΙΑ</a></li>
    </ul>
  </nav>
  <div id="main" class="cf">
    <div class="page-content">
      <div class="entry-content cf">
        <h2  class="heading">ΕΠΙΚΟΙΝΩΝΙΑ</h2>
        <div id="map"></div>
        <p> <strong>Διεύθυνση</strong><br>
          Caguama 1221 Julian Pinero 44321, Ontario Canada<br>
          <strong>Telephone</strong><br>
          (333) 1276543, (333) 354128<br>
        </p>
        <div class="block-divider"></div>
        <h3>Γράψτε το μηνυμά σας στη φόρμα</h3>
        <form id="contactForm" action="#" method="post">
          <fieldset>
            <p>
              <label for="name">Όνομα</label>
              <input name="name"  id="name" type="text" class="form-poshytip" title="Enter your full name">
            </p>
            <p>
              <label for="email">Email</label>
              <input name="email"  id="email" type="text" class="form-poshytip" title="Enter your email address">
            </p>
            
            <p>
              <label for="comments">Μήνυμα</label>
              <textarea  name="comments"  id="comments" rows="5" cols="20" class="form-poshytip" title="Enter your comments"></textarea>
            </p>
            <input type="hidden" value="ENTER SUBJECT HERE" name="subject" id="subject">
            <p>
              <input type="button" value="Αποστολή" name="submit" id="submit">
              <span id="error" class="warning">Message</span></p>
          </fieldset>
        </form>
        <p id="sent-form-msg" class="success">Form data sent. Thanks for your comments.</p>
      </div>
    </div>
  </div>
  <ul  class="widget-cols cf">
    <li class="first-col">
      <div class="widget-block">
        <h4>Σύνδεση</h4>
        <p>Πατήστε παρακάτω για να συνδεθείτε.</p>
        <p><a href="project.html" class="action-button">ΣΥΝΔΕΣΗ</a></p>
      </div>
    </li>
    <li class="second-col">
      <div class="widget-block">
        <h4>Δρασεις</h4>
        <p>Πατήστε παρακάτω για να δείτε φωτογραφίες από τις δράσεις του σχολείου μας.</p>
        <p><a href="project.html" class="action-button">ΠΕΡΡΙΣΣΟΤΕΡΑ</a></p>
      </div>
    </li>
    <li class="third-col">
      <div class="widget-block">
        <h4>DUMMY TEXT</h4>
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.</p>
      </div>
    </li>
    <li class="fourth-col">
      <div class="widget-block">
        <h4>ΚΑΤΗΓΟΡΙΕΣ</h4>
        <ul>
            <li class="cat-item"><a href="#">Ωρολόγιο Πρόγραμμα</a></li>
          <li class="cat-item"><a href="#">Ανακοινώσεις</a></li>
          <li class="cat-item"><a href="#">Σύλλογος Γονέων</a></li>
          
        </ul>
      </div>
    </li>
    <li class="scroll"></li>
  </ul>
  <div class="footer-divider"></div>
  <footer class="cf">Copyright &copy; 2015 Δημοτικό Σχολείο Σκουτάρεως | Design by: <a href="http://informatics.teicm.gr/">ΤΕΙ Κεντρικής μακεδονίας Τμήμα Μηχανικών Πληροφορικής</a></footer>
</div>
<script src="js/jquery.js"></script>
<script src="js/custom.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="js/gmaps.js"></script>
<script src="js/superfish-1.4.8/js/hoverIntent.js"></script>
<script src="js/superfish-1.4.8/js/superfish.js"></script>
<script src="js/superfish-1.4.8/js/supersubs.js"></script>
<script src="js/css3-mediaqueries.js"></script>
<script src="js/nivoslider.js"></script>
<script src="js/tabs.js"></script>
<script src="js/form-validation.js"></script>
<script>
var map;
$(document).ready(function () {
    map = new GMaps({
        div: '#map',
        lat: -12.043333,
        lng: -77.028333
    });
    map.addMarker({
        lat: -12.043333,
        lng: -77.028333
    });
});
</script>
</body>
</html>