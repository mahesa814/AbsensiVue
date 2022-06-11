<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Document</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    
    <script>
        // let base_url = <?= url("/")?>;
        // console.log({ window });
        window.config = {
            base_url : <?= "'".url('/')."'" ?>,
        }
        console.log({ window });

    </script>
    <main id="app" class="container-fluid">
        <div class="row flex-nowrap">

            <navigation></navigation>


            <router-view></router-view>
        </div>
    </main>
    <script src="/js/app.js"></script>

   
</body>
</html>
