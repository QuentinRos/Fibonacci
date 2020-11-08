@extends('layouts.app')
@section('content')
    <div class="content">
        <div class="title m-b-md">
            Fibonacci
            <form action="/fibonacci" method="get">
                {{ csrf_field() }}
                <input type="number" name="iteration" placeholder="Iterations">
                <input type="number" name="max" placeholder="Nombre maximum">
                <button type="submit" class="btn btn-primary">
                    Calculer
                </button>
            </form>
            <div>
                {{ $fibo->nombre}}
            </div>

        </div>

    </div>

@endsection
