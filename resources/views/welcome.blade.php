<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>THT 18123011</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:500" rel="stylesheet" />

    <!-- Styles / Scripts -->
    <link rel="icon" type="image/png" href="{{ asset('ext.png') }}">
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else

    @endif
</head>

<body
    class="flex gap-5 flex-col p-20 justify-center content-center text-center items-center bg-gradient-to-r from-[#2C4981] to-[#d0d0d0]">
    <div class="bg-slate-100/20 inline-flex w-full p-10 rounded-lg drop-shadow text-xl text-justify gap-x-5">
        <img src="{{ asset('ext.png') }}" alt="" class="rounded-full w-1/5 h-min">
        <div class="w-4/5">
           Kalau ini gimana ya, susah, semuanya menarik, kecuali forum
        </div>
    </div>
    <div class="bg-slate-100/20 flex w-full my-auto p-10 rounded-lg drop-shadow text-xl text-justify">
        <div>
            Lorem ipsum odor amet, consectetuer adipiscing elit. Sit in maecenas, quam in rhoncus consectetur maximus
            imperdiet. Eros vitae quam per libero morbi curabitur dui tristique. Nibh sem euismod phasellus tincidunt
            ullamcorper. Ut fames tincidunt luctus ullamcorper curabitur vitae justo tortor libero. Gravida potenti
            lectus
            bibendum odio primis. Nulla vel est fusce magna varius tristique risus hendrerit. Taciti nam himenaeos
            interdum
            dis semper magnis. Fames potenti placerat penatibus pretium mauris rhoncus turpis risus cras. Aliquam orci
            bibendum malesuada orci odio consectetur vivamus tellus.

            Metus non porttitor sodales vivamus phasellus bibendum pulvinar. Curae molestie commodo ex habitasse ligula
            ipsum fermentum vulputate? Praesent magna nisl conubia pellentesque nunc platea. Imperdiet sagittis ex
            dignissim
            tortor elit turpis torquent natoque. Ex consequat elementum fusce nulla gravida faucibus? Tellus facilisi
            mollis
            nisl dui sit malesuada. Magna rhoncus metus sed habitasse leo vel senectus nibh. Malesuada efficitur lectus
            cursus mauris et eu sociosqu.

            Lorem ipsum odor amet, consectetuer adipiscing elit. Sit in maecenas, quam in rhoncus consectetur maximus
            imperdiet. Eros vitae quam per libero morbi curabitur dui tristique. Nibh sem euismod phasellus tincidunt
            ullamcorper. Ut fames tincidunt luctus ullamcorper curabitur vitae justo tortor libero. Gravida potenti
            lectus
            bibendum odio primis. Nulla vel est fusce magna varius tristique risus hendrerit. Taciti nam himenaeos
            interdum
            dis semper magnis. Fames potenti placerat penatibus pretium mauris rhoncus turpis risus cras. Aliquam orci
            bibendum malesuada orci odio consectetur vivamus tellus.

            Metus non porttitor sodales vivamus phasellus bibendum pulvinar. Curae molestie commodo ex habitasse ligula
            ipsum fermentum vulputate? Praesent magna nisl conubia pellentesque nunc platea. Imperdiet sagittis ex
            dignissim
            tortor elit turpis torquent natoque. Ex consequat elementum fusce nulla gravida faucibus? Tellus facilisi
            mollis
            nisl dui sit malesuada. Magna rhoncus metus sed habitasse leo vel senectus nibh. Malesuada efficitur lectus
            cursus mauris et eu sociosqu.
        </div>
    </div>
</body>

</html>
