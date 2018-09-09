<!
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>

        .contenedor{
            background-color:#F00;
            text-align: center;

        }

        .infoGeneral {
            background-color:#00F;
            margin:200px 0;
            color:#FFF;
        }

        .pie {
            background-color: #FF0;
        }

    </style>

</head>
<body>

    <div class="contenedor">

        @yield("cabecera")


    </div>

    <div class="infoGeneral">

        @yield("infoGeneral")

    </div>


    <div class="pie">

        <h1>Este texto es de la plantilla blade</h1>
        @yield("pie")

    </div>

</body>
</html>