<?php
session_start();
?>
<!DOCTYPE html>
<html lang = "en">
  <head>

    <!--Required Meta Tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">

    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!--JS-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
    <meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">

  </head>

  <body>

    <div>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="index.php">
          <img src="CityZenLogo.png" alt="Logo" style="width:30px;">
        </a>
        <ul class="navbar-nav">
        <?php if(!isset($_SESSION['username'])) { ?>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
        <?php } ?>
        <?php if(!isset($_SESSION['username'])) { ?>
          <li class="nav-item">
            <a class="nav-link" href="registration.php">Register</a>
          </li>
        <?php } ?>
        <?php if(isset($_SESSION['username'])) { ?>
          <li class="nav-item">
            <a class="nav-link" href="profile.php"><?php echo $_SESSION['username']; ?>'s Profile</a>
          </li>
          <?php } ?>
          
          <?php if(isset($_SESSION['username'])) { ?>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
          <?php } ?>
          
          <li class="nav-item">
            <a class="nav-link" href="about.html">How CityZen Works</a>
          </li>

        </ul>
      </nav>
      </div>
  
    <br>
    <br>
    
    <main role="main">
      
        <div class="container marketing">
      
            <div class="row featurette">
                <div class="col-md-7">
                  <h2 class="featurette-heading">CityZen Pittsburgh Crowdsourcing Platform <span class="text-muted"> Brought to you by University of Pittsburgh for a more livable, sustainable, & developed Pittsburgh</span></h2>
                  <br>
                  <p class="lead">CityZen is a play on the word 'citizen'. This is about you and your suggestions to help make your city a better place. We hope that your suggesstions will help
                    Pittsburgh achieve a state of peace aka 'Zen'.
                    </p> <b>The current version is CityZen is a minimum viable product. Check back often for more features as they are developed.</b>
                </div>
                <!-- <div class="col-md-5"> -->
                  <!-- <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="400" height="400" src="DanYates.png"</img> -->
                  
                  <br>
                  <br>
                  <br>
                  <!-- <div class="col-md-12" style="text-align: center;"> -->
                      <!-- <div class="col-md-12" style="text-align: center;">
                        <img src = "swansonlogo.png" width="155" height="90" </img>
                      </div>
                      <br>

                      <div class="col-md-12" style="text-align: center;">
                        <img src="rw-logo.png" width="155" height="90" </img>
                      </div>
                    </div> -->
                <!-- </div> -->
                
              <!-- </div> -->
          </div>
          
