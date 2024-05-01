<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seaco Software</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.4.4/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.4.4/dist/js/bootstrap.bundle.min.js"></script>


 
</head>

<body>
    <?php include('header.php') ?>


    <div class="row s-banner">
        <div class="bnr-img col-12">
            <img src="img/web-banner.webp" alt="">
            <div class="bnr-heading">
                <h5>Services</h5>
                <h2>Search Engine Optimization</h2>
            </div>
        </div>

    </div>

    <section class="seo p-4">
        <div class="container">
            <div class="sub-head">
                <h3>OUR <span>SEO</span> SERVICES</h3>
            </div>
            <div class="row p-3 ">
                <div class="col-lg-4 seo-cards p-3">
                    <div class="seo-icn">
                        <img src="img/SEO-Service-Icon1.png" alt="">
                    </div>
                    <div class="seo-content">
                        <h4>SEARCH ENGINE OPTIMIZATION</h4>
                        <p>Professional SEO services are perfected from 25+ years of experience, ensuring sites of all sizes will achieve higher rankings on Google and other search engines.</p>
                    </div>
                </div>
                <div class="col-lg-4 seo-cards  p-3">
                    <div class="seo-icn">
                        <img src="img/PPC-Advertising-Icon.png" alt="">
                    </div>
                    <div class="seo-content">
                        <h4>PAY-PER-CLICK MANAGEMENT</h4>
                        <p>PPC Advertising and PPC Management is personally tailored to your business, including paid search methods that will achieve growth and ROI.</p>
                    </div>
                </div>
                <div class="col-lg-4 seo-cards p-3">
                    <div class="seo-icn">
                        <img src="img/Mobile-Optimization-Icon.png" alt="">
                    </div>
                    <div class="seo-content">
                        <h4>MOBILE OPTIMIZATION</h4>
                        <p>SEO Inc provides expert mobile optimization with responsive web design, ad targeting, and improved organic, local, national, and international visibility.</p>
                    </div>
                </div>
                <div class="col-lg-4 seo-cards p-3">
                    <div class="seo-icn">
                        <img src="img/Social-Media-Management.png" alt="">
                    </div>
                    <div class="seo-content">
                        <h4>SOCIAL MEDIA MANAGEMENT</h4>
                        <p>SEO Inc will manage your social media profiles on various platforms. Our team is driven to create results in higher impressions, audience growth, traction, and increase overall online presence.</p>
                    </div>
                </div>

                <div class="col-lg-4 seo-cards p-3">
                    <div class="seo-icn">
                        <img src="img/Local-SEO-Services.png" alt="">
                    </div>
                    <div class="seo-content">
                        <h4>SOCIAL MEDIA MANAGEMENT</h4>
                        <p>SEO Inc will manage your social media profiles on various platforms. Our team is driven to create results in higher impressions, audience growth, traction, and increase overall online presence.</p>
                    </div>
                </div>
                <div class="col-lg-4 seo-cards p-3">
                    <div class="seo-icn">
                        <img src="img/Web-ic-compressor1.png" alt="">
                    </div>
                    <div class="seo-content">
                        <h4>SOCIAL MEDIA MANAGEMENT</h4>
                        <p>SEO Inc will manage your social media profiles on various platforms. Our team is driven to create results in higher impressions, audience growth, traction, and increase overall online presence.</p>
                    </div>
                </div>
            </div>



        </div>

        </div>


        </div>
    </section>
  

   
    <script>
    $(document).ready(function () {
    var silder = $(".owl-carousel");
    silder.owlCarousel({
        autoPlay: true,
        items: 1,
        center: false,
        nav: true,
        margin: 40,
        dots: false,
        loop: true,
        navText: ["<i class='fa fa-arrow-left' aria-hidden='true'></i>", "<i class='fa fa-arrow-right' aria-hidden='true'></i>"],
        responsive: {
            0: {
                items: 1,
            },
            575: { items: 1 },
            768: { items: 2 },
            991: { items: 3 },
            1200: { items: 4 }
        }
    });
});
  </script>



    <?php include('footer.php') ?>
</body>

</html>