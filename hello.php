<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MicroBlog</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="custom.css">
  </head>



  <body id="home" data-spy="scroll" data-target=".navbar" data-offset="100"> 


  <!-- nav bar -->
    <nav id="nav" class="navbar navbar-toggleable-sm navbar-inverse bg-faded fixed-top">
      <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="#home">HOME <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#tweet">Tweet</a>
            </li>
           
            </ul>
              <a class="navbar-brand mr-0 hidden-xs-down" href="mailto:hp5340@gmail.com">@pjtruong</a>
          </div>
    </div>
  </nav>

  <!-- /nav bar -->


<!-- jumbotron -->
  <div class="jumbotron jumbotron-fluid  text-black mb-0">
    <div class="container text-center">
     <h1 class="display-3">Just Another Twitter</h1>
      <p class="lead py-2">let the secrets out...</p>
        
        
          <a class="btn btn-outline-secondary btn-lg mt-5" href="#tweet">Tweet!</a>
        
    </div>
  </div>

<!-- /jumbotron -->

<!-- php div -->
<div class="container-fluid  mt-0 pt-0"  id="tweet">
<?php echo '<h1 class="display-4 text-center mb-5 text-muted">Tweet Your Heart Out</h1>'; ?> 
    

    <div class="row text-white">
          <div class="col-md-4">
          </div>
    <div class="col-md-4">
         <?php if(isset($_SESSION['loggedin'])){
            echo '<form action="/microBlog/postForm.php" method="post">
                    <TextArea class="form-control" id="exampleTextarea" rows="5" name="microBlog" id="microBlog" >
                    </TextArea>
                    </br>
                    <input class="btn btn-outline-primary btn-lg" type="submit">
            </form>'; 
            }
           else {
                echo '<form action="/microBlog/login.php" method="post">
                        <input class="form-control" placeholder="Username" type="text" name="username" id="username" /> 
                        </br>
                        <input class="form-control" placeholder="Password" type="text" name="password" id="password" />
                        <input class="btn btn-outline-primary btn-lg my-2" type="submit">
                </form>';
        }

        if (isset($_SESSION['loggedin'])){
                echo '<a class="btn btn-outline-primary btn-md my-2" href="/microBlog/logout.php">Log Out</a>';
        } else {
                echo '<a class="btn btn-outline-primary btn-md mb-5" href="/microBlog/register.php">Register</a>';
        }

    ?>
    </div>

    <div class="col-md-4">
     <?php
        require_once 'meekrodb.2.3.class.php';
        DB::$user = 'root';
        DB::$password = '';
        DB::$dbName = 'MicroBlog';
        $results = DB::query("SELECT post FROM MicroBlog");
        echo '<div class="list-group text-danger">';
        foreach ($results as $row){
                echo '<a href="#" class="list-group-item list-group-item-info">' . $row['post'] . "</a>";
        }
        echo '</div>';
     ?> 
    

    </div>
  
 </div>


   

</div> 
<!-- /php div-->


  

   








     



    <!-- jQuery first, then Tether, then Bootstrap JS. -->
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="javascript.js"></script>
      <script>
      $(function() {
        $('a[href*="#"]:not([href="#"])').click(function() {

          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html, body').animate({
                scrollTop: target.offset().top
              }, 600);
              return false;
            }
          }
        });
      });
      </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
</html>