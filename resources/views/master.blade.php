<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecom Project</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>
<body>
    {{View::make('header')}}
    @yield("content")
    <br>
    {{View::make('footer')}}
</body>
<style>
   .footer{
    margin:10px;
   }
    .custom-login{
        height: 550px;
        padding-top: 100px;
    }
    img.slider-img{
        height:500px;
        width:1550px;
    }
    .custom-product{
        padding-top: 20px;
        height:600px;
    }
    .slider-text{
        background-color:#35443585;
    }
    .tending-image{
        height:100px;
    }
    .trending-item{
        float:left;
        width:33.3%;
    }
    .trending-wapper{
        margin:30px;
    }
    .detail-img{
        height:300px;
    }
    .cart-list-divider{
        border-bottom : 1px solid #B5B5B4;
        margin-bottom: 20px;
        padding-bottom: 20px;
    }
</style>

</html>