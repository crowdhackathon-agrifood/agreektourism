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

            <div class="codllapse navbar-collapse" id="navbarNavAltMarkup" >
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="InsertActivity.php" style="margin-left: 700px;">Προσθέστε την ιδέα σας</a>
                <a class="nav-item nav-link" href="#" style="margin-left: 30px;">Σχετικά με εμάς</a>
            </div>
            </div>
        </nav>
    </div>
    <h3 style="text-align: center; margin-top: 20px;">Δημιουργία καταχώρησης</h1>
    <div class="row" style="margin-top: 20px;">
            <form>
              <div class="form">
                <div class="row">
                    <div class="col" style="margin-left: 300px;">
                        <div class="form-group">
                            <label for="inputTitle">Τίτλος</label>
                            <input type="text" class="form-control" id="inputTitle" placeholder="Δώστε έναν τίτλο">
                        </div>
                        <div class="form-group">
                            <label for="inputDescription" >Περιγραφή</label>
                            <textarea class="form-control" rows="6" id="inputDescription" placeholder="Περιγράψτε τη δραστηριότητα σας"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="maxVisitorsNum" class="col-form-label">Μέγιστος αριθμός επισκεπτών</label>
                          <div class="col">
                            <input class="form-control" type="number" value="10" id="maxVisitorsNum">
                          </div>
                        </div>
                    </div>
                    <div class="col" style="margin-left: 200px;">
                        <div class="form-group">
                          <label for="price">Τιμή ανά άτομο (σε €)</label>
                          <input type="number" class="form-control" id="price" placeholder="πχ 5">
                        </div>
                        <div class="form-group">
                            <label for="address">Διεύθυνση</label>
                            <input type="text" class="form-control" id="address" placeholder="Πληκτρολογήστε τη διεύθυνση σας">
                          </div>
                          <div class="form-group">
                            <label for="region">Περιοχή</label>
                            <input type="text" class="form-control" id="region" placeholder="Πληκτρολογήστε την περιοχή σας">
                          </div>
                          <div class="form-group">
                          <label for="category">Κατηγορία</label>
                          <select id="category" class="form-control">
                            <option selected>Ψάρεμα</option>
                            <option>Ελαιοκομία</option>
                            <option>Κτηνοτροφία</option>
                            <option>Αμπελουργία</option>
                          </select>
                        </div>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="customFile">
                          <label class="custom-file-label" for="customFile">Προσθέστε φωτογραφείες</label>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 8px; margin-left: 58%;">
                    <button type="submit" class="btn btn-success">Ολοκλήρωση</button>
                </div>
            </form>
    </div>

    <!— Optional JavaScript —>
    <!— jQuery first, then Popper.js, then Bootstrap JS —>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
