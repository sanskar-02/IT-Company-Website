<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seaco software</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        /* Conatct start */

        .header-title {
            text-align: center;
            color: #00bfff;
        }

        #tip {
            display: none;
        }

        .fadeIn {
            animation-duration: 3s;
        }

        .form-control {
            border-radius: 0px;
            margin-block: 8px;    
        
        }

        .form-control:focus {
         
        }

        .textarea-contact {
            resize: none;
        }

        .btn-send {
            border: 1px solid  #682984;
            color: #fff !important;

        }

        .btn-send:hover {
            border: 1px solid #682984  !important;
            background: #fff;
            color: #000 !important;
            
        }

        .second-portion {
            margin-top: 50px;
        }

        @import "//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css";
        @import "http://fonts.googleapis.com/css?family=Roboto:400,500";

        .box>.icon {
            text-align: center;
            position: relative;
        }

        .box>.icon>.image {
            position: relative;
            z-index: 2;
            margin: auto;
            width: 88px;
            height: 88px;
            border: 8px solid white;
            line-height: 88px;
            border-radius: 50%;
            background:#682984;
            vertical-align: middle;
        }


        .box>.icon>.image>i {
            font-size: 36px !important;
            color: #fff !important;
            transition: 300ms ease;
        }

        .box>.icon:hover>.image>i {
            /* color:#682984 !important; */
            transform: scale(1.1);
        }

        .box>.icon>.info {
            margin-top: -24px;
            background: rgba(0, 0, 0, 0.04);
            border: 1px solid #e0e0e0;
            padding: 15px 0 10px 0;
            min-height: 133px;
        }

      

        

        .box>.icon>.info>p {
          width: 100%;
            font-size: 13px;
            color: #666;
            line-height: 1.5em;
            margin-top: 20px;
        }   

  

        
    </style>
</head>

<body>
    <?php include('header.php') ?>
    <div class="hero-banner row mt-5">
        <div class="title text-light col-12 ">
            <h1>Contact</h1>
        </div>

        <nav class="breadcrumbs">
            <a href="#home" class="breadcrumbs__item">Home</a>
            <a href="#shop" class="breadcrumbs__item">Contact</a>

        </nav>

    </div>


    <div class="container animated fadeIn">

        
            <div class="row  mt-5" id="parent">
                <div class="col-sm-10 col-lg-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d826.3599788947818!2d77.37839995646438!3d28.629978405775613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ceff8864e0cf1%3A0xa20290bf75099ebd!2sBSI%20Business%20Park%20H15!5e0!3m2!1sen!2sin!4v1712643481520!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                
                </div>

                <div class="col-sm-10 col-lg-6">
                    <form action="" id="form" class="contact-form" method="post">

                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required="" autofocus="">
                        </div>


                        <div class="form-group form_left">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" id="phone" name="phone" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="10" placeholder="Mobile No." required="">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control textarea-contact" rows="5" id="comment" name="comment" placeholder="Type Your Message..." required=""></textarea>
                            <br>
                            <button class="btn btn1 btn-send" id="submit" name="submit"  > <span class="glyphicon glyphicon-send"></span> Send message</button>
                            <span style="color:#8647a3;" id="msg"></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="container py-4">
            <div class="row">
                <!-- Boxes de Acoes -->
                <div class="col-xs-12 col-sm-6 col-lg-4">
                    <div class="box">
                        <div class="icon">
                            <div class="image"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                            <div class="info text-center">
                               
                                <p>
                                    <i class="fa fa-envelope" aria-hidden="true"></i> &nbsp seacosoftware@gmail.com
                                    <br>
                                    <br>
                                    <i class="fa fa-globe" aria-hidden="true"></i> &nbsp www.seacosoftware.com
                                </p>

                            </div>
                        </div>
                     
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-lg-4">
                    <div class="box">
                        <div class="icon">
                            <div class="image"><i class="fa fa-mobile" aria-hidden="true"></i></div>
                            <div class="info text-center">

                                <p>
                                    <i class="fa fa-mobile" aria-hidden="true"></i> &nbsp (+91)-9624XXXXX
                                    <br>
                                    <br>
                                    <i class="fa fa-mobile" aria-hidden="true"></i> &nbsp (+91)-756706XXXX
                                </p>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-lg-4">
                    <div class="box">
                        <div class="icon">
                            <div class="image"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                            <div class="info text-center ">
                               
                                <p>
                                    <i class="fa fa-map-marker" aria-hidden ="true"></i> &nbsp 305, H-15 BSI building, sector-63, Noida, Uttarpradesh, India 
                                </p>
                            </div>
                        </div>
                       
                    </div>
                </div>
              

        

            </div>
        </div>

    </div>
    <script>
        jQuery('#form').on('submit', function (e) {
            jQuery('#msg').html('');
            jQuery('#submit').html('Please wait');
            jQuery('#submit').attr('disabled', true);
            jQuery.ajax({
                url: 'submit.php',
                type: 'post',
                data: jQuery('#form').serialize(),
                success: function (result) {
                    jQuery('#msg').html(result);
                    jQuery('#submit').html('Message Sent');
                    jQuery('#submit').attr('disabled', false);
                    jQuery('#form')[0].reset();
                }
            });
            e.preventDefault();
        });
    </script>
    <?php include('footer.php') ?>
</body>

</html>