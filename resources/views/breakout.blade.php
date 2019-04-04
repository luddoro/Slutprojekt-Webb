@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl">
                <canvas id="myCanvas" width="1000" height="500"></canvas>
            </div>
        </div>
    </div>
        <script src="js/games/game.js"></script>
        <script src="js/games/bricks.js"></script>
        <script src="js/games/score.js"></script>
@endsection