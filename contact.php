<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Welcome to the about page for Qualitec&reg;! Here you can learn more about the recruiting firm that's served Houston for over 25 years!">
    <meta name="author" content="Trey Foster">
    <meta name="keywords" content="Recruiting">
    <meta name="rating" content="General">

    <title>Qualitec&reg; | About</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>


  <?php include 'nav.php'; ?>


  <br />
  <br />

    <!-- Page Content -->
    <div class="about-section" style="min-height:80%;">

        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <h2 class="section-heading">Contact</h2>
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <?php if($_GET['delivery-made'] == true){ echo '<'; }else{} ?>
                </div>
            </div>

        </div>


        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                  <form action="" method="post" enctype="multipart/form-data">
      							<div class="form-group">
      								<label for="name">Your Name:</label>
      								<input type="text" class="form-control" id="name" name="name" placeholder="John Smith" required>
      							</div>
      							 <div class="form-group">
      								<label for="email">Your Email:</label>
      								<input type="text" class="form-control" id="email" name="email" placeholder="john-smith@gmail.com" required>
      							</div>
                    <div class="form-group">
                      <label for="message">Your Message:</label>
                      <textarea class="form-control" rows="5" id="message" required></textarea>
                    </div>
                    <p><button type="submit" class="btn btn-default">Send</button></p>
                </form>

                </div>
            </div>

        </div>

                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-sm-6">
                            <h3>Our Info</h3>
                            <p>Qualitec&reg; Professional Services LP </p>
                            <p>15810 Park Ten Place, Suite 255 </p>
                            <p>Houston, Texas 77084 </p>
                            <p>Phone: 281-647-9300</p>
                            <p>Fax: 281-453-2967</p>
                        </div>
                    </div>

                </div>

    </div>
        <!-- /.container -->


        <div class="banner">

            <div class="container">

                <div class="row">
                    <div class="col-lg-6">
                        <h2>Connect to Qualitec&reg;:</h2>
                    </div>
                    <div class="col-lg-6">
                        <ul class="list-inline banner-social-buttons">
                            <li>
                                <a href="https://twitter.com/QualitecPS" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/in/debbielyon1" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            <!-- /.container -->

        </div>


    <?php include 'footer.php'; ?>


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
