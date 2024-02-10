<!doctype html>
<html lang="en">

<head>
    <link rel="shortcut icon" type="image/x-icon" href="tauthali.jpg" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Tauthali-Blog</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>

<!-- START connect to mysql database -->
<?php
$conn  = new mysqli("localhost", "root", "", "blog_project");

// Check connection
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    exit();
}
?>
<!-- END connect to mysql database -->


<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/project/">Home </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="http://localhost/project/about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="http://localhost/project/contact.php">Contact<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">Dropdown</a>
          <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="http://localhost/project/images.php">Images</a>
            <a class="dropdown-item" href="http://localhost/project/jatras.php">Jatras</a>
            <a class="dropdown-item" href="http://localhost/project/extra.php">Extra</a>
          </div>
        </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <main role="main">

        <div class="container" style="margin-top: 100px;">
        <h4>Contact</h4>   
            <?php
            $sql = "SELECT * FROM contact";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>

                    <div class="col-md-4">
                        <div class="row">
                             <div class="col-md-6">Tel_no : </div>
                             <div class="col-md-6"><p><?php echo $row["phone"] ?></p></div>
                        </div>
                        <div class="row">
                             <div class="col-md-6">Email : </div>
                             <div class="col-md-6"><p><?php echo $row["email"] ?></p></div>
                        </div>
                        <div class="row">
                             <div class="col-md-6">Address</div>
                             <div class="col-md-6"><p><?php echo $row["address"] ?></p></div>
                        </div>
                        <div class="row">
                             <div class="col-md-6">Website1 : </div>
                             <div class="col-md-6"><p><?php echo substr($row["website"],0,25).'....' ?></p></div>
                        </div>
                        <div class="row">
                             <div class="col-md-6">Website2 : </div>
                             <div class="col-md-6"><a class="nav-link" href="https://en.wikipedia.org/wiki/Tauthali" target="_blank"> Go </a></div>
                        </div>
                                   
                        <div class="row">
                        <?php  $web = $row['website']; echo $web; ?>
                             <div class="col-md-6">Website3 : </div>
                             <div class="col-md-6">
                                 <a class="nav-link" href="$web" target="_blank"> Go </a>
                             </div>
                        </div> 
                        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                    </div>

            <?php
                }
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>
        

            

        </div> <!-- /container -->
        <hr>
    </main>

    <footer class="container">
        <p>&copy; Company 2017-2019</p>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</html>