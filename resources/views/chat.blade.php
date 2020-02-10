@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>Chatroom</h3>
                    </div>
                    <hr/>

                    <chat-log :messages="messages"></chat-log>
                    <chat-composer v-on:newmessage="addMessage"></chat-composer>
                </div>
            </div>
        </div>
    </div>
@endsection