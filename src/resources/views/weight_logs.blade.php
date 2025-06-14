@extends(app.app_admin)

@section('css')
<link rel="stylesheet" href="{{ asset('css/weight_logs.css') }}">
@endsection

@section('content')

<div class="top">
    <div class="top__goal">
        <div class="top__text">目標体重</div>
        <div class="top__weight">
            {{$weighttargets ->target_weight}} kg
        </div>
    </div>

    <div class="top__next">
        <div class="top__text">目標まで</div>
        <div class="top__weight">
        {{ $weightterget->target_weight - $weightlog->weight }}kg
        </div>
    </div>

    <div class="top__now">
        <div class="top__text">最新体重</div>
        <div class="top__weight">
            {{$weightlogs -> weight}}kg
        </div>
    </div>
</div>

<div class="list">
    <div class="list__header">
        <!--検索を後で追加-->

        <list class="add">
            <!--追加のモーダルウィンドを追加-->
        </list>
    </div>

    <table>
        <tr>
            <th>日付</th>
            <th>体重</th>
            <th>食事摂取カロリー</th>
            <th>運動時間</th>
            <th></th>
        </tr>
        @foreach($weightlogs as $weightlog)
        <tr>
            <td>{{$weightlog->created_at}}</td>
            <td>{{$weightlog->weight}}</td>
            <td>{{$weightlog->calories}}</td>
            <td>{{$weightlog->exercise_content}}</td>
            <td></td>            
        </tr>
        @endforeach
    </table>
</div>




@endsection