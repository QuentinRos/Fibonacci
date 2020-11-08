@extends('layouts.app')
@section('content')
    <div class="content">
        <div class="title m-b-md">
            Fibonacci
            <form action="/fibonacci" method="post">
                <input type="number" name="iteration" placeholder="Iterations">
                <button type="submit" class="btn btn-primary">
                    Créer
                </button>
            </form>
        </div>

    </div>

@endsection
