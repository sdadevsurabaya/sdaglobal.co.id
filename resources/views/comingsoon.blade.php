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

        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        html {
            width: 100%;
            height: 100%;
        }

        html,
        body {
            width: 100%;
            min-height: 100%;
            background: #842c2d;
            color: white;
            justify-content: flex-end;
        }

        body {
            margin: 0;
            display: flex;
            flex-direction: column;
            position: relative;
        }

        body>* {
            width: 100%;
            height: auto;
        }

        header {
            padding: 20vw 10vw;
        }

        main {
            margin-top: auto;
            display: flex;
            align-items: flex-end;
        }

        footer {
            position: absolute;
            bottom: 0;
            right: 0;
            width: 85%;
            display: flex;
            align-items: flex-end;
        }

        @media (min-width: 992px) {
            body {
                flex-direction: row;
                height: 100%;
                overflow: hidden;
            }

            header {
                order: 2;
                width: 50%;
                height: 100%;
                padding: 0;
                display: flex;
                align-items: center;
            }

            header>img {
                max-width: 32vw;
            }

            main {
                width: 50%;
                height: 100%;
                order: 1;
            }

            main>img {
                height: 90%;
                width: auto;
            }

            footer {
                order: 3;
                position: fixed;
                width: 40%;
            }
        }
    </style>
</head>

<body>

    <header>
        <img src="ui/assets/img/landing/wording-mobile.png" width="100%" height="auto" alt="">
    </header>
    <main>
        <img src="ui/assets/img/landing/person-mobile.png" width="100%" height="auto" alt="">
    </main>
    <footer>
        <img src="ui/assets/img/landing/label-mobile.png" width="100%" height="auto" alt="">
    </footer>

</body>

</html>