<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Login</title>
    <link rel="icon" href="rtq.png">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
        body {
    color: #000;
    overflow-x: hidden;
    height: 100%;
    background-color: palegoldenrod;
    background-repeat: no-repeat;
}

.card0 {
    box-shadow: 0px 4px 8px 0px #757575;
    border-radius: 0px;
}

.card2 {
    margin: 0px 40px;
    color: goldenrod;
}

.logo {
    width: 200px;
    height: 100px;
    margin-top: 20px;
    margin-left: 35px;
}

.image {
    width: 400px;
    height: 370px;
}

.border-line {
    border-right: 1px solid #EEEEEE;
}

.facebook {
    background-color: #3b5998;
    color: #fff;
    font-size: 18px;
    padding-top: 5px;
    border-radius: 50%;
    width: 35px;
    height: 35px;
    cursor: pointer;
}

.twitter {
    background-color: #1DA1F2;
    color: #fff;
    font-size: 18px;
    padding-top: 5px;
    border-radius: 50%;
    width: 35px;
    height: 35px;
    cursor: pointer;
}

.linkedin {
    background-color: #2867B2;
    color: #fff;
    font-size: 18px;
    padding-top: 5px;
    border-radius: 50%;
    width: 35px;
    height: 35px;
    cursor: pointer;
}

.line {
    height: 1px;
    width: 40%;
    background-color: #E0E0E0;
    margin-top: 10px;
}

.or {
    width: 20%;
    font-weight: bold;
    font-family: cursive;
    color: darkgoldenrod;
}

.text-sm {
    font-size: 14px !important;
}

::placeholder {
    color: #BDBDBD;
    opacity: 1;
    font-weight: 300
}

:-ms-input-placeholder {
    color: #BDBDBD;
    font-weight: 300
}

::-ms-input-placeholder {
    color: #BDBDBD;
    font-weight: 300
}

input, textarea {
    padding: 10px 12px 10px 12px;
    border: 1px solid lightgrey;
    border-radius: 2px;
    margin-bottom: 5px;
    margin-top: 2px;
    width: 100%;
    box-sizing: border-box;
    color: #2C3E50;
    font-size: 14px;
    letter-spacing: 1px;
}

input:focus, textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #304FFE;
    outline-width: 0;
}

button:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline-width: 0;
}

a {
    color: inherit;
    cursor: pointer;
}

.btn-blue {
    background-color: darkgoldenrod;
    width: 150px;
    color: #fff;
    border-radius: 2px;
}

.btn-blue:hover {
    background-color: #000;
    cursor: pointer;
}

.bg-blue {
    color: darkgoldenrod;
    background-color: palegoldenrod;
    font-family: !important;
}

@media screen and (max-width: 800px) {
    .logo {
        margin-left: 0px;
    }

    .image {
        width: 500px;
        height: 220px;
    }

    .border-line {
        border-right: none;
    }

    .card2 {
        border-top: 1px solid #EEEEEE !important;
        margin: 0px 15px;
    }

}


.murid{
    margin-left: 150px;
    font-family: cursive;
    color: darkgoldenrod;
    font-size: 2vw;
}
.guru{
    margin-left: -50px;
    font-family: cursive;
    color: darkgoldenrod;
    font-size: 2vw;
}


    </style>
</head>
<body>
<div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    <div class="card card0 border-0">
        <div class="row d-flex">
            <div class="col-lg-6">
                <div class="card1 pb-5">
                
                    <div class="row px-3 justify-content-center mt-5 mb-5 border-line">
                        <img src="data:image/jpeg;base64,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" class="image">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card2 card border-0 px-4 py-5">
                    <div class="row mb-4 px-3">
                        <h6 class="mb-0 mr-4 mt-2">HALAMAN LOGIN</h6>
                    </div>
                    <div class="row px-3 mb-3">
                        <div class="line"></div>
                        <small class="or text-center">Login</small>
                        <div class="line"></div>
                    </div>
                    <div class="row px-3">
                        <label class="mb-1"><h6 class="mb-0 text-sm">Username</h6></label>
                        <input class="mb-4" type="text" name="email" placeholder="Enter a valid Username">
                    </div>
                    <div class="row px-3">
                        <label class="mb-1"><h6 class="mb-0 text-sm">Password</h6></label>
                        <input type="password" name="password" placeholder="Enter password">
                    </div>
                    <div class="row px-3 mb-4">
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input id="chk1" type="checkbox" name="chk" class="custom-control-input"> 
                            <label for="chk1" class="custom-control-label text-sm">Remember me</label>
                        </div>
                    </div>
                    <div class="row px-3 ">
                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" style="color: darkgoldenrod; font-family: !important;">
                          <option selected value="1">Admin</option>
                          <option value="2">Guru</option>
                          <option value="3">Murid/OrangTua</option>
                        </select>
                    </div>
                    <br>
                    <div class="row mb-3 px-3">
                        <button type="submit" class="btn btn-blue text-center">Login</button>
                    </div>
                     <div class="card2 card border-0 px-10 py-2">
                </div>
            </div>
        </div>
       
    </div>
        <div class="bg-blue py-4">
            <div class="row px-3">
                <small class="ml-4 ml-sm-5 mb-2">Rumah Tahfidz Qur'an Al Hasan Kota Banjarbaru</small>
            </div>
        </div>
    </div>
</div>
</body>
</html>