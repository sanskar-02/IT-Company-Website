<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seaco Software</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>

</style>

<body>

    <?php include("header.php")  ?>

    <div class="hero-banner row mt-5">
        <div class="title text-light col-12 ">
            <h1>About US</h1>
        </div>

        <nav class="breadcrumbs">
            <a href="#home" class="breadcrumbs__item">Home</a>
            <a href="#shop" class="breadcrumbs__item">About</a>

        </nav>

    </div>
    <!-- about us start -->
    <section class="about p-3 mt-4">
        <div class="row  px-lg-5">
            <div class="col-lg-5 col-md-6 col-sm-10 about-img"><img src="img/about-thumb1.png" height="70%" alt=""></div>


            <div class="tabbed col-lg-6 col-md-6 col-sm-10">
                <input type="radio" name="tabs" id="tab-nav-1" checked>
                <label for="tab-nav-1">What we do</label>
                <input type="radio" name="tabs" id="tab-nav-2">
                <label for="tab-nav-2">Our Mission</label>
                <input type="radio" name="tabs" id="tab-nav-3">
                <label for="tab-nav-3">Our Goal</label>
                <div class="tabs">
                    <div>
                        <h3>Developing High-quality Apps</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla tortor, a posuere urna.
                            Praesent urna quam, semper ut ultricies et, mollis ac elit. </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla tortor, a posuere urna.
                            Praesent urna quam, semper ut ultricies et, mollis ac elit. Suspendisse tempor, lacus id consectetur
                            sagittis, lorem odio dignissim nulla, a condimentum sem neque sed ligula. Maecenas id risus eros, eget
                            porttitor metus. Quisque pellentesque neque dignissim nisl pellentesque vitae tempus urna eleifend. Nullam
                            egestas, neque id placerat luctus, nibh velit pharetra nulla, vel pretium justo massa ut elit. Vivamus nec
                            auctor nunc.</p>
                    </div>
                    <div>
                        <h3>Providing Reliable Software</h3>
                        <p>Maecenas dictum, urna ut consequat condimentum, est dui commodo diam, ac pretium dui ante eu quam.
                            Curabitur posuere metus nec tellus venenatis placerat. Ut egestas neque in odio vulputate gravida. In at
                            justo ac est laoreet eleifend vel quis arcu. Aliquam erat volutpat. Proin vitae vehicula neque. Nam tempus
                            erat ac ante tincidunt tincidunt. Pellentesque eu nibh sapien. Nunc augue magna, lacinia eget congue eget,
                            mattis id tortor. Fusce id vestibulum neque. Proin tincidunt tellus ut risus lobortis cursus. Duis sit amet
                            urna vel sapien ullamcorper varius.</p>
                    </div>
                    <div>
                        <h2>Supporting Our Clients</h2>
                        <!-- <i class="fa-solid fa-bell"></i>
                        <i class="fa-solid fa-chart-pie"></i> -->
                        <p>Duis luctus dolor ac erat luctus hendrerit. Aenean id congue magna. Proin sit amet elit vel lacus ornare
                            dignissim imperdiet nec odio. Maecenas condimentum egestas lorem et laoreet. Donec ut leo non purus rutrum
                            euismod vel faucibus nunc. Curabitur vel mauris nisi, vitae laoreet erat. Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                            cubilia Curae; Maecenas ipsum odio, iaculis id vulputate vitae, vestibulum at nunc. Integer non nisl lorem.
                            Quisque lobortis congue semper. Nunc neque nisi, consequat id egestas vitae, porta vel sem.</p>
                    </div>

                </div>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.6/prefixfree.min.js"></script>

    </section>



    <!-- about us end  -->

    <!-- WHY CHOOSE US -->

    <section id="whyus" class="whyus p-4">
        <div class="section-heading pb-1">
            <h1>Why Us? </h1>
            <p>Lorem ipsum dolor sit amet.</p>
        </div>

        <div class="row justify-content-evenly">
            <div class="col-lg-4 col-sm-10  ">

                <div class="why-wrap row ">
                    <div class="description1 col-7 ">
                        <h3>Experience</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                    </div>
                    <div class="ico col-3"><img src="img/icon-1.png" alt=""></div>
                </div>

                <div class="why-wrap row  align-items-center">
                    <div class="description1  col-7">
                        <h3>Products</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                    </div>
                    <div class="ico col-3"><img src="img/icon-2.png" alt=""></div>
                </div>

                <div class="why-wrap row">
                    <div class="description1  col-7">
                        <h3>Approach</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                    </div>
                    <div class="ico col-3"><img src="img/icon-3.png" alt=""></div>
                </div>



            </div>
            <div class="about-img col-lg-3 col-sm-10 ">
                <img src="img/features.png" width="100%" class="img-fluid" alt="">
            </div>
            <div class="col-lg-4 col-sm-10">

                <div class="why-wrap row  ">
                    <div class="ico col-3 "><img src="img/icon-4.png" alt=""></div>
                    <div class="description  col-8 ">
                        <h3 class="text-right">Pricing</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                    </div>
                </div>

                <div class="why-wrap row ">
                    <div class="ico col-3 "><img src="img/icon-5.png" alt=""></div>
                    <div class="description  col-8">
                        <h3>Delivery</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                    </div>
                </div>

                <div class="why-wrap row ">
                    <div class="ico col-3 px-sm-3 "><img src="img/icon-6.png" alt=""></div>
                    <div class="description  col-8">
                        <h3>Support</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                    </div>
                </div>
            </div>
        </div>
        
    </section>

    <!-- why choose us end -->

    <!-- our working process -->
    <section class="work-pro p-4">
        <div class="section-heading ">
            <h1>Our Working process </h1>
            <p>Lorem ipsum dolor sit amet.</p>
        </div>
        <div class="row justify-content-evenly">
           <div class="content-box col-md-4">
                <h3>Choose A Service</h3>
                <div class="box-icon-wrap box-icon-effect-1 box-icon-effect-1a">
                    <div class="box-icon"><i class="fa-solid fa-snowflake"></i></div>
                    <p class="dd" >For what reason would it be advisable for me to think about business content.</p>
                </div>
               
            </div>
            <div class="content-box col-lg-4 ">
                <h3>Choose A Service</h3>

                <div class="box-icon-wrap box-icon-effect-1 box-icon-effect-1a">
                    <div class="box-icon"><i class="fa-brands fa-codepen"></i></div>
                    <p class="dd" >For what reason would it be advisable for me to think about business content.</p>
                </div>
            </div>
            <div class="content-box col-lg-4 ">
                <h3>Choose A Service</h3>
                <div class="box-icon-wrap box-icon-effect-1 box-icon-effect-1a">
                    <div class="box-icon"><i class="fa-regular fa-circle-check"></i> </div>
                    <p class="dd" >For what reason would it be advisable for me to think about business content.</p>
                </div>
              
            </div>
        </div>
    </section>

    <!-- counter section  -->

    <section class="counter p-3">

        <div class="projectFactsWrap row  justify-content-center">
            <div class="col-lg-3 col-md-6 col-sm-10 item wow fadeInUpBig animated animated" data-number="12" style="visibility: visible;">
                <i class="fa fa-briefcase"></i>
                <p id="number1" class="number">12</p>
                <span></span>
                <p>Projects done</p>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-10 item wow fadeInUpBig animated animated" data-number="55" style="visibility: visible;">
                <i class="fa-regular fa-face-smile"></i>
                <p id="number2" class="number">55</p>
                <span></span>
                <p>Happy clients</p>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-10 item wow fadeInUpBig animated animated" data-number="359" style="visibility: visible;">
                <i class="fa fa-coffee"></i>
                <p id="number3" class="number">359</p>
                <span></span>
                <p>Cups of coffee</p>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-10 item wow fadeInUpBig animated animated" data-number="246" style="visibility: visible;">
                <i class="fa fa-camera"></i>
                <p id="number4" class="number">246</p>
                <span></span>
                <p>Photos taken</p>
            </div>

        </div>
    </section>




    <!-- counter end section  -->

    <?php include("footer.php")  ?>
    <!-- <script src="js/particles.js"></script>
  <script src="js/tilt.js"></script>
  <script src="js/main.js"></script> -->


</body>

</html>