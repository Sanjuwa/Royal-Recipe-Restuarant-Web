<head>
    <meta charset="UTF-8">
    <title>Something Went Wrong</title>


    <link href="../img/favicon.png" rel="icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../lib/jquery/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>


<script>
        $(document).ready(function( $ ) {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 50) {
                    $('.back-to-top').fadeIn('slow');
                } else {
                    $('.back-to-top').fadeOut('slow');
                }
            });
            $('.back-to-top').click(function () {
                $('html, body').animate({scrollTop: 0}, 500);
                return false;
            });
        });
    </script>
    <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../css/profile.css" rel="stylesheet">

</head>
<body>
<div class="container panel">
    <div class="row" id="mn">

        <div class="form-group">

            <div class="state"><br><i class="glyphicon glyphicon-exclamation-sign"></i><!--img src="../img/profileico.png"--> <br><h1>Something Went Wrong</h1></div>
    <?php
    session_start();
    $code=$_SESSION['code'];
    ?>        
    
    
               
                    <center>
                    <div class="col-lg-12" style="margin-bottom:50px">

                        <button class="logout" onclick="window.location.href='../store.php'">Back to Store</button>
                    </div></center>

                    
                </div>



        </div>
    </div>

</div>


<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
</body>








    </div>






</div>




</body>