<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ian Torres</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600" rel="stylesheet">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- FontAwesome -->
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.9.0/css/all.css" integrity="sha384-vlOMx0hKjUCl4WzuhIhSNZSm2yQCaf0mOU1hEDK/iztH3gU4v5NMmJln9273A6Jz" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .avatar {
                border-radius: 15px;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 48px;
            }

            .subtitle {
                font-size: 12px;
                text-transform: uppercase;
            }

            .navigation > a {
                color: #636b6f;
                padding: 8px 14px;
                margin: 0px 3px;
                font-size: 16px;
                font-weight: 300;
                letter-spacing: .01rem;
                text-decoration: none;
                border: 3px solid #e9ecef;
            }

            .links > a {
                color: #636b6f;
                padding: 8px 14px;
                margin: 2px 3px;
                font-size: 16px;
                font-weight: 300;
                letter-spacing: .01rem;
                text-decoration: none;
                border: 3px solid #e9ecef;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="mb-2 p-4">
                    <img class="avatar img-fluid shadow-lg" src="https://avatars.githubusercontent.com/demency" alt="Ian Torres">
                </div>
                <div class="title mb-2"><i class="fal fa-child mr-3"></i> Ian Torres</div>
                <div class="subtitle mb-5">Licenciado en Informática</div>

                <div class="navigation mb-5 mt-4">
                    <a class="d-inline-block mb-2" href="{{ route('proyectos') }}"><i class="fa fa-project-diagram"></i> Proyectos</a>
                    <a class="d-inline-block mb-2" href="{{ route('conocimientos') }}"><i class="fa fa-book"></i> Conocimientos</a>
                    <a class="d-inline-block mb-2" href="{{ route('contacto') }}"><i class="fa fa-at"></i> Contacto</a>
                </div>

                <div class="subtitle mb-4 mt-5">Encuéntrame en</div>

                <div class="links mb-5">
                    <a class="d-inline-block mb-2" href="https://github.com/demency"><i class="fab fa-github"></i> GitHub</a>
                    <a class="d-inline-block mb-2" href="https://www.meetup.com/es/Laravel-Chile/members/194777925/"><i class="fab fa-meetup"></i> Meetup</a>
                    <a class="d-inline-block mb-2" href="https://cl.linkedin.com/in/iantorresdev"><i class="fab fa-linkedin"></i> Linkedin</a>
                </div>
            </div>
        </div>
    </body>
</html>
