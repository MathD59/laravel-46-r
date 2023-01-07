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
                        phpinfo();
                        echo ini_get('curl.cainfo').'<br/>';
                        $ch = curl_init();

// Set the URL to fetch
curl_setopt($ch, CURLOPT_URL, 'https://example.com');

// Set the CA certificate file
curl_setopt($ch, CURLOPT_CAINFO, '/path/to/cacert.pem');

// Set other cURL options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the cURL request
$response = curl_exec($ch);

// Close the cURL session
curl_close($ch);
                        echo ini_get("curl.cainfo");
                    ?> 

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            
    </body>
</html>
