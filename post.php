<?php
require('includes/db.php');
require('includes/function.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>explore</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
<!--     Nav bar section -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container-fluid ">
      <a class="navbar-brand" href="index.html">FoodBlog</a>
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
<!-- blog section    -->
     <div class=" container ">
     <?php
        $post_id=$_GET['id'];
$postQuery="SELECT * FROM posts WHERE id=$post_id";
$runPQ=mysqli_query($db,$postQuery);
$post=mysqli_fetch_assoc($runPQ);
        ?>
            <div class="card mb-3">
            <h1 class="text-center"><?=$post['title']?></h1>
                <div class="card-body">
                  <div class="border-bottom mt-3"></div>
                    <?php
                    $post_images=getImagesByPost($db,$post['id']);



                    ?>
                    
                     <img src="https://minimalistbaker.com/wp-content/uploads/2016/03/INSANELY-Delicious-1-Pot-Yellow-Thai-Curry-with-Mango-Red-Pepper-and-Cashews-vegan-glutenfree-curry-recipe.jpg" class="rounded mx-auto d-block  img-thumbnail" width="250" height="350">
                     <article>
                        <p class="card-text"><?=$post['content']?>
                        </p>
                        <div class="addthis_inline_share_toolbox"></div>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Comment on this
                        </button>
                     </article>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Your Comment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form action="includes/add_comment.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="name" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
                
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Comment</label>
                <input type="text" class="form-control" name="comment" id="exampleInputPassword1">
            </div>
            <input type="hidden" name="post_id" value="<?=$post_id?>">
            <button type="submit" name="addcomment" class="btn btn-primary">Add Comment</button>
            </form>
                </div>

                </div>
            </div>
            
            </div>        
            <?php include_once('includes/sidebar.php'); ?>

            
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>