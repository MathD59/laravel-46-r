<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
       
                    </div>

                    <?php 
                    $tuCurl = curl_init();
                    curl_setopt($tuCurl, CURLOPT_CAINFO, getcwd() . "/cacert.pem");
                    $tuData = curl_exec($tuCurl);
                    curl_close($tuCurl);
                    // ini_set('curl.cainfo', './cacert.pem');
                    
                        phpinfo();
                    ?> 

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            
    </body>
</html>
