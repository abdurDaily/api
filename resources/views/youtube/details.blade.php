@extends('youtube.layout')
@section('contains')
{{-- <h4>Video Details</h4> --}}
    <div class="containerR">
        <div class="video">
            <img style="width:800px;" src="{{ isset($data['thumbnail'][4]['url']) ? $data['thumbnail'][4]['url'] : ''}}" alt="">
        </div>
        <div class="suggetions">
            <h4>{{ $data['title'] }}</h4>
            {{-- <h1>OK</h1> --}}
        </div>


        @foreach ($newResponseData as $newData)
        <div class="relatedVideo">
            <a href="{{ route('details', $newData['videoId']) }}">
                <img style="width:300px" src="{{ isset($newData['thumbnail'][1]['url']) ? $newData['thumbnail'][1]['url'] : ''}}" alt="">
            </a>
        </div>
        @endforeach
    </div>


    
@endsection

