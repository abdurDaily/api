@extends('youtube.layout')

@section('contains')


@foreach ($data as $video)
<div class="vid_list">
    <a href="{{ route('details', $video['videoId']) }}"><img src="{{ isset($video['thumbnail'][1]['url']) ? $video['thumbnail'][1]['url'] : '' }}" class="thumbnail"></a>
    <div class="flex_div">
        <img src="{{ isset($video['channelThumbnail'][0]['url'] )? $video['channelThumbnail'][0]['url'] : 0 }}">
        <div class="vid_info">
            <a href="#">{{ $video['title'] }}</a>
            <p>Easy Tutorial</p>
            <p>15k views &bull;  3days</p>
        </div>
    </div>
</div>
@endforeach


@push('search')
<div class="search_box flex_div">
    <form action="{{ route('search') }}" method="get">
      @csrf
        <input type="search" placeholder="Search" name="search">
        <button><img src="{{ asset("youtube_asset/images/search.png ") }}"></button>
    </form>
</div>
<img src="{{ asset("youtube_asset/images/voice-search.png ") }}" class="mic_icon">
@endpush
@endsection