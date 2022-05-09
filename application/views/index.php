<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= base_url('assets/')?>css/bootstrap.min.css" rel="stylesheet">
    <style>
        .image-announcement img{
            display: inline;
            height: 174px;
            border-radius: 5px;
        }

        .announcement li p{
            margin-bottom: 1px;
        }

        .major-prdt .card-body h5{
            color: #8462e8;
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        .heartbeat .card{
            background: #f7f7f7;
        }

        footer p a{
            text-decoration: none;
            color: #b9b3b3;
        }

        footer p a:hover{
            color: #8462e8;
        }

        .btn-register{
            text-decoration: none;
            border: 1px solid #8e7afd;
            padding: .2rem;
            background: #8e7afd;
            border-radius: 3px;
        }

        .btn-login{
            padding: .2rem;
            border: 1px solid #fbfbfb;
            text-decoration: none;
            border-radius: 3px;
        }

        .btn-login:hover{
            background: #8e7afd;
            border: 1px solid #8e7afd;
        }

        .coin-list tr th, .coin-list tr td{
            white-space: nowrap;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        @media only screen and (max-width: 600px) {
            .navbar-collapse{
                background: #472a9e;
                text-align: center;
                padding: 1.2rem;
                border-radius: 5px;
            }

            .image-announcement{
                text-align: center !important;
            }

            .image-announcement img {
                display: inline-block !important;
                margin-bottom: 1rem !important;
                width: auto !important;
            }

            .sec-major .col-md-4{
                margin-bottom: 1rem;
            }

            .heartbeat .col-md-3{
                margin-bottom:1rem;
            }

            footer .col-md-3{
                text-align: center;
                margin-bottom:2rem;
            }
        }
        
        </style>
    <title>Exchanger</title>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top" id="navbar" style="background-color: rgba(59, 42, 148, 0.2);">
        <div class="container-fluid px-5">
            <a class="navbar-brand" href="#">EXCHANGER</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Market</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Exchange</a>
                    </li>
                </ul>
                <span class="text-white">
                    <a class="text-white btn-login" href="">Login</a> &nbsp;|&nbsp; <a class="text-white btn-register" href="">Register</a>
                </span>
            </div>
        </div>
    </nav>
    </header>

    <main>
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" style="height: 600px;">
            <div class="carousel-inner">
                <div class="carousel-item active" style="background: url('assets/img/5445590.jpg');height: 600px;">
                    <div class="container">
                        <div class="row" style="margin-top: 15%;">
                            <div class="col-md-6 text-white">
                                <h1>Example headline.</h1>
                                <p>Some representative placeholder content for the first slide of the carousel.</p>
                                <p><a class="btn btn-lg btn-primary" href="#">Start Now</a></p>
                            </div>
                            <div class="col-md-6 d-flex justify-content-center">
                                <img src="<?= base_url('assets/img/astronout_bg.png')?>" alt="#" width="300">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container marketing">

            <!-- START THE FEATURETTES -->
            <div class="row featurette mt-3">

                <h4>Anouncements</h4>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-group list-group-flush announcement">
                            <li class="list-group-item">
                                <p>
                                    # Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                </p>
                                <span class="form-text">24 May 2022</span>
                            </li>
                            <li class="list-group-item">
                                <p>
                                    # Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                </p>    
                                <span class="form-text">24 May 2022</span>
                            </li>
                            <li class="list-group-item">
                                <p>
                                    # Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                </p>
                                <span class="form-text">24 May 2022</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 image-announcement">
                        <img src="<?= base_url('assets/img/colorful-cryptocurrency-with-mock-up_23-2148414171.jpg')?>" alt="#">
                        <img src="<?= base_url('assets/img/jackpot-background-with-flying-golden-coins_1017-23144.jpg')?>" alt="#">
                    </div>
                </div>
            </div>

            <div class="row featurette mt-5">
                <h4>Coin List</h4>

                <div class="card shadow p-3 mb-5 bg-white rounded">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table coin-list">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-break">Coin Name</th>
                                        <th scope="col">Last Price</th>
                                        <th scope="col">Change 24 hour</th>
                                        <th scope="col">Market</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="align-middle">
                                        <td scope="row">
                                            <img src="<?= base_url('assets/img/bitcoin.png')?>" alt="#" width="25px">&nbsp; BTC Bitcoin
                                        </td>
                                        <td>Rp 572,134,946.59</td>
                                        <td class="text-success">+3.69%</td>
                                        <td>
                                            <img src="<?= base_url('assets/img/chart tradding.png')?>" alt="#" class="img-fluid">
                                        </td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td scope="row">
                                            <img src="<?= base_url('assets/img/ethereum.png')?>" alt="#" width="25px">&nbsp;ETH Ethereum
                                        </td>
                                        <td>Rp 42,322,079.98</td>
                                        <td class="text-success">+4.20%</td>
                                        <td>
                                            <img src="<?= base_url('assets/img/chart tradding.png')?>" alt="#" class="img-fluid">
                                        </td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td scope="row">
                                            <img src="<?= base_url('assets/img/tether.png')?>" alt="#" width="25px">&nbsp;USDT TetherUS
                                        </td>
                                        <td>Rp 14,404.66</td>
                                        <td class="text-danger">-0,70%</td>
                                        <td>
                                            <img src="<?= base_url('assets/img/chart tradding.png')?>" alt="#" class="img-fluid">
                                        </td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td scope="row">
                                            <img src="<?= base_url('assets/img/dogecoin.png')?>" alt="#" width="25px">&nbsp;DOGE Dogecoin
                                        </td>
                                        <td>Rp 1,974.66</td>
                                        <td class="text-success">+4.62%</td>
                                        <td>
                                            <img src="<?= base_url('assets/img/chart tradding.png')?>" alt="#" class="img-fluid">
                                        </td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td scope="row">
                                            <img src="<?= base_url('assets/img/filecoin.png')?>" alt="#" width="25px">&nbsp;FIL Filecoin
                                        </td>
                                        <td>Rp 225,553.33</td>
                                        <td class="text-success">+4.81%</td>
                                        <td>
                                            <img src="<?= base_url('assets/img/chart tradding.png')?>" alt="#" class="img-fluid">
                                        </td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td scope="row">
                                            <img src="<?= base_url('assets/img/xrp.png')?>" alt="#" width="25px">&nbsp;XRP XRP
                                        </td>
                                        <td>Rp 9,367.88</td>
                                        <td class="text-success">+4.89%</td>
                                        <td>
                                            <img src="<?= base_url('assets/img/chart tradding.png')?>" alt="#" class="img-fluid">
                                        </td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td scope="row">
                                            <img src="<?= base_url('assets/img/tron.png')?>" alt="#" width="25px">&nbsp;TRX TRON
                                        </td>
                                        <td>Rp 1,259.87</td>
                                        <td class="text-success">+22.6%</td>
                                        <td>
                                            <img src="<?= base_url('assets/img/chart tradding.png')?>" alt="#" class="img-fluid">
                                        </td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td scope="row">
                                            <img src="<?= base_url('assets/img/icon-zenx.png')?>" alt="#" width="25px">&nbsp;ZENX Zenith Token
                                        </td>
                                        <td>Rp 234.75</td>
                                        <td class="text-danger">-0.8%</td>
                                        <td>
                                            <img src="<?= base_url('assets/img/chart tradding.png')?>" alt="#" class="img-fluid">
                                        </td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td scope="row">
                                            <img src="<?= base_url('assets/img/icon-mtm.png')?>" alt="#" width="25px">&nbsp;MTM MTM
                                        </td>
                                        <td>Rp 56,388.39</td>
                                        <td class="text-success">+4.81%</td>
                                        <td>
                                            <img src="<?= base_url('assets/img/chart tradding.png')?>" alt="#" class="img-fluid">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /END THE FEATURETTES -->
        </div>
        <!-- /.container -->

        <div style="background: #472a9e;padding: 2rem 0 2rem 0;">
        <div class="container sec-major">
            <h4 class="mb-3 text-white">Major Products</h4>
            <div class="row">
                <div class="col-md-4">
                    <div class="card major-prdt">
                        <div class="card-body">
                            <h5>Lorem ipsum dolor sit amet</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et lectus lacus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card major-prdt">
                        <div class="card-body">
                            <h5>Lorem ipsum dolor sit amet</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et lectus lacus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card major-prdt">
                        <div class="card-body">
                            <h5>Lorem ipsum dolor sit amet</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et lectus lacus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-4">
                    <div class="card major-prdt">
                        <div class="card-body">
                            <h5>Lorem ipsum dolor sit amet</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et lectus lacus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card major-prdt">
                        <div class="card-body">
                            <h5>Lorem ipsum dolor sit amet</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et lectus lacus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card major-prdt">
                        <div class="card-body">
                            <h5>Lorem ipsum dolor sit amet</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et lectus lacus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <h4 class="mb-3">The Heartbeat of Present and Future</h4>
        <div class="row heartbeat">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5>Lorem ipsum dolor sit amet</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et lectus lacus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5>Lorem ipsum dolor sit amet</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et lectus lacus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5>Lorem ipsum dolor sit amet</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et lectus lacus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5>Lorem ipsum dolor sit amet</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et lectus lacus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-dark">
        <div class="container">
            <!-- <p class="float-end"><a href="#">Back to top</a></p> -->
            <!-- <p>&copy; 2017–2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p> -->
            <div class="text-white text-center py-3">
                <h4>Exchanger</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="row text-white py-5">
                <div class="col-md-3">
                    <p class="fw-bold">Social media</p>
                    <img src="<?= base_url('assets/img/facebook.png')?>" alt="#" width="25px">&nbsp;
                    <img src="<?= base_url('assets/img/instagram.png')?>" alt="#" width="25px">&nbsp;
                    <img src="<?= base_url('assets/img/youtube.png')?>" alt="#" width="25px">
                </div>
                <div class="col-md-3">
                    <p class="fw-bold">Service Information</p>
                    <p class="mb-0">
                        <a href="#">News</a> 
                    </p>
                    <p class="mb-0">
                        <a href="#">
                            API Documentation
                        </a> 
                    </p>
                    <p class="mb-0">
                        <a href="#">
                            Campaign
                        </a> 
                    </p>
                    <p class="mb-0">
                       <a href="#">Insight</a> 
                    </p>
                </div>
                <div class="col-md-3">
                    <p class="fw-bold">About</p>
                    <p class="mb-0">
                        <a href="#">About Us</a> 
                    </p>
                    <p class="mb-0">
                        <a href="#">Terms and conditions</a> 
                    </p>
                    <p class="mb-0">
                        <a href="#">Privacy Policy</a> 
                    </p>
                    <p class="mb-0">
                       <a href="#">BIDR</a>  
                    </p>
                </div>
                <div class="col-md-3">
                    <p class="fw-bold">
                        <a href="#">Help</a> 
                    </p>
                    <p class="mb-0">
                       <a href="#">FAQ</a> 
                    </p>
                    <p class="mb-0">
                        <a href="#">Help Center</a> 
                    </p>
                    <p class="mb-0">
                        <a href="#">Trading Fee</a> 
                    </p>
                </div>
            </div>
            <div class="text-white">
                <p class="fw-bold">Disclaimer : </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et lectus lacus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin blandit, nisi consectetur posuere pretium, felis arcu malesuada tortor, eget mattis quam dolor a ipsum. </p>
            </div>
            <div class="text-white text-center py-5">
                <p>All Right Reserve &copy; Exchanger 2022</p>
            </div>
        </div>
    </footer>
    </main>
    <script src="<?= base_url('assets/')?>js/bootstrap.bundle.min.js" ></script>
    <script>
        window.onscroll = function() {scrollFunction()};
        function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            
            document.getElementById("navbar").style.background = "#472a9e";
        } else {
        
            document.getElementById("navbar").style.background = "rgba(59, 42, 148, 0.2)";
        }
        }
    </script>
</body>
</html>