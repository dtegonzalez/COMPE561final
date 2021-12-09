
<!doctype html>
<html lang="en">
  <head>
 <!-- external own Css sheet -->
    <link rel="stylesheet" href="sheet.css">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@600&display=swap" rel="stylesheet">
  
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Shop</title>
  </head>



  <body>
    <?php
    session_start();
    $connect = mysqli_connect($dbhost, $dbuser, $dbpass);
    ?>
  

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    
    <nav class="navbar navbar-dark bg-dark">
        <nav class="navbar navbar-expand-lg navbar-light ">
          <div class="container-fluid">
            <a class="navbar-brand" href="http://127.0.0.1:5500/wphome.html">School Rides</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="http://127.0.0.1:5500/wphome.html">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="http://127.0.0.1:5500/quiz2.html">Quiz</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="http://127.0.0.1:5500/skate2.html">Skateboards</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="http://127.0.0.1:5500/shop2.html">Shop</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </nav>
    
     
    <div class="mt-4 p-4 text-white rounded">
        <h1>Now entering shop</h1>
      </div>
      
        <div class="infoform">
      <form class="row g-3">
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Email</label>
          <input type="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Password</label>
          <input type="password" class="form-control" id="inputPassword4">
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">Address</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="col-12">
          <label for="inputAddress2" class="form-label">Address 2</label>
          <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div>
        <div class="col-md-6">
          <label for="inputCity" class="form-label">City</label>
          <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="col-md-4">
          <label for="inputState" class="form-label">State</label>
          <select id="inputState" class="form-select">
            <option selected>Choose...</option>
            <option>...</option>
          </select>
        </div>
        <div class="col-md-2">
          <label for="inputZip" class="form-label">Zip</label>
          <input type="text" class="form-control" id="inputZip">
        </div>
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Check me out
            </label>
          </div>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-outline-secondary">Sign in</button>
        </div>
      </form>
</div>


<!-- 


    <div class="row row-cols-1row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-100">
            <img src="https://cdn.shopify.com/s/files/1/1354/8027/products/MG32CRUISERBAYDIVEAAA-01_495946fe-0eb0-45d7-92c8-124913cbdef7_1024x1024.jpg?v=1597079008" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Madd Gear Cruiser</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="https://cdn.shopify.com/s/files/1/0062/4915/2581/products/PNY20_Staple_22_Mint_comp_1024x1024.jpg?v=1615520803" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Mint Penny Skateboard</h5>
              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="http://cdn.shopify.com/s/files/1/0066/8945/6243/products/MYSTIC_2000x2000__0006s_0000_MYSTIC-SKATEBOARD-complete_TOP--bot-copy_1024x1024.jpg?v=1615511663" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Impala Mystic Skateboard (Complete)</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            </div>
            <button type="button" class="btn btn-outline-secondary">Secondary</button>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
      </div> -->
  </body>
</html>