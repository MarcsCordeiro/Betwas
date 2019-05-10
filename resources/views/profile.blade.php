@extends('layouts.app')

@section('content')
    <div class="uk-card uk-card-default uk-width-1-2@m uk-position-medium uk-position-top-center">
        <div class="uk-card-header">
            <div class="uk-grid-small uk-flex-middle" uk-grid>
                <div class="uk-width-auto">
                    <img class="uk-border-circle" width="50" height="50" src="{{ asset('img/user_male.png') }}">
                </div>
                <div class="uk-width-expand">
                    <h3 class="uk-card-title uk-margin-remove-bottom">{{ Auth::user()->name }}</h3>
                    <p class="uk-text-meta uk-margin-remove-top">Premium</p>
                </div>
            </div>
        </div>
        <div class="uk-card-body">
            <form class="uk-grid-small" uk-grid method="post">
                <div class="uk-width-1-1">
                    <label  class="uk-form-label" >Nome</label>
                    <input name="nome" class="uk-input" type="text" value="{{ Auth::user()->name }}" required>
                </div>
                <div class="uk-width-1-1@s">
                    <label  class="uk-form-label" >E-mail</label>
                    <input name="email" class="uk-input" type="email" value="{{ Auth::user()->email }}" required>
                </div>
            </form>
        </div>
        <div class="uk-card-footer uk-text-right">
            <button class="uk-button uk-button-primary" type="button">Salvar</button>
        </div>
    </div>
@endsection