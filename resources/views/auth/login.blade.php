
    <!doctype html>
    <html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>Snippet - BBBootstrap</title>
        <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
        <link href='' rel='stylesheet'>
        <style>@import url('https://fonts.googleapis.com/css?family=Poppins&display=swap');

            body {
                background-color: rgb(58, 177, 2);
                font-family: Poppins
            }

            @media(width:1024px) {
                .modal-dialog {
                    max-width: 70%
                }
            }

            .modal-content {
                border-radius: 0.7rem
            }

            .modal-header img {
                width: 100px
            }

            .modal-title {
                margin-left: auto;
                margin-right: auto
            }

            .modal-header {
                border-bottom: none;
                padding-bottom: 0;
                padding-top: 4vh
            }

            .modal-footer {
                border-top: none
            }

            button:active {
                outline: none
            }

            button:focus {
                outline: none
            }

            .modal-body {
                text-align: center
            }

            .title {
                font-size: 17px;
                color: grey
            }

            @media(min-height:768px)and(min-width:411px) {
                .title {
                    font-size: 20px;
                    color: grey
                }
            }

            form {
                padding: 3vh
            }

            input {
                outline: none;
                margin: 0;
                border: none;
                -webkit-box-shadow: none;
                -moz-box-shadow: none;
                box-shadow: none;
                width: 100%;
                font-size: 14px;
                font-family: inherit
            }

            .input-group {
                position: relative;
                margin-bottom: 6vh;
                border-bottom: 1px solid rgba(204, 204, 204, 0.459)
            }

            .input--style-3 {
                font-size: 14px;
                color: rgb(143, 141, 141);
                background: transparent
            }

            .input--style-3::-webkit-input-placeholder {
                color: rgb(143, 141, 141)
            }

            .input--style-3:-moz-placeholder {
                color: #ccc;
                opacity: 1
            }

            .input--style-3::-moz-placeholder {
                color: #ccc;
                opacity: 1
            }

            .input--style-3:-ms-input-placeholder {
                color: #ccc
            }

            .btn {
                display: inline-block;
                line-height: 42px;
                padding: 0 33px;
                font-family: Poppins;
                cursor: pointer;
                color: #fff;
                -webkit-transition: all 0.4s ease;
                -o-transition: all 0.4s ease;
                -moz-transition: all 0.4s ease;
                transition: all 0.4s ease;
                font-size: 18px;
                width: 100%
            }

            .btn--pill {
                -webkit-border-radius: 20px;
                -moz-border-radius: 20px;
                border-radius: 30px;
                border: 2px solid
            }

            .btn--green {
                background: transparent;
                border-color: #65d849;
                color: #65d849;
                font-size: 12px;
                padding: 0
            }

            @media(max-width:768px) {
                .btn--green {
                    font-size: 8px
                }
            }

            .btn--green img {
                height: 15px;
                width: 15px
            }

            .btn--signin {
                background: #ccc;
                color: rgb(109, 107, 107);
                font-size: 13px;
                border-color: #ccc;
                margin-bottom: 3vh
            }

            .extra {
                padding-bottom: 4vh;
                color: rgb(143, 141, 141);
                font-size: 13px
            }

            .extra a {
                color: rgb(143, 141, 141);
                font-size: 13px
            }

            .col {
                padding: 2vh 10px 4vh
            }

            .new {
                padding-bottom: 0
            }

            .btn-primary {
                width: 40%;
                margin: 30%
            }

            .btn:focus {
                box-shadow: none;
                outline: none
            }</style>
        <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
        <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
        <script type='text/javascript'></script>
    </head>
    <body oncontextmenu='return false' class='snippet-body'>
    <div class="container">
        <div class>
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <div class="modal-title"><img class="img-fluid" src="{{asset('png1.png')}}" width=800 height=200"></div>
                    </div> <!-- Modal body -->
                    <div class="modal-body">
                        <p class="title">Hoşgeldiniz!</p>
                        <form method="POST" action="{{route('login')}}">
                            @csrf
                            <div class="input-group"> <input class="input--style-3" type="text" placeholder="Your email*" name="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror</div>
                            <div class="input-group"> <input class="input--style-3" type="password" placeholder="Password*" name="password"> </div>
                            <div class="extra"> <a href="{{ route('password.request') }}"><u>Parolamı Unuttum</u></a> </div>
                            <div class="p-t-10"> <button class="btn btn--pill btn--signin" type="submit" data-target="#">SIGN IN</button> </div>
                            <p class="title">Diğer giriş seçeneklerimiz:</p>
                            <div class="row">
                                <div class="col">
                                    <div class="p-t-10"> <button class="btn btn--pill btn--green" type="submit">Google hesabınızla giriş yapın. <img src="https://img.icons8.com/color/48/000000/google-logo.png" /> </button> </div>
                                </div>
                                <div class="col">
                                    <div class="p-t-10"> <button class="btn btn--pill btn--green" type="submit">Twitter hesabınızla giriş yapın.<img src="https://img.icons8.com/color/48/000000/podio.png" /> </button> </div>
                                </div>
                            </div>
                            <p class="extra new">Gündemimizde yeni misin? Aramıza katıl. <a href="#"><u>Üye Ol!</u></a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
    </html>
