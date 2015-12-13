<!DOCTYPE html>
<html>
  <head>
    <title>Ase Attire - Store</title>
    <meta name="description" content="The online store for Ase Attire, a Philly-based clothing company.">

    <link href="favicon.png" rel="icon">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
  </head>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-58888500-4', 'auto');
  ga('send', 'pageview');

</script>
  <body>
    <div id="sidebar-button">
      <i class="fa fa-bars"></i>
    </div>
    <div id="sidebar">
      <ul>
        <li><a href="./">Home</a></li>
        <li class="active"><a href="#">Store</a></li>
        <li><a href="./about.html">About</a></li>
        <li><a href="./contact.php">Contact</a></li>
        <li id="close"><a href="#"><i class="fa fa-close"></i></a></li>
      </ul>
    </div>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid text-center">
        <a href="./" id="navbar-header"><span id="ase">Ase</span><span id="attire">Attire</span> &#8984;</a>
      </div>
    </nav>
    <div id="overlay"></div>
    <div id="sidebar-push">
      <div class="jumbotron" id="store1">
        <div class="container text-center">
          <h1>STORE</h1>
          <div class="storeItem">
            <img class="img-thumbnail itemImg" src="http://i.imgur.com/DytAhqA.jpg?1">
            <p class="itemName">Shirt #1</p>
            <a class="btn btn-lg btn-info" data-toggle="modal" data-target="#preorderMessageModal" href="#">Pre-Order</a>
          </div>
        </div>
      </div>
      <div class="jumbotron footer" id="storeFooter">
        <div class="container text-center">
          <div class="col-md-12">
            <a class="btn btn-default btn-circle instagram" href="https://instagram.com/ase_attire_co/"><i class="fa fa-instagram"></i></a>
            <a class="btn btn-default btn-circle facebook" href="#"><i class="fa fa-facebook"></i></a>
            <a class="btn btn-default btn-circle twitter" href="https://twitter.com/AseAttire"><i class="fa fa-twitter"></i></a><br><br>
          </div>
          <div class="col-md-12">
            <span class="leungEnterprisesMsg">Another classy design by <a href="http://leung.enterprises/" class="leungEnterprises">Leung Enterprises</a></span>
          </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="scripts.js"></script>
    <div class="modal fade" id="preorderMessageModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
            <h4 class="modal-title" id="preorderMessageModalLabel">Pre-Orders Not Available Yet</h4>
          </div>
          <div class="modal-body">
            <p>Unfortunately, we can't process your pre-order right now.  We appreciate your interest, though.  If you have any questions feel free to <a href="./contact.php">contact</a> us!</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Okay</button>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
