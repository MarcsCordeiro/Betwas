@extends('layouts.admin')
<style type="text/css">
    .card {
        color: #fff !important;
        height: 57px !important;
        width: 40px !important;
    }
</style>
@section('content')
<div class="uk-card uk-card-default uk-width-1-5@m uk-width-1-1@s uk-card-hover uk-margin-left">
    <div class="uk-card-header">
        <div class="uk-grid-small uk-flex-middle" uk-grid>
            <div class="uk-width-auto">
                <div class="circle circle-green uk-text-center">
                    <svg width="40" height="57" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="users">
                        <circle fill="none" stroke="#fff" stroke-width="1.1" cx="7.7" cy="8.6" r="3.5"></circle>
                        <path fill="none" stroke="#fff" stroke-width="1.1" d="M1,18.1 C1.7,14.6 4.4,12.1 7.6,12.1 C10.9,12.1 13.7,14.8 14.3,18.3"></path>
                        <path fill="none" stroke="#fff" stroke-width="1.1" d="M11.4,4 C12.8,2.4 15.4,2.8 16.3,4.7 C17.2,6.6 15.7,8.9 13.6,8.9 C16.5,8.9 18.8,11.3 19.2,14.1"></path>
                    </svg>
                </div>      
            </div>
            <div class="uk-width-expand">
                <h3 class="uk-card-title uk-margin-remove-bottom">{{$users->count()}}</h3>
                <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">Usuários</time></p>
            </div>
        </div>
    </div>
</div>
@endsection
