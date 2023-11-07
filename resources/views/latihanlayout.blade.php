<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edward Latihan bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <style>
        body{
            background-color: #F5F5F5;
        }
        .container-fluid{
            padding: 0;
        }
        .logo{
            width: 150px;
            margin-top: 50px;
        }
    
        #headline{
            margin-left: 17px; 
            margin-top: 20px;
        }
        #pheadline{
            margin-left: 20px; 
            margin-top: 15px;
            padding-right: 120px;
        }
        h1{
            font-size: 60px;
            font-family: 'Nunito', sans-serif;
            font-weight: bold;
        }
        #content{
            margin-left: 20px;
            margin-top: 170px;
            margin-right: 20%;
        } 
        p{
            font-size: larger;
            font-family: 'Nunito', sans-serif;
        }
        #p1{
            font-size: 220%;
            line-height: 1.5;
        }
        #subheadline{
            margin-top: 5px;
        }
        .imej{
            width: 45px;
            margin-right: 25px;
        }
    </style>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;900&display=swap" rel="stylesheet">

</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5">
                <img src="./image/Background-image.png" class="img-fluid" alt="Gambar Anda">
            </div>
            <div class="col-lg-7">
                <div class="row">
                    <div class="col-lg-8"></div>
                    <div class="col-lg-4">
                        <img class="logo ml-auto" src="./image/Dark.png">
                    </div>
                </div>
                <div class="row">
                    <div class="row" id="headline">
                        <h1>Company Name</h1>
                    </div>
                    <div class="row" id="pheadline">
                        <p id="p1">Intriguing summary goes here. Heep it short & sweet. Describe the problem you are solving. Focus on the pain point.                        </p>
                    </div>
                </div>
                <div class="row" id="content">
                    <div class="row" id="subheadline">
                        <p id="p1"><img src="./image/Website-link.png" class="imej">www.website.com</p>
                    </div>
                    <div class="row" id="subheadline">
                        <p id="p1"><img src="./image/Twitter.png" class="imej">@companyhandle</p>
                    </div>
                    <div class="row" id="subheadline">
                        <p id="p1"><img src="./image/Facebook.png" class="imej">@companyhandle</p>
                    </div>
                </div>
                
            </div>
        </div>     
    </div>
     
</body>
</html>
