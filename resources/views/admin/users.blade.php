@extends('layouts.admin')

@section('content')
    <table class="uk-table uk-table-hover uk-table-divider">
        <thead>
            <tr>
                <th>Usuário</th>
                <th>E-mail</th>
                <th class="uk-text-center">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user )
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td class="uk-text-center">
                    <a href="#" class="uk-button uk-button-primary uk-icon-link uk-margin-small-right" uk-icon="file-edit"></a>
                    <a href="#" class="uk-button uk-button-danger uk-icon-link" uk-icon="trash"></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
