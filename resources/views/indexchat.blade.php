@extends('masterchat')

@section('title','Chat Messages')

@section('konten')
    <h1>Chat Messages</h1>

    <br/>
    <br/>

    @foreach ($chats as $chat)
        <div>
            {!! $chat->pesan !!}
        </div>
    @endforeach

    <a href="/chat" class="btn btn-primary"> Kembali </a>
@endsection


