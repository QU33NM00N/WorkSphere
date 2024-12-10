<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WorkSphere</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/1.ico">
</head>

<body>
    <div class="content">
        <p>Welcome to WorkSphere!</p>
        </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">WorkSphere</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
              </li>
            </ul> 


            <form class="d-flex" action=" ">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button style="background-color: rgb(61,157,241); color:aliceblue; border-color: rgb(42,59,95);" class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

      <section class="container">
  <div class="bg-image">
  </div>
 
</section>

@auth
      <p>Congratulations on succesfully logging in! Welcome to your WorkSphere!</p>
      <form action="/logout" method="POST">
        @csrf
        <button>Log out</button>
      </form>

      @else
      <div>
        <h2>Register</h2>
        <form action="/register" method="POST">
          @csrf
          <input name="name" type="text" placeholder="name">
          <input name="email" type="text" placeholder="email">
          <input name="password" type="password" placeholder="password">
          <button>Register</button>
        </form>
      </div>
      <div>
        <h2>Login</h2>
        <form action="/login" method="POST">
          @csrf
          <input name="loginname" type="text" placeholder="name">
          <input name="loginpassword" type="password" placeholder="password">
          <button>Log in</button>
        </form>
      </div>
      @endauth
    

</body>
</html>