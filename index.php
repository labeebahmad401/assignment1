<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>About Me | Portfolio</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/one-page-wonder.min.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Portfolio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./contact-us.php">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead text-center text-white" style="background: url('img/04.jpg'); background-position:center; background-size:100%">
      <div class="masthead-content">
        <div class="container">
          
          <div style="background: rgba(108,117,125, 0.5);">
            <h1 class="masthead-heading mb-0">About Me</h1>
            <!-- <h2 class="masthead-subheading mb-0">Will Rock Your Socks Off</h2> -->
          </div>
        </div>
      </div>
    </header>
    



    <div class="pt-5"></div>
    


    <div class="container">
      <div class="row">
        
        <div class="col-lg-12">
          <div class="card">
            <img class="card-img-top" src="img/profile.png" style="max-width: 100px;" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Labeeb Ahmad</h5>
              <p class="card-text">Before Coming to this workshop, I worked as PHP Developer at Dotlogics. During that time, I worked at about 5 custom applications. Mostly the existing codebase was in Laravel. </p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Following are the projects I have worked on as team member.</li>
            </ul>
          </div>
        </div>

      </div>
    </div>

    <div class="container mt-5">
      <div class="row">
        <h2 class="text-center" style="display: block;">My Projects</h2>
      </div>
    </div>
    

    <?php    

      $projects = [
        ['name' => 'Kotore.com', 'description' => 'Developed custom CMS(with AdminLTE) & Online Store Using Cardknox API ', 'image' => 'kotore.jpg' ],
        ['name' => 'BEP Productions', 'description' => 'Developed Backend for Film Productions House using Voyager Admin. ', 'image' => 'bep.jpg' ],
        ['name' => 'Ecommerce store & website for Le Monde Du Cheval', 'description' => 'Le Monde Du Cheval', 'image' => 'mondel-cheval.jpg' ],
        ['name' => 'NYC Religious Leader\'s Website', 'description' => 'Developed Backend & integrated it with front end. Includes other API integration such as Twitter, Instagram etc', 'image' => 'coa.jpg' ],

      ];

    ?>
    

    <?php foreach ( $projects as $key => $project ) : ?>

      <?php if( $key % 2 == 0 ) : ?>
  
          <section>
            <div class="container">
              <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2">
                  <div class="p-5">
                    <img class="img-fluid" src="img/<?php echo $project['image'] ?>" alt="">
                  </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                  <div class="p-5">
                    <h2 class="display-4"><?php echo $project['name'] ?></h2>
                    <p><?php echo $project['description'] ?> </p>
                  </div>
                </div>
              </div>
            </div>
          </section>

      <?php else: ?>      

        <section>
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-6">
                <div class="p-5">
                  <img class="img-fluid" src="img/<?php echo $project['image'] ?>" alt="">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <h2 class="display-4"><?php echo $project['name'] ?></h2>
                  <p><?php echo $project['description'] ?> </p>
                </div>
              </div>
            </div>
          </div>
        </section>

      <?php endif; ?>

    <?php endforeach; ?>

    
    <!-- Footer -->
    <footer class="py-5 bg-black">
      <div class="container">
        <p class="m-0 text-center text-white small">Copyright &copy; Example.com 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
