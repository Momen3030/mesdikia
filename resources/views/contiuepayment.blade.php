<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title> مصداقية</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/logo2.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Amiri|Aref+Ruqaa|Changa|Katibeh|Lalezar|Reem+Kufi|Tajawal&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <script src="https://mesdakiafinal.000webhostapp.com/js/bootstrap-4.js"></script>
    <script src="https://mesdakiafinal.000webhostapp.com/js/bootstrap.min-4.js"></script>


    <link rel="stylesheet" href="https://mesdakiafinal.000webhostapp.com/css/bootstrap-grid.min-4.css">
    <link rel="stylesheet" href="https://mesdakiafinal.000webhostapp.com/css/bootstrap.min-4.css">


    <link rel="stylesheet" href="https://mesdakiafinal.000webhostapp.com/css/animate.csscss/normalize.css">
    <link rel="stylesheet" href="https://mesdakiafinal.000webhostapp.com/css/animate.csscss/hover.css">
    <link rel="stylesheet" href="https://mesdakiafinal.000webhostapp.com/css/animate.css">
    <link rel="stylesheet" href="https://mesdakiafinal.000webhostapp.com/css/style_mesd.css">
    <link rel="stylesheet" href="https://mesdakiafinal.000webhostapp.com/css/salesmain.css">
    <link rel="stylesheet" href="https://mesdakiafinal.000webhostapp.com/css/Vehicles.css">
    <link rel="stylesheet" href="https://mesdakiafinal.000webhostapp.com/css/profile_user.css">
    <link rel="stylesheet" href="https://mesdakiafinal.000webhostapp.com/css/editforms.css">

</head>
<body>
<div class="card" id="cars_d">
    <div class="card-body">
        <div class="container">
            <div class="row" >
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <h4 class="text-center"> Card Payment<hr class="ln"/></h4>
                    <div class="forms">

                        <!-- ====================================== -->
                        <form action="/pay" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="XQbrE38sxT6Xx96cnSYscHC6cABc7Gb6IHE7NsnH">
                            <input type="hidden" name="ownerID" value="2">
                            <input type="hidden" name="category" value="HighValue">

                            <div class="input-group mb-3">
                                <input type="hidden" name="productID" class="form-control" value="1">
                            </div>
                            <div class="input-group mb-3">
                                <select name="paymentBrand" class="form-control" required>
                                    <option value="MASTER">Mastercard</option>
                                    <option value="VISA">Visa</option>
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <input autocomplete="off" type="tel" class="form-control" name="number" placeholder="Card Number" required>
                            </div>
                            <div class="input-group mb-3">
                                <input autocomplete="off" type="tel" name="expiry" class="form-control"  placeholder="MM / YY" required>
                            </div>
                            <div class="input-group mb-3">
                                <input autocomplete="off" type="text" name="holder" class="form-control"  placeholder="Card holder" required>
                            </div>

                            <div class="input-group mb-3">
                                <input autocomplete="off" type="tel" name="cvv" class="form-control" placeholder="CVV" required>
                            </div>
                            <div class="input-group mb-3">
                                <input type="number" name="price" placeholder="Amount" class="form-control" value="4563" required>
                            </div>
                            <button type="submit" name="pay" class="btn btn-outline-primary btn-block btn_sub">Pay now</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://mesdakiafinal.000webhostapp.com/js/jquery-3.3.1.min.js"></script>
<script src="https://mesdakiafinal.000webhostapp.com/js/profile_user.js"></script>

<script src="https://mesdakiafinal.000webhostapp.com/js/jquery.nicescroll.min.js"></script>
<script src="https://mesdakiafinal.000webhostapp.com/js/wow.min.js"></script>
<script src="https://mesdakiafinal.000webhostapp.com/js/editforms.js"></script>
<script>
    new WOW().init();
</script>
</body>
</html>
