@extends ("layouts.plantillaboot")


@section("cabecera")

    <h1>Contacto</h1>

@endsection


@section("infoGeneral")

    <h1>Esta es la infoGeneral</h1>

   @if (count($alumnos))

        <table width = "50%" border="1">

            @foreach($alumnos as $persona)

                <tr>

                    <td>

                    {{$persona}}

                    </td>

                </tr>
            @endforeach

        </table>

    @endif

@endsection


@section("pie")

    <h1>Este es el footer</h1>

@endsection