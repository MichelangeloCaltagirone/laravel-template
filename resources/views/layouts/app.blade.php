<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("page-title", "")</title>
    {{-- CDN per icone di Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    @vite("resources/js/app.js")
    {{-- utilizza la libreria Bootstrap per la stilizzazione del CSS --}}
</head>
<body>

    <div class=customContainer>
        @include("partials.header")

            <main>
                @yield("main-content")
            </main>

        @include("partials.footer")
    </div>

</body>
</html>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.customContainer {
    max-width: 90%;
    margin: 0 auto;
}
body {
    background-color: #FAFAFA;
    font-family: Karla;
}
</style>
