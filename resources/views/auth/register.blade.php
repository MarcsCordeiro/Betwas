@extends('layouts.app')

<style type="text/css">
    .theme-mix2{
        background: #00c6ff !important; /* fallback for old browsers */
        background: -webkit-linear-gradient(to bottom, #00c6ff, #0072ff) !important; /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to bottom, #00c6ff, #0072ff)  !important; /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    }
</style>

@section('content')
<div class="theme-mix2 uk-section uk-section-muted uk-flex uk-flex-middle uk-animation-fade" uk-height-viewport>
    <div class="uk-width-1-1">
        <div class="uk-container">
            <div class="uk-grid-margin uk-grid uk-grid-stack" uk-grid>
                <div class="uk-width-1-1@m">
                    <div class="uk-margin uk-width-large uk-margin-auto uk-card uk-card-default uk-card-body uk-box-shadow-large">
                        <h3 class="uk-card-title uk-text-center" style="color: #00c6ff"><strong>Criar Conta</strong></h3>
                        <form  method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="uk-margin">
                                <div class="uk-inline uk-width-1-1">
                                    <span class="uk-form-icon" uk-icon="icon: user"></span>
                                    <input id="name" type="text" class="uk-input uk-form-large @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nome">

                                    @error('name')
                                    <div class="uk-text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="uk-margin">
                                <div class="uk-inline uk-width-1-1">
                                    <span class="uk-form-icon" uk-icon="icon: mail"></span>
                                    <input id="email" type="email" class="uk-input uk-form-large @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                                    @error('email')
                                    <div class="uk-text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="uk-margin">
                                <div class="uk-inline uk-width-1-1">
                                    <span class="uk-form-icon" uk-icon="icon: lock"></span>
                                    <input id="password" type="password" class="uk-input uk-form-large @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Senha">

                                    @error('password')
                                    <span class="uk-text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="uk-margin">
                                <div class="uk-inline uk-width-1-1">
                                    <span class="uk-form-icon" uk-icon="icon: lock"></span>
                                    <input id="password-confirm" type="password" class="uk-input uk-form-large" name="password_confirmation" required autocomplete="new-password" placeholder="Confirme a senha">
                                </div>
                            </div>
                            <div class="uk-margin">
                                <label><input class="uk-checkbox" type="checkbox" required> Declaro que li e aceito os termos de uso.</label>
                            </div>
                            <div class="uk-margin">
                                <button type="submit" class="uk-button uk-button-primary uk-button-large uk-width-1-1">Cadastro</button>
                            </div>
                        </form>
                        <p class="uk-text-center">Já possui uma conta? <a href="{{ route('login') }}">Faça login</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
