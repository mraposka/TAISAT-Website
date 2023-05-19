<head>
    <style>
        .card {
            width: 50vh;
            height: 100vh;
            background-repeat: no-repeat;
            background-position: center;
            background-color: rgb(64, 64, 58) !important;
            z-index: 0;
        }

        .ika:hover {
            filter: blur(0px);
            cursor: pointer;
        }

        .uydu:hover {
            filter: blur(0px);
            cursor: pointer;
        }

        .ika {
            background-image: url('ika.png'), url("ikabg.jpg");
            background-position: center;
            background-repeat: no-repeat, repeat;
            background-size: contain;
            filter: blur(3px);
            transition: 0.2s -webkit-filter linear;
        }

        .uydu {
            background-image: url('uydu.png'), url("uydubg.jpg");
            background-position: center;
            background-repeat: no-repeat, repeat;
            background-size: contain;
            filter: blur(3px);
            transition: 0.2s -webkit-filter linear;
        }

        .centered {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 card ika">
                <div class="centered">
                    <h1 style="color: red; font-weight: bolder; font-size: 50pt; text-align: center;">
                        İnsansız Kara Aracı</h1>
                </div>
            </div>
            <div class="col-md-6 card uydu">
                <div class="centered">
                    <h1 style="color: red; font-weight: bolder; font-size: 50pt; text-align: center;">Model
                        Uydu</h1>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script>
        var ika = document.getElementsByClassName('ika')[0]; 
        var uydu = document.getElementsByClassName('uydu')[0]; 
        ika.addEventListener('click', function (event) { 
            window.location.replace("Greenguard/");
        });
        uydu.addEventListener('click', function (event) { 
            window.location.replace("Marm-99/");
        });
    </script>
</body>