@extends('layouts.admin')
@section('content')
    <div v-if="list.length <= 0" class="uk-alert-danger" uk-alert>
        <a class="uk-alert-close" uk-close></a>
        <p>Nenhum usuário cadastrado.</p>
    </div>
    <div>
        <a href="#" class="uk-button uk-button-primary uk-icon-link uk-position-small uk-position-bottom-right"><i class="fas fa-plus"></i></a>
    </div>
@endsection
@push('scripts')
    <script type="text/javascript" src="{{ asset('js/user.js') }}"></script>
@endpush

