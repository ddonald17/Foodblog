<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FoodBlog</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<link href="style.css" rel="stylesheet">

<body>
  <!--   NAv BAr Section -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container-fluid ">
      <a class="navbar-brand" href="index.php">FoodBlog</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="explore.php">Explore</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="contact.php">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--Carousel Section  -->
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img
          src="https://images.unsplash.com/photo-1626777552726-4a6b54c97e46?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8aW5kaWFuJTIwZm9vZHxlbnwwfHwwfHw%3D&w=1000&q=80"
          class="d-block w-100 " alt="Some food">

      </div>
      <div class="carousel-item">
        <img src="https://t4.ftcdn.net/jpg/02/84/46/89/360_F_284468940_1bg6BwgOfjCnE3W0wkMVMVqddJgtMynE.jpg"
          class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img
          src="https://cdn.shopify.com/s/files/1/1949/5703/files/FiveWayFoods_25_2_55e107e4-d88b-49db-bef0-280cea5eaac9_2048x.jpg?v=1570825073"
          class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!--     end of carousel -->

  <!--modal section  -->
  <div class="container-fluid my-2">
    <div class="row justify-content-center">
      <div class="col-12 col-md-4 col-sm-12 col-xs-12">
        <div class="card1 p-3 p-md-4 text-white">

          <span><i class="fa fa-envelope-open-o fa-2x" aria-hidden="true"></i></span>

          <h6 class="my-3"> Subscribe to the newsletter </h6>
          <form method='POST' action="includes\add_news.php">
          <div class="row d-flex my-2 pr-2 pr-md-5 div1">
            <div class="col-9">
              <input type="email" class="form-control py-3 text-primary" id="inp1" name='email' placeholder="Enter email address">
            </div>

            <div class="col-3 px-0">
              <button class="btn btn-outline-light px-4 py-2" type="submit" name="submit"> OK </button>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--Card Section  -->
  <div class="container">
    <h3 class="pb-3 mb-4 font-italic border-bottom">
      Best Food for this Season
    </h3>
    <div class="row">
      <!--   first -->
      <div class="col-md-4">
        <div class="card mb-4 text-white bg-dark">
          <img class="card-img-top" width="500" height="350"
            src="https://minimalistbaker.com/wp-content/uploads/2021/04/EASY-Mint-Chutney-Fresh-Indian-inspired-and-just-5-minutes-9-ingredients-a-food-processor-required-minimalistbaker-recipe-plantbased-glutenfree-chutney-4.jpg"
            alt="Card image cap" !important>
          <div class="card-body">
            <h5 class="card-title">Easy Mint Chutney (5 Minutes!)</h5>
            <a href="blogs/1.html" class="btn btn-outline-light btn-sm">Learn More</a>
          </div>
        </div>
      </div>
      <!--     second -->
      <div class="col-md-4">
        <div class="card mb-4 text-white bg-dark">
          <img class="card-img-top" width="500" height="350"
            src="https://minimalistbaker.com/wp-content/uploads/2020/06/FLUFFY-Vegan-Gluten-Free-Naan-20-minutes-1-bowl-PILLOWY-stretchy-garlicky-SO-delicious-naan-glutenfree-plantbased-recipe-minimalistbaker-26.jpg"
            alt="Card image cap" !important>
          <div class="card-body">
            <h5 class="card-title">Fluffy Gluten-Free Naan </h5>
            <a href="blogs/2.html" class="btn btn-outline-light btn-sm">Learn More</a>
          </div>
        </div>
      </div>
      <!--     third -->
      <div class="col-md-4">
        <div class="card mb-4 text-white bg-dark">
          <img class="card-img-top" width="500" height="350"
            src="https://minimalistbaker.com/wp-content/uploads/2020/03/AMAZING-Masala-Chickpea-Stuffed-Sweet-Potatoes-10-ingredients-BIG-flavor-topped-with-Chutney-plantbased-sweetpotato-chickpea-recipe-minimalistbaker-6-1.jpg"
            alt="Card image cap" !important>
          <div class="card-body">
            <h5 class="card-title">Easy Green Chutney
            </h5>
            <a href="blogs/2.html" class="btn btn-outline-light btn-sm">Learn More</a>
          </div>
        </div>
      </div>
      <!--     fourth -->
      <div class="col-md-4">
        <div class="card mb-4 text-white bg-dark">
          <img class="card-img-top" width="500" height="350"
            src="https://minimalistbaker.com/wp-content/uploads/2019/12/AMAZING-Easy-Masala-Chai-Recipe-SPICY-naturally-sweetened-COMFORTING-minimalistbaker-chai-plantbased-dairyfree-recipe-44.jpg"
            alt="Card image cap" !important>
          <div class="card-body">
            <h5 class="card-title">Easy Masala Chai Recipe</h5>
            <a href="blogs/4.html" class="btn btn-outline-light btn-sm">Learn More</a>
          </div>
        </div>
      </div>
      <!--     fifth -->
      <div class="col-md-4">
        <div class="card mb-4 text-white bg-dark">
          <img class="card-img-top" width="500" height="350"
            src="https://minimalistbaker.com/wp-content/uploads/2018/10/AMAZING-Cauliflower-Potato-Red-Lentil-Curry-30-minutes-wholesome-ingredients-EASY-SO-flavorful-vegan-glutenfree-potato-lentil-curry-minimalistbaker-recipe-6.jpg"
            alt="Card image cap" !important>
          <div class="card-body">
            <h5 class="card-title">Potato Cauliflower Red Lentil Curry</h5>
            <a href="blogs/5.html" class="btn btn-outline-light btn-sm">Learn More</a>
          </div>
        </div>
      </div>
      <!--     sixth -->
      <div class="col-md-4">
        <div class="card mb-4 text-white bg-dark">
          <img class="card-img-top" width="500" height="350"
            src="https://minimalistbaker.com/wp-content/uploads/2019/05/Sheet-Pan-Dinner-Curried-Sweet-Potatoes-Crispy-Chickpeas-Cabbage-and-Greens-1-pan-required-simple-ingredients-SO-satisfying-glutenfree-plantbased-dinner-curry-sweetpotato-recipe-minimalistbaker_-4.jpg"
            alt="Card image cap" !important>
          <div class="card-body">
            <h5 class="card-title">Curried Sweet Potato & Chickpeas</h5>
            <a href="blogs/6.html" class="btn btn-outline-light btn-sm">Learn More</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php  include_once('includes/footer.php'); ?>  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"></script>
  <script src="script.js"></script>

</body>

</html>