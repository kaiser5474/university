@extends('app')

@section('content')

<div class="container border p-4 mt-4">    
    <table class="table">
        <tr>
            <th>Estado</th>
            <th>Fecha Creación</th>
            @if ( auth()->user()->hasRole('admin'))
                <th>Acciones</th>
            @endif
        </tr>
    @foreach ($formularios as $formulario)    
        <tr>
            <td style="text-transform: capitalize;">{{$formulario->estado}}</td>
            <td>
                {{$formulario->created_at}}
            </td>
            @if ( auth()->user()->hasRole('admin'))
            <td style="display: flex; gap: 5px">
                <form action="{{route('formulario.aceptar', $formulario->id)}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-journal-check" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M10.854 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                        <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                        <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                    </svg>                   
                    </button>
                </form>
                @if ( $formulario->estado != 'rechazado' )
                <form action="{{route('formulario.destroy', $formulario->id)}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-journal-x" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6.146 6.146a.5.5 0 0 1 .708 0L8 7.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 8l1.147 1.146a.5.5 0 0 1-.708.708L8 8.707 6.854 9.854a.5.5 0 0 1-.708-.708L7.293 8 6.146 6.854a.5.5 0 0 1 0-.708z"/>
                        <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                        <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                    </svg>                  
                    </button>
                </form>
                @endif
            </td>
            @endif
        </tr>
    @endforeach
    </table>
</div>
@endsection