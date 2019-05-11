@extends('layouts.app')

@section('content')
    <table class="uk-table uk-table-striped">
        <thead>
            <tr>
                <th></th>
                <th class="uk-width-1-6">Nome</th>
                <th></th>
                <th class="uk-text-center">Pts</th>
                <th class="uk-text-center">Exato</th>
                <th class="uk-text-center">Não exato</th>
                <th class="uk-text-center">Erros</th>
                <th class="uk-text-center">Aproveitamento</th>
                <th class="uk-text-center">Últimos 3</th>
                <th class="uk-text-center">Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="uk-text-center">1</td>
                <td >Washington</td>
                <td><span uk-icon="arrow-up" style="color: green"></span></td>
                <td class="uk-text-center">29</td>
                <td class="uk-text-center">5</td>
                <td class="uk-text-center">2</td>
                <td class="uk-text-center">0</td>
                <td class="uk-text-center">80%</td>
                <td class="uk-text-center">
                    <span uk-icon="check" style="color: green"></span>
                    <span uk-icon="close" style="color: red"></span>
                    <span uk-icon="check" style="color: green"></span>
                </td>
                <td class="uk-text-center"><span class="uk-label uk-label-danger">Free</span></td>
            </tr>
            <tr>
                <td class="uk-text-center">2</td>
                <td >Marreco</td>
                <td><span uk-icon="arrow-down" style="color: red"></span></td>
                <td class="uk-text-center">29</td>
                <td class="uk-text-center">5</td>
                <td class="uk-text-center">2</td>
                <td class="uk-text-center">3</td>
                <td class="uk-text-center">60%</td>
                <td class="uk-text-center">
                    <span uk-icon="close" style="color: red"></span>
                    <span uk-icon="close" style="color: red"></span>
                    <span uk-icon="close" style="color: red"></span>
                </td>
                <td class="uk-text-center"><span class="uk-label">Premium</span></td>
            </tr>
            <tr>
                <td class="uk-text-center">2</td>
                <td >Zé</td>
                <td><span uk-icon="arrow-down" style="color: red"></span></td>
                <td class="uk-text-center">10</td>
                <td class="uk-text-center">2</td>
                <td class="uk-text-center">2</td>
                <td class="uk-text-center">3</td>
                <td class="uk-text-center">20%</td>
                <td class="uk-text-center">
                    <span uk-icon="check" style="color: green"></span>
                    <span uk-icon="check" style="color: green"></span>
                    <span uk-icon="close" style="color: red"></span>
                </td>
                <td class="uk-text-center"><span class="uk-label uk-label-danger">Free</span></td>
            </tr>
        </tbody>
    </table>
@endsection
