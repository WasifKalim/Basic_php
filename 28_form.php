
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Get/Post</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/cwwphp">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
            </li>
            <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
            </li>
        </ul>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        </div>
    </div>
    </nav>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            
            $name = $_POST['name'];
            $email = $_POST['email'];
            $desc = $_POST['desc'];
            

        
        // Connecting to the Database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "contacts";
        
        // Create a connection
        $conn = mysqli_connect($servername, $username, $password, $database);
        // Die if connection was not successfull
        if(!$conn){
            die("Sorry we failed to connect: ". mysqli_connect_error());
        }
        else{ 
            echo "Connection was successfull<br>";
        }

        
        // SQL query executed
        $sql = "INSERT INTO `contactus` (`sno`, `name`, `email`, `concern`, `dt`) VALUES (NULL, '$name', '$email', '$desc', current_timestamp())";
        $result = mysqli_query($conn, $sql);


        if($result){
            // echo "The record was inserted successfully<br>";
            echo '<div class="alert" alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your entry has  been submitted successfully!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            </button>
            </div>';
        }
        else{
            // echo "The record was not inserted in the table successfully because of this error: ". mysqli_error($conn);
            echo '<div class="alert" alert-warning alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Due to technical errors your entry has  been submitted successfully! Sorry for the inconvienience
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            </button>
            </div>';
        }
    }

    ?>


    <div class="container">
    <h1>Contact us for your concern</h1>
    <form action="/cwwphp/28_form.php" method="post">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Name</label>
        <input type="text"  name="name" class="form-control" id="email" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">email</label>
        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="desc">Description</label>
        <textarea  class="form-control" name="desc" id="desc" cols="20" rows="5"></textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>