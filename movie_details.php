<?php
require'admin/connect.php';
$imdbID =$_GET['imdbID'];
//Search query.
   $date =$db->prepare('select * from searched_movie where imdbID = "'.$imdbID.'" order by search_id limit 1');
   $date->execute();


?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from htmlstream.com/preview/unify-v2.6.2/unify-main/home/home-discover.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Apr 2019 09:39:28 GMT -->
<head>
  <!-- Title -->
  <title>Movie Details</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <!-- Favicon -->
  <link rel="shortcut icon" href="favicon.ico">
  <!-- Google Fonts -->
   <!-- CSS Global Compulsory -->
  <link rel="stylesheet" href="assets/vendor/bootstrap/bootstrap.min.css">
  <!-- CSS Global Icons -->
  <link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.css">
  <link rel="stylesheet" href="assets/vendor/icon-line/css/simple-line-icons.css">
  <link rel="stylesheet" href="assets/vendor/icon-etlinefont/style.css">
  <link rel="stylesheet" href="assets/vendor/icon-line-pro/style.css">
  <link rel="stylesheet" href="assets/vendor/icon-hs/style.css">
  <link rel="stylesheet" href="assets/vendor/animate.css">
  <link rel="stylesheet" href="assets/vendor/hs-megamenu/src/hs.megamenu.css">
  <link rel="stylesheet" href="assets/vendor/hamburgers/hamburgers.min.css">

  <!-- CSS Unify -->
  <link rel="stylesheet" href="assets/css/unify-core.css">
  <link rel="stylesheet" href="assets/css/unify-components.css">
  <link rel="stylesheet" href="assets/css/unify-globals.css">

  <!-- CSS Customization -->
  <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body>
  <main>



    <!-- Header -->
      <?php include'header.php'?>

    <!-- End Header -->
    <!-- Promo Block - Parallax -->
    <!-- Product Blocks -->
    <section class="g-bg-secondary g-pt-100 g-pb-30">
     <div class="container">
      <div class="row">
        <?php while ($row= $date->fetch(PDO::FETCH_ASSOC)) {?>
        <div class="col-sm-6 col-md-4 g-mb-30">
            <div class="card" style="width: 30rem;">
              <img class="card-img-top" src="<?php echo $row['Poster'];?>" alt="Card image cap">
              <div class="card-body">
                <p class="card-text"><?php echo $row['Plot'];?></p>
              </div>
            </div>
        </div>
      

        <div class="col-sm-6 col-md-2 g-mb-40">
            
         
        </div>

        <div class="col-sm-6 col-md-4 g-mb-30">
                <h1><strong><?php echo $row['Title'];?></strong></h1>
                <p><b>Year:</b><span>&nbsp;<?php echo isset($row['Year']) ? $row['Year'] : "--"; ?></span></p>
                <p><b>Released:</b><span>&nbsp;<?php echo isset($row['Released']) ? $row['Released'] : "--"; ?></span></p>
                <p><b>Rating:</b><span>&nbsp;<?php echo isset($row['imdbRating']) ? $row['imdbRating'] : "--"; ?></span></p>
                <p><b>Running:</b><span>&nbsp;<?php echo isset($row['Running']) ? $row['Running'] : "--"; ?></span></p>
                <p><b>Director:</b><span>&nbsp;<?php echo isset($row['Director']) ? $row['Director'] : "--"; ?></span></p>
                <p><b>Language:</b><span>&nbsp;<?php echo isset($row['Language']) ? $row['Language'] : "--"; ?></span></p>
                <p><b>Genre:</b><span>&nbsp;<?php echo isset($row['Genre']) ? $row['Genre'] : "--"; ?></span></p>
                <p><b>Country:</b><span>&nbsp;<?php echo isset($row['Country']) ? $row['Country'] : "--"; ?></span></p>
                <p><b>Awards:</b><span>&nbsp;<?php echo isset($row['Awards']) ? $row['Awards'] : "--"; ?></span></p>
                <p><b>Writter:</b><span>&nbsp;<?php echo isset($row['Writter']) ? $row['Writter'] : "--"; ?></span></p>
                <p><b>Type:</b><span>&nbsp;<?php echo isset($row['Type']) ? $row['Type'] : "--"; ?></span></p>
                <p><b>Production:</b><span>&nbsp;<?php echo isset($row['Production']) ? $row['Production'] : "--"; ?></span></p>
                <p><b>DVD:</b><span>&nbsp;<?php echo isset($row['DVD']) ? $row['DVD'] : "--"; ?></span></p>
                <p><b>BoxOffice:</b><span>&nbsp;<?php echo isset($row['BoxOffice']) ? $row['BoxOffice'] : "--"; ?></span></p>
        </div>
      </div>
      <?php } ?>
  </div>
    </section>
    <!-- End Product Blocks -->




  <?php include'footer.php'?>


  

  </main>


  <!-- JS Global Compulsory -->
  <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
  <script src="assets/vendor/jquery-migrate/jquery-migrate-1.1.0.min.js"></script>
  <script src="assets/vendor/popper.js/popper.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>


  <!-- JS Implementing Plugins -->
  <script src="assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
  <script src="assets/vendor/appear.js"></script>
  

  <!-- JS Unify -->
  <script src="assets/js/hs.core.js"></script>
  <script src="assets/js/helpers/hs.hamburgers.js"></script>
  <script src="assets/js/components/hs.tabs.js"></script>
  <script src="assets/js/components/hs.progress-bar.js"></script>
  <script src="assets/js/components/hs.rating.js"></script>
  <script src="assets/js/components/hs.counter.js"></script>
  <script src="assets/js/components/hs.carousel.js"></script>
  <script src="assets/js/components/hs.go-to.js"></script>

  <!-- JS Customization -->
  <script src="assets/js/custom.js"></script>


  <!-- CSS -->
  <link rel="stylesheet" href="assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.min.css">
  <link rel="stylesheet" href="assets/vendor/chosen/chosen.css">
  <link rel="stylesheet" href="assets/vendor/prism/themes/prism.css">
  <link rel="stylesheet" href="assets/vendor/custombox/custombox.min.css">
 
  <!-- End CSS -->

  <!-- Scripts -->

  <script src="assets/vendor/chosen/chosen.jquery.js"></script>
  <script src="assets/vendor/image-select/src/ImageSelect.jquery.js"></script>
  <script src="assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="assets/vendor/custombox/custombox.min.js"></script>
  <script src="assets/vendor/clipboard/dist/clipboard.min.js"></script>

  <!-- Prism -->
  <script src="assets/vendor/prism/prism.js"></script>
  <script src="assets/vendor/prism/components/prism-markup.min.js"></script>
  <script src="assets/vendor/prism/components/prism-css.min.js"></script>
  <script src="assets/vendor/prism/components/prism-clike.min.js"></script>
  <script src="assets/vendor/prism/components/prism-javascript.min.js"></script>
  <script src="assets/vendor/prism/plugins/toolbar/prism-toolbar.min.js"></script>
  <script src="assets/vendor/prism/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js"></script>
  <!-- End Prism -->

  <script src="assets/js/components/hs.scrollbar.js"></script>
  <script src="assets/js/components/hs.select.js"></script>
  <script src="assets/js/components/hs.modal-window.js"></script>
  <script src="assets/js/components/hs.markup-copy.js"></script>



</body>


<!-- Mirrored from htmlstream.com/preview/unify-v2.6.2/unify-main/home/home-discover.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Apr 2019 09:39:39 GMT -->
</html>
