@extends('layouts.app')
@section('content')
    <div class="content d-flex justify-content-center ">
        <div class="title ">
            <h2>Suite de Fibonacci</h2>
            <p>Sélectionnez le nombre d'itération voulue ainsi que la valeur maximale à ne pas dépasser</p>
            <form action="/fibonacci" method="get">
                {{ csrf_field() }}
                <input type="number" name="iteration" placeholder="Iterations">
                <input type="number" name="max" placeholder="Nombre maximum">
                <button type="submit" class="btn btn-primary">
                    Calculer
                </button>
            </form>
            <div>
                @if (!empty($fibo->nombre))
                    <h3> Résultat : {{ $fibo->nombre }}</h3>
                    <h2> Nombre d'itérations : {{$fibo->iterations}}</h2>
                @endif
            </div>
        </div>
    </div>

@endsection
