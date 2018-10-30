<?php

    include_once '../inc/_header.php';
    include_once '../inc/_nav.php';

    require_once '../classes/rec.calss.php';

    $message = "";

    $recp = new RecDB ();

    if($_SERVER["REQUEST_METHOD"] == "POST"){
       require '../classes/SaveRec.class.php';
    }

?>
          


    <div class="container-fluid">
        <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  Orders
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="shopping-cart"></span>
                  Products
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="users"></span>
                  Customers
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="bar-chart-2"></span>
                  Reports
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  Integrations
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Saved reports</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Current month
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Last quarter
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Social engagement
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Year-end sale
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
              </button>
            </div>
          </div>
          
        <?php  
          if($message)
            echo $message;

          $recp = new RecDB();        
          $posts = $recp->getRec();

          foreach($posts as $post){
            echo $post['recName'];
          }
        ?>
        <!-- Recepie input form -->
        <div class="container w-75">
          <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
              <div class="form-group">
                <label for="exampleFormControlSelect1">Example select</label>
                <select name="category" class="form-control" id="exampleFormControlSelect1">
                  <option value="1">MainCourse</option>
                  <option value="1">Apetizer</option>
                  <option value="1">Dessert</option>
                </select>
              </div>  
              <div class="form-group">
                  <label for="usr">Name:</label>
                  <input name="recName" type="text" class="form-control" id="usr">
              </div>
              
              <div class="form-group">
                  <label for="comment">Ingridients:</label>
                  <textarea name="ingridients" class="form-control" rows="5" id="comment" name="text"></textarea>
              </div>
              <div class="form-group">
                  <label for="comment">Directions:</label>
                  <textarea name="directions" class="form-control" rows="5" id="comment" name="text"></textarea>
              </div>
              <div class="form-group">
                  <label for="exampleFormControlFile1">Example file input</label>
                  <input type="file" class="form-control-file" id="exampleFormControlFile1">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
          </form>
         </div>
         


        <?= $message ?>
        <h2>Section title</h2>
            <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Header</th>
                  <th>Header</th>
                  <th>Header</th>
                  <th>Header</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1,001</td>
                  <td>Lorem</td>
                  <td>ipsum</td>
                  <td>dolor</td>
                  <td>sit</td>
                </tr>
                
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>

<?php include_once '../inc/_footer.php';?>