@extends('layouts.app')

@section('content')
<div class="uk-container uk-container-xsmall">
    <div class="uk-card uk-card-default uk-position-small uk-position-top-center card-profile">
        <span class="uk-label uk-position-absolute uk-position-top-right">Premium</span>
        <div class="uk-card-header">
            <div class="uk-grid-small uk-flex-middle" uk-grid>
                <div class="uk-width-auto">
                    <img class="uk-border-circle" width="50" height="50" src="{{ asset('img/user_male.png') }}">
                </div>
                <div class="uk-width-expand">
                    <h3 class="uk-card-title uk-margin-remove-bottom">{{ Auth::user()->name }}</h3>
                </div>
            </div>
        </div>
        <div class="uk-card-body">
            <form class="uk-grid-small" uk-grid method="post" autocomplete="off">
                <div class="uk-width-1-1@s">
                    <label  class="uk-form-label" >Nome</label>
                    <input name="nome" class="uk-input" type="text" value="{{ Auth::user()->name }}" required>
                </div>
                <div class="uk-width-1-1@s">
                    <label  class="uk-form-label" >E-mail</label>
                    <input name="email" class="uk-input" type="email" value="{{ Auth::user()->email }}" disabled>
                </div>
                <div class="uk-width-1-2@s">
                    <label class="uk-form-label">Senha</label>
                    <input name="pass" class="uk-input" type="password" required>
                </div>
                <div class="uk-width-1-2@s">
                    <label class="uk-form-label">Confirmar senha</label>
                    <input name="conf-pass" class="uk-input" type="password" required>
                </div>
            </form>
        </div>
        <div class="uk-card-footer uk-text-right">
            <button class="uk-button uk-button-primary" type="button">Salvar</button>
        </div>
    </div>
</div>
@endsection