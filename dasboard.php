<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Hello, world!</title>
    <link rel="stylesheet" href="./css/firststyle.css">
    <style>
        .al3 {
            text-align: center;
            justify-content: center;
        }

        .buying {
            display: flex;
            justify-content: center;
            margin-top: 50px;
        }

        .buy {
            margin: 10px;
        }

        .sell {
            margin: 10px;
        }

        .mg2 {
            margin: 20px;
        }
        .hover:hover{
         background-color: blue;
         color: white;
         border: 2px solid transparent;
        }
    </style>
</head>

<body>
    <!-- <img src="./app/Apis/api.php" alt="" srcset=""> -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container-fluid">
            
            <a class="navbar-brand" href="#"><img src="images/logo.png" alt="logo" class="logo" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item ml-4">
                        <a class="nav-link active" style="color: white;" aria-current="page" href="#">BUY/SELL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" style="color: white;" aria-current="page" href="#">TRADE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" style="color: white;" aria-current="page" href="#">FINANCE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" style="color: white;" aria-current="page" href="#">CARDS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" style="color: white;" aria-current="page" href="#">AFFILIATE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" style="color: white;" aria-current="page" href="#">MARGIN TRADING</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" style="color: white;" aria-current="page" href="#">STAKING</a>
                    </li>

                </ul>
                <form class="d-flex">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            up12345678
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                            <li><a class="dropdown-item active" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                    </div>
                    &nbsp;
                    <button type="button" class="btn btn-outline-dark" style="color: white;">Support</button>


                    <!-- <button type="button" class="btn btn-outline-dark" style="color: white;">up12345678</button> -->
                    <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
                </form>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <!-- <a class="navbar-brand" href="#">Navbar</a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">$0000.00</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">E0000.00</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">E0000.00</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">E0000.00</a>
                    </li>


                </ul>
                <form class="d-flex">
                    <button type="button" class="btn btn-info">Deposit</button>
                    &nbsp;
                    <button type="button" class="btn btn-primary">Widthraw</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="alert alert-success   al3 " role="alert">
        A simple success alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
    </div>

    <div class="alert alert-light al3" role="alert">

        <h1>Buy Bitcoin with VISA or Mastercard in USD</h1>

        <div class="buying">
            <div class="buy">
                <label>BUY</label>
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>

            </div>
            <div class="sell">
                <label>FOR</label>
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">

                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>

            </div>

        </div>

    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4 mg2">
        <div class="col hover">
            <div class="card">
                <div class="alert alert-primary" role="alert">
                    $ 2000
                </div>
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">
                    <div class="spinner-border text-primary" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    </p>
                </div>
                <div class="alert alert-primary" role="alert">
                    A simple primary alert—check it out!
                </div>
            </div>

        </div>
        <div class="col">

            <div class="card">
                <div class="alert alert-primary" role="alert">
                    A simple primary alert—check it out!
                </div>
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                        additional
                        content. This content is a little bit longer.</p>
                </div>
                <div class="alert alert-primary" role="alert">
                    A simple primary alert—check it out!
                </div>
            </div>

        </div>
        <div class="col">

            <div class="card">
                <div class="alert alert-primary" role="alert">
                    A simple primary alert—check it out!
                </div>
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                        additional
                        content.</p>
                </div>
                <div class="alert alert-primary" role="alert">
                    A simple primary alert—check it out!
                </div>
            </div>

        </div>
        <div class="col">

            <div class="card">
                <div class="alert alert-primary" role="alert">
                    A simple primary alert—check it out!
                </div>
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                        additional
                        content. This content is a little bit longer.</p>
                </div>
                <div class="alert alert-primary" role="alert">
                    A simple primary alert—check it out!
                </div>
            </div>

        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>