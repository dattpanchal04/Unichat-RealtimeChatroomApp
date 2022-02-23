
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Unichat - A Realtime Chatroom</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    

    <!-- Bootstrap core CSS -->
    <link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
    <link rel="icon" href="img/favicon.png">
    <meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="css/product.css" rel="stylesheet">
  </head>
  <body>
    

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">UniChat</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="about.html">About</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="mailto: dattpanchal2904@gmail.com?subject=Contact Inquiry&body=Write a contact message here">Contact</a>
        </li>
    </div>
  </div>
</nav>

<main>
  <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-normal">UniChat</h1>
      <p class="lead fw-normal">Chat with your friends without worrying about the chat logs, now you can freely chat with your friends using our free platform</p>

      <form action="apply.php" method="post">
          <div class="input-group mb-3">
            <input type="text" name="room" class="form-control" placeholder="Enter your room name here" aria-label="name">
          </div>
          <button class="btn btn-dark" href="#">Apply Room</button>
      </form>

    </div>
    <div class="product-device shadow-sm d-none d-md-block"></div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
  </div>

    <!-- cards -->
  <div id="homePage">
    <div class="container d-flex justify-content-center align-items-center">
      <div class="card mb-3 my-5 mx-5" style="max-width: 900px;">
        <div class="row g-0 align-items-center">
          <div class="col-md-4">
            <img class="img-fluid rounded" src="img/1st.jpg" class="img-fluid rounded-start" alt="Python_Img">
          </div>
          <div class="col-md-8">
            <div class="card-body mx-3">
              <h5 class="card-title">Free Chating</h5>
              <p class="card-text" style="text-transform: capitalize;">
                  UniChat is best free online chatting rooms and chat site. Share this site to your friends & families to enjoy this free online chatting site!
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container d-flex justify-content-center align-items-center">
      <div class="card mb-3 my-5 mx-5" style="max-width: 900px;">
        <div class="row g-0 align-items-center">
          <div class="col-md-4 order-md-2">
            <img class="img-fluid rounded" src="img/2nd.jpg" class="img-fluid rounded-start" alt="WebDev_Img">
          </div>
          <div class="col-md-8 order-md-1">
            <div class="card-body mx-3">
              <h5 class="card-title">Chat Experiance</h5>
              <p class="card-text" style="text-transform: capitalize;">
                  You can feel best chatting experiance from our chatting site. Don't worry it is safe.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container d-flex justify-content-center align-items-center">
      <div class="card mb-3 my-5 mx-5" style="max-width: 900px;">
        <div class="row g-0 align-items-center">
          <div class="col-md-4 order-md-1">
            <img class="img-fluid rounded" src="img/3rd.jpg" class="img-fluid rounded-start" alt="Articles_Img">
          </div>
          <div class="col-md-8 order-md-2">
            <div class="card-body mx-3">
              <h5 class="card-title">Featured Update</h5>
              <p class="card-text" style="text-transform: capitalize;">
                  For feature update, We can improving the design of this chatting site and we can try to give you best experiance.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <div class="container">
    <footer class="py-3 my-4">
      <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="index.php" class="nav-link px-2 text-dark">Home</a></li>
        <li class="nav-item"><a href="https://github.com/dattpanchal04" class="nav-link px-2 text-dark">GitHub</a></li>
        <li class="nav-item"><a href="https://codies.surge.sh/" class="nav-link px-2 text-dark">Our-Website</a></li>
        <li class="nav-item"><a href="about.html" class="nav-link px-2 text-dark">About</a></li>
      </ul>
      <p class="text-center text-dark">© 2021 UniChat</p>
    </footer>
  </div>

   <!--  <script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

      
  </body>
</html>