<!-- 
          <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style>
          <br>    
          <div class="container-md"><h2>Demo</h2></div>
          <br>
         
          
          <div class="embed-container">
              <iframe src="https://www.youtube.com/embed/gJkw-pZYYy8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              
          </div> -->
        <!-- <br>
          <div class="container-md">
              <p class="lead">CityZen is easy to use and accessible from your browser. Start changing your city today!</p>
          </div> -->

          <hr class="featurette-divider">
     
          <!-- Three columns of text below the carousel -->
      
          <!-- START THE FEATURETTES -->
                
          <br>
          
      
      
          <div class="row featurette">
            <div class="col-md-7">
              <h2 class="featurette-heading">Key Features</h2>
              <br>

              <h4>Post a Suggestion</h4>
          
              <p class="lead">If you have an idea on how to improve the city or see something
                that needs to be fixed, choose a category pin then click on the map to create
                a suggestion.
              </p>
              <br>
              <br>
              <h4>Create a Profile</h4>
  
              <p class="lead">Make a profile so you can keep track of your suggestions and upvote
                on others' suggestions.
              </p>
              <br>
              <br>
              <h4>View Others' Suggestions</h4>
              <p class="lead">You can view suggestions made by other users by moving the map around. </p>
              <br>
              <br>
              <h4>Up-vote the Best Suggestions</h4>
       
              <p class="lead">Tell the city what is most important to you by up-voting on suggestions.</p>
            </div>
            <br>
            <!-- <div class="col-md-5">
                <div class="col-lg-12" style="text-align: center;">
                  <img class="bd-placeholder-img rounded-circle" width="250" height="250" src="fullside.png" </img>
                </div> /.col-lg-4 -->
                <!-- <hr>
                <div class="col-lg-12" style="text-align: center;">
                    <img class="bd-placeholder-img rounded-circle" width="250" height="250" src="side.png" </img>             
                </div>/.col-lg-4 -->
                <!-- <hr>
                <div class="col-lg-12" style="text-align: center;">
                    <img class="bd-placeholder-img rounded-circle" width="250" height="250" src="back.png" </img>              
                </div>/.col-lg-4 -->
            <!-- </div> -->
          </div>
      
          <hr class="featurette-divider">
      
          <div class="row featurette" style="align-self: center;">
            <div class="col-md-12 order-md-2">
              <h2 class="featurette-heading">How It Works</h2>
              <br>
              <p class="lead"> You can create an account by registering with an email, username, and password. If you already have 
                an account you can login. Once you are logged in, you can start making suggestions around the city. Upvote others' 
                suggestions so the city can see which issues the public is most passionate about.
                </p>
            </div>

          </div>
      
          <hr class="featurette-divider">
      
          <div class="row featurette">
            <div class="col-md-5">
              <h2 class="featurette-heading">What do the Icons Mean?</h2>
              <br>
              <p class="lead">You can find a compiled list of the markers used in CityZen as well as what each
                marker means in the table on the right. </p>
              <h4>Have design improvements?</h4>
              <p class="lead">Our code is open sourced. Feel free to fork the 
                repository and submit your changes via a pull request or open an issue  <span class="place"><a href="https://forms.gle/R3KghWQh4rgHHPf88">here</a></span>.</p>

                <h4>Icon Designers</h4>
                    <div>Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a>, <a href="https://www.flaticon.com/authors/vectors-market" title="Vectors Market">Vectors Market</a>,
                    <a href="https://www.flaticon.com/authors/google" title="Google">Google</a>, and <a href="https://www.flaticon.com/authors/becris" title="Becris">Becris</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
             
            </div>
          
            <div class="col-md-7">

                <div class="table-responsive-sm" style="text-align: center;">
                    <table class="table">
                      <thead class ="thead-dark">
                        <tr>
                          <th>Marker</th>
                          <th>Meaning</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><img src="icons/bike.png" alt="Logo" style="width:50px;"></td>
                          <td>This marker can be used for anything relating to bike parking someplace 
                            to protected biking lanes. 
                          </td>
                        </tr>
                        <tr>
                            <td><img src="icons/tree.png" alt="Logo" style="width:50px;"></td>
                            <td>This marker can be used for anything relating to local parks, land use,
                              or forestry related concerns. 
                            </td>
                        </tr>
                        <tr>
                            <td><img src="icons/traffic-light.png" alt="Logo" style="width:50px;"></td>
                            <td>This marker can be used for anything related to traffic lights, 
                              stop signs, pot holes, or construction suggestions.
                            </td>
                        </tr>
                        <tr>
                            <td><img src="icons/station.png" alt="Logo" style="width:50px;"></td>
                            <td>This marker can be used for anything relating to bus stops, 
                              healthy ride bike stations, or signage for public transit.
                            </td>
                        </tr>
                        <tr>
                            <td><img src="icons/parking.png" alt="Logo" style="width:50px;"></td>
                            <td>This marker can be used for anything relating to parking lots and the like.</td>
                        </tr>
                        <tr>
                          <td><img src="icons/walk.png" alt="Logo" style="width:50px;"></td>
                          <td>This marker can be used for anything that concerns pedestrians on the streets from 
                            sidewalks to crosswalks to accessiblity. 
                          </td>
                        </tr>
                        <tr>
                          <td><img src="icons/more.png" alt="Logo" style="width:50px;"></td>
                          <td>This marker can be used for any suggestion that does not fit in one of the 
                            other categories.
                          </td>
                        </tr>
      
                      </tbody>
      
                    </table>
                  </div>
                </div>

            </div>
      
          <hr class="featurette-divider">
      
          <!-- /END THE FEATURETTES -->
      
        </div><!-- /.container -->
  
      
        <!-- FOOTER -->
        <footer class="container">
          <p class="float-right"><a href="#">Back to top</a></p>
          <h4>About</h4>
          <p>This open source crowdsourcing platform was developed by <b>Olivia Lazarchick</b>, <b>Joe Coccia</b>, <b>Sid Iyer</b> & <b>Katelyn Morrison</b> for CS1530 Software Engineering.</p>
        </footer>
    </main>

          <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
          <script>window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
          <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
  </body>
</html>