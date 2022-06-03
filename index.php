﻿<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>double T Toys </title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <style type="text/css">
    	.navbar {
            background-color: #242e4c;
        }

        .cover {
            background: url('https://s1.1zoom.me/big0/883/Toys_Teddy_bear_White_background_545993_1353x1024.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;

        }

        .bg-orange {
            background-color: #ff6144!important;
        }

        .vh-80 {
            min-height: 84vh;
        }

        .sign__container {
            width: 60%;
        }

        @media (min-width: 1200px) {
            .sign__container {
                width: 350px;
            }
            .subtitle-mb{
                margin-bottom: 5.5rem!important;
            }
        }
    </style>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Kingdom for kids</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto ">
                    <li class="nav-item ml-lg-3">
                        <a class="nav-link  text-light" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Log In</a>
                    </li>
                    <li class="nav-item dropdown   ml-lg-3 ">
                        <a class="nav-link dropdown-toggle text-light d-inline-block bg-orange rounded p-1 p-lg-2" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
                            Sign Up
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg-right p-5 sign__container" aria-labelledby="navbarDropdownMenuLink">


                            <h1 class="h4 mb-3 font-weight-normal text-center">Please sign in</h1>
                            <label for="inputEmail" class="sr-only">Email address</label>
                            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
                            <label for="inputPassword" class="sr-only ">Password</label>
                            <input type="password" id="inputPassword" class="form-control mb-2" placeholder="Password" required="">
                            <div class="checkbox mb-4">
                                <label>
                                    <input type="checkbox" value="remember-me"> Remember me
                                </label>
                            </div>
                            <button class="btn btn-lg bg-orange btn-block text-light" type="submit">Sign in</button>


                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container-fluid cover  ">

        <div class="row align-items-center justify-content-center justify-content-xl-start vh-80">
            <div class="col col-sm-7 text-center text-xl-left col-xl-4 offset-xl-2">
                <h1 class="mb-4">Want some toys for your kids, gifts for your friend's child, or whatever. Let's buy it in our store.</h1>
                <p class="mb-5 subtitle-mb">Games & puzzles, lego, baby & toddlers... We have it all.</p>
                <div class="input-group mb-3 shadow">

                    <input type="text" class="form-control" placeholder="Your toys..." aria-label="Search" aria-describedby="basic-addon1">
                    <div class="input-group-prepend">
                        <button class="btn bg-orange text-light text-uppercase p-3" type="button">Find It</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="product">
    	<p style="text-align: left; font-family: arial; color: black; font-size: 30px; text-align: center; margin-top: 50px;">All Songs</p>
			<div>
				<?php
				$connect = mysqli_connect('3.132.234.157','doubleTToys','doubleT','doublettoysdata');
				if($connect){
					echo "";
				}
				else{
					echo"Connection failed";
				}
				$sql="SELECT * FROM song";
				$result=mysqli_query($connect,$sql);
					while($row=mysqli_fetch_array($result)){
				?>
				<div class= "row d-inline-flex">
            <div class ="col-6 col-sm-4 col-md-3 p-2">
               <div class="card h-100">
                  <a href="detail.php?id=<?php echo $row['song_id']; ?>" target="_blank"><img src="img/<?php echo $row['song_image'];?>" width="270px" height="270px"></a>
                    <p><?php echo $row['song_name'];?></p>
                    <p style="font-size: 13px"><?php echo $row['song_singername'];?></p>
               </div>
            </div>
         </div>
				<?php
				}
				?>
			</div>
		</div>
    </div>

    <footer class="page-footer font-small bg-light">

        <div>
            <div class="container-fluid">

                <!-- Grid row-->
                <div class="row py-4 d-flex align-items-center">

                    <!-- Grid column -->
                    <div class="col-md-7 col-lg-5 col-xl-4 text-center text-md-left  mb-md-0 small">
                        <nav class="nav justify-content-center justify-content-md-start">
                            <a class="nav-link text-muted" href="#">Terms of Privacy</a>
                            <a class="nav-link text-muted" href="#">Cookies</a>
                            <a class="nav-link text-muted" href="#">About</a>
                            <a class="nav-link text-muted" href="#">Contact</a>
                        </nav>
                    </div>
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-6 text-center text-md-left  mb-md-0 small">
                        <div class="footer-copyright text-center text-black-50 pt-3 pb-2">© 2020
                        </div>
                    </div>


                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-3 col-xl-2 text-center text-md-right">
                        <a href="#" class="text-dark">
                            <i class="fab fa-facebook-f white-text mx-2"> </i></a>
                        <a href="#" class="text-dark">
                            <i class="fab fa-twitter white-text mx-2"> </i></a>
                        <a href="#" class="text-dark">
                            <i class="fab fa-instagram white-text mx-2"> </i></a>



                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row-->

            </div>
        </div>
    </footer>
</body>
</head>
</html>