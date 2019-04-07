<?php
  require_once 'db_connect.php';
  $conn = new mysqli("$hn","$un","$pw","$db");
  // Check connection
  if (mysqli_connect_errno()){
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      die();
  }
  //get general info
  $result = mysqli_real_escape_string($conn, $_POST['result']);
  if ($result == '') $result = '1';
?>

<!doctype html>
<html lang="en">
  <head>
    <!— Required meta tags —>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!— Bootstrap CSS —>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/agreektourism.css">
    <!--rating-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      .checked {
        color: orange;
      }
      </style>
    <!-- end of rating-->
    <title>#Agreektourism</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  </head>
  <body>
      <div class="agreeknavbar">
              <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ffffff;">
              <a class="navbar-brand" href="index.php">
              <img src="../public/assets/logo.jpg" width="100%" height="100%">
              </a>

              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarNavAltMarkup" >
              <div class="navbar-nav">
                  <a class="nav-item nav-link" href="InsertActivity.php" style="margin-left: 700px;">Προσθέστε την ιδέα σας</a>
                  <a class="nav-item nav-link" href="#" style="margin-left: 30px;">Σχετικά με εμάς</a>
              </div>
              </div>
          </nav>
      </div>

      <div class="row" style="margin-top:5%;">
        <div class="activity-description col">
            <?php
                require_once 'db_connect.php';
                $conn = new mysqli($hn,$un,$pw,$db);
                if ($conn->connect_error) die ($conn->connect_error);
                // support greek
                mysqli_query($conn, "SET NAMES 'utf8'");
                $sql = "SELECT title, description, photoUrl, price FROM Activities WHERE idActivities = $result";
                if ($res_data = mysqli_query($conn, $sql)){
                    //echo "search success!!.";
                }
                else {
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                }
                $row_cnt = $res_data->num_rows;
                $row = mysqli_fetch_array($res_data);
                echo '<h5> <b>' . $row["title"] . '</b>  </h5>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star"></span>
                      <a href="#" style="margin-left:2%;"> reviews </a>
                      <p style="box-sizing: border-box;margin-top:1%;">' . $row["description"] . '</p>
                      <div class="row">
                          <div class="col">
                              <h5> <b> Υπεύθυνος </b>  </h5>
                              <p> <a href="Profile.php" style="color:black;"> Αναστασία Δρόση </a> <i class="fas fa-link"></i></p>
                          </div>
                          <div class="col">
                              <h5> <b> Τιμή </b>  </h5>
                              <p> ' . $row["price"] . '€ / άτομο </p>
                          </div>
                      </div>';
                mysqli_close($conn);
            ?>
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#paymentModal" style="width:200px;margin-top:2px; margin-left:30%">Κάντε κράτηση τώρα</button>
            <!-- Modal -->
            <div class="modal fade" id="paymentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="margin-top:3%;">Δημιουργία κράτησης</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <div class="form-group row">
                              <label for="example-number-input" class="col-5 col-form-label">Αριθμός Ατόμων</label>
                              <div class="col-5">
                                <input class="form-control" type="number" value="1" id="example-number-input">
                              </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger">Συνέχεια</button>
                        </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="col">
            <div class="slides">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://images.pexels.com/photos/39511/purple-grapes-vineyard-napa-valley-napa-vineyard-39511.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.pexels.com/photos/1267314/pexels-photo-1267314.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.pexels.com/photos/51947/tuscany-grape-field-nature-51947.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block w-100" alt="...">
                    </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
      </div>
      <div class="row" style="margin-left:5%;margin-top:3%;">
        <div class="row"> <div class="col"> <h4> <b> Πρόγραμμα </b> </h4> </div> </div>
        <div class="row" style="margin-top:3%;">
            <div class="col">
                <div class="activity-info">
                    <ul>
                        <li> Ώρα έναρξης: 9:15 - Ώρα Λήξης: 1:00 </li>
                        <li> Διαδικασία κλαδέματος, ποτίσματος, συγκομιδής και παραγωγής </li>
                        <li> Φορέστε άνετα ρούχα </li>
                        <li> Θα έχετε την ευκαιρία να δοκιμάστε και να προμηθευτείτε τοπικά κρασιά </li>
                    </ul>
                </div>
            </div>
        </div>
      </div>
      <div class="row" style="margin-left:5%;margin-top:2%;">
            <div class="row"> <div class="col"> <h4> <b> Σχετικά </b> </h4> </div> </div>
            <div class="row" style="margin-top:3%;">
                <ul class="list-group list-group-flush activity-about">
                    <li class="list-group-item"> <i class="fas fa-shopping-cart"></i>  Προμηθευτείτε το κρασί μας <a href="BuyProduct.php"> εδώ </a> </li>
                    <li class="list-group-item"> <i class="fas fa-info" width="30px;"></i>  &nbsp;&nbsp; Πληροφορίες για το κρασί μας μπορείτε να βρείτε <a href="InfoPage.php"> εδώ </a></li>
                </ul>
            </div>
       </div>
       <div class="row" style="margin-left:4%;margin-top:2%;"> <div class="col"> <h4> <b> Επικοινωνία </b> </h4> </div> </div>
            <div class="row" style="margin-top:1%;">
                <div class="col">
                    <div id="map-container-google-1" class="z-depth-1-half map-container" style="height:600px;width:1000px;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12835.194987906149!2d25.37240557632888!3d36.46241963031005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1499cb8b1c44c1a9%3A0x400bd2ce2b9c750!2zzp_Or86xIDg0NyAwMg!5e0!3m2!1sel!2sgr!4v1554578709120!5m2!1sel!2sgr" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col">
                    <div class="contact">
                        <h5><i class="fas fa-map-pin"></i><b>  Διεύθυνση: </b></h5>
                        <p> Κεκρωπος 31, Οία Σαντορίνης, 11821</p>
                        <h5><i class="fas fa-phone"></i><b>  Τηλέφωνο: </b></h5>
                        <p> 210-1234567</p>
                        <h5><i class="fas fa-envelope"></i><b>  Ηλεκτρονική Διεύθυνση: </b></h5>
                        <p> wine@gmail.com</p>
                    </div>
                </div>
            </div>
            <!— Footer —>
            <hr style="margin-top: -100px;">
            <div style="background-color: white;">
              <!— Copyright —>
              <div class="footer-copyright text-center py-3">© 2019 Copyright:
                <a href="https://mdbootstrap.com/education/bootstrap/"> Team 69</a>
              </div>
              <!— Copyright —>

            </div>
            <!— Footer —>
    <!— Optional JavaScript —>
    <!— jQuery first, then Popper.js, then Bootstrap JS —>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
