<!--
Author: Mr. Hakim Mudor
FileName: base.html
Desc: description
Created:  Mon Jun 27 2022
-->

<!DOCTYPE html>
<html class="h-100">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link href="https://getbootstrap.com/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link href="../assets/css/modified.css" rel="stylesheet">
    <title>Index</title>
</head>

<body class="d-flex h-100 bg-braintest">


    <header>
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container-fluid">
                <div class=" navbar-brand d-flex align-items-center text-decoration-none">
                    <img src="../assets/images/logo.png" height="40" class="bi me-2">
                    <span class="fs-4">Brain.Test</span>
                </div>
            </div>
        </nav>
    </header>

    <audio autoplay>
        <source src="demo.mp3" type="audio/mpeg">
    </audio>
    <div class="cover-container d-flex w-100 h-100 mx-auto flex-column">
        <main class="my-auto">
            <div class="container">
                <div class="px-4  text-center">
                    <h1 class="display-1 fw-bold" style="font-size: 10rem;">
                        <div id="result"></div>
                    </h1>
                    <div class="col-lg-6 mx-auto text-center">

                        <p class="lead my-4">
                        <div class="spinner-border spinner-border-sm" role="status">
                            <span class="sr-only"></span>
                        </div>

                        <i class="fa-solid fa-circle"></i>
                        <i class="fa-solid fa-circle"></i>
                        </p>

                        <p id="instructions"></p>
                    </div>
                </div>
                <form action="wordcut.php" id="myForm" method="POST">
                    <input type="text" id="transcript" name="transcript">
                </form>
            </div>
        </main>
    </div>


    <div class="container fixed-bottom">
        <div class="row">
            <div class="col py-2 mx-auto">
                <button class=" w-100 btn btn-lg rounded-pill btn-brain" id="start_button">เริ่มการทดสอบ</button>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        let c = 15;
        var counter = setInterval(() => {
            document.getElementById("result").innerHTML = c;
            c--;
            if (c == -1) {
                clearInterval(counter);
                var audio = new Audio('https://modx.hccrg.org/demo/start.mp3');
                audio.play();
                document.getElementById("start_button").click();
                //นับต่อไปอีก 60 วิ
                let b = 20;
                var counters = setInterval(() => {
                    document.getElementById("result").innerHTML = b;
                    b--;
                    if (b == 1) {
                        //  clearInterval( counters );
                        document.getElementById("start_button").click();

                    }
                    if (b == -1) {
                        clearInterval(counters);
                        document.getElementById("myForm").submit();

                    }
                }, 1000);
            }
        }, 1000);
    </script>


    <script src="https://code.jquery.com/jquery-3.6.0.slim.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://getbootstrap.com/docs/5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/modified.js"></script>
    <script type="text/javascript" src="../assets/js/script.js"></script>
</body>

</html>