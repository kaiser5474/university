@extends('app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h4 class="text-center">Bienvenido {{ auth()->user()->name }} </h4>
                    <form class="d-flex" action="{{ route('estudiantesEPN') }}" method="POST">
                        @csrf                    
                        @auth
                        <input class="form-control me-2" type="search" placeholder="Buscar estudiante" aria-label="Search" name="busqueda">
                        <button class="btn btn-outline-success" type="submit">Buscar</button>
                        @endauth        
                    </form>
                    <form class="d-flex" action="{{ route('profesoresEPN') }}" method="POST">
                        @csrf
                        @auth
                        <input class="form-control me-2" type="search" placeholder="Buscar profesor" aria-label="Search" name="busqueda">
                        <button class="btn btn-outline-success" type="submit">Buscar</button>
                        @endauth        
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
