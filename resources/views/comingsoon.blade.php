<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SDA &bull; Home</title>
    <link rel="icon" href="ui/assets/img/landing/redtop.png" type="image/x-icon">

    <style>
        * {
            outline: solid 1px green;
            outline: solid 1px transparent;
        }

        html,
        body {
            width: 100%;
            height: 100%;
            overflow: hidden;
            background: #842c2d;
        }

        body {
            margin: 0;
            position: relative;
            background-image: url(ui/assets/img/landing/iamges.png);
            background-repeat: no-repeat;
            background-position: bottom;
            background-size: calc(100% - 10vw) auto;
        }

        header {
            position: fixed;
            top: 10vh;
            left: 50%;
            transform: translateX(-50%);
            z-index: 100;
            width: calc(50% - 5vw);
        }

        footer {
            position: fixed;
            bottom: 0;
            right: 0;
            width: calc(75% - 5vw);
            z-index: 200;
        }

        @media (min-width: 992px) {
            body {
                background-position: left bottom;
                background-size: calc(50% - 5vw) auto;
            }
            header {
                top: 50%;
                left: 62.5%;
                transform: translate(-50%, -50%);
                width: 28%;
            }

            footer {
                width: 40%;
            }
        }
    </style>
</head>

<body>

    <header>
        <img src="ui/assets/img/landing/wording.png" width="100%" height="auto" alt="">
    </header>

    <footer>
        <img src="ui/assets/img/landing/frontimage.png" width="100%" height="auto" alt="">
    </footer>

</body>

</html>