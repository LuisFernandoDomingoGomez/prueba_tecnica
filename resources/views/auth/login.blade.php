<html lang="en" class="light">
    <head>
        <meta charset="utf-8">
        <link href="dist/images/logo.svg" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Enigma admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Enigma Admin Template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="sdf">
        <title>Login | mybrand</title>
        <link rel="stylesheet" href="dist/css/app.css" />
        <link rel="stylesheet" href="https://mybrand.mx/src/css/normalize.css">
        <!-- Bootstrap core CSS -->
        <link href="https://mybrand.mx/src/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="https://mybrand.mx/src/css/style.css" rel="stylesheet">
        <link href="https://mybrand.mx/src/css/global.css" rel="stylesheet">
        <link href="./Mybrand_files/aos.css" rel="stylesheet">
        <link href="./Mybrand_files/owl.carousel.min.css" rel="stylesheet">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        </style>
        <script type="text/javascript" async="" src="chrome-extension://namibaeakmnknolcnomfdhklhkabkchl/chrome-popup/mixpanel-2-latest.min.js"></script><script async="" src="./Mybrand_files/js"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-GENHXZEPTS');
        </script>

    <script src="chrome-extension://mooikfkahbdckldjjndioackbalphokd/assets/prompt.js"></script>
    </head>
    <body class="login">
        <div class="container sm:px-10">
            <div class="block xl:grid grid-cols-2 gap-4">
                <div class="hidden xl:flex flex-col min-h-screen">
                        <div class="my-auto">
                        <img alt="Logo mega-iconB" class="-intro-x w-1/4 -mt-16" src="dist/images/mega-IconB.svg">
                            <p>Imagen de <a href="https://www.freepik.es/vector-gratis/ilustracion-concepto-cuenta_5464649.htm#query=login&position=14&from_view=keyword&track=sph">storyset</a> en Freepik</p>
                            <div class="-intro-x text-white font-medium text-3xl leading-tight mt-10">
                            <br>
                            Inicia sesión con tu cuenta.
                        </div>
                        <div class="-intro-x mt-5 text-base text-white dark:text-slate-400">
                            Si aún no tienes una cuenta, <a href="{{ route('register') }}" class="text-blue-500 hover:underline">registrate aquí</a>.
                        </div>
                    </div>
                </div>
                <!-- END: Login Info -->
                <!-- BEGIN: Login Form -->
                <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                    <div class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                        <div class="-intro-x flex items-center justify-center pt-5">
                            <img alt="Logo mybrand" class="w-64" src="dist/images/logo-mybrand.svg">
                        </div>
                        <br><br>
                        <h2 class="intro-x font-bold text-2xl xl:text-3xl xl:text-left" style="text-align: center;">
                            Bienvenido
                        </h2>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                        <div class="intro-x mt-2 text-slate-400 xl:hidden text-center">Inicia sesión con tu cuenta de correo electronico registrado.</div>
                        <br>
                        <div class="intro-x mt-2 text-slate-400 xl:hidden text-center">Si aún no tienes tu registro, acude al Departamento de Sistemas.</div>
                        <br>
                        <div class="intro-x mt-2 xl:hidden text-center" style="color: green;">UTVT #EstádeModaSerCuervo</div>

                        <div class="intro-x mt-8">
                            <input type="email" class="intro-x login__input form-control py-3 px-4 block" placeholder="Email" name="email" :value="old('email')" required autofocus />
                            <input type="password" class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Password" type="password" name="password" required autocomplete="current-password"   >

                        </div>
                        <div class="intro-x flex text-slate-600 dark:text-slate-500 text-xs sm:text-sm mt-4">
                            <div class="flex items-center mr-auto">
                                <input id="remember-me" type="checkbox" class="form-check-input border mr-2">
                                <label class="cursor-pointer select-none" for="remember-me">Remember me</label>
                            </div>

                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                    {{ __('Olvidé mi contraseña') }}
                                </a>
                            @endif
                            <br>
                        </div>
                        <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                            <button class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">Entrar</button>
                        </div>
                        {{-- <div class="intro-x mt-5 xl:mt-24 text-slate-100 dark:text-slate-200 text-center xl:text-left"> Adminstracion  {{-- <a class="text-primary dark:text-slate-200" href="">Terms and Conditions</a> & <a class="text-primary dark:text-slate-200" href="">Privacy Policy</a>  </div> --}}
                        </form>
                    </div>
                </div>
                <!-- END: Login Form -->
            </div>
        </div>
        <!-- BEGIN: JS Assets-->
        <script src="dist/js/app.js"></script>
        <!-- END: JS Assets-->
    </body>
</html