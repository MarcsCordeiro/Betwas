@extends('layouts.app')

@section('content')
    <div class="uk-padding-small">

        <h3 class="uk-heading-bullet">Faça suas apostas <a id="btn-save-bet" href="#" class="uk-button uk-button-primary uk-icon-link uk-float-right"><i class="fas fa-save"></i> Salvar</a></h3>

            <ul uk-accordion="multiple: true">
                <li>
                    <a class="uk-accordion-title" href="#">Rodada 4</a>
                    <div class="uk-accordion-content">
                        <table class="uk-table uk-table-striped">
                            <thead>
                                <tr>
                                    <th class="uk-text-center">Data</th>
                                    <th class="uk-text-center">Hora</th>
                                    <th class="uk-text-center">Mandante</th>
                                    <th class="uk-text-center" colspan="3">Placar</th>
                                    <th class="uk-text-center">Visitante</th>
                                    <th class="uk-text-center">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="uk-text-center">11/05</td>
                                    <td class="uk-text-center">16:00</td>
                                    <td class="uk-text-center"><img src="{{asset('img/escudos/fluminense.svg')}}" class="brasao"> Fluminense</td>
                                    <td class="uk-text-right"><input type="text" name="" class="uk-input uk-form-width-xsmall placar"></td>
                                    <td class="uk-text-center"><i class="fa fa-times"></i></td>
                                    <td class="uk-text-left"><input type="text" name="" class="uk-input uk-form-width-xsmall placar"></td>
                                    <td class="uk-text-center"><img src="{{asset('img/escudos/botafogo.svg')}}" class="brasao"> Botafogo</td>
                                    <td class="uk-text-center"><button class="uk-button uk-button-primary uk-width-auto">Aleatório</button></td>
                                </tr>
                                <tr>
                                    <td class="uk-text-center">11/05</td>
                                    <td class="uk-text-center">19:00</td>
                                    <td class="uk-text-center"><img src="{{asset('img/escudos/corinthians.svg')}}" class="brasao"> Corinthians</td>
                                    <td class="uk-text-right"><input type="text" name="" class="uk-input uk-form-width-xsmall placar"></td>
                                    <td class="uk-text-center"><i class="fa fa-times"></i></td>
                                    <td class="uk-text-left"><input type="text" name="" class="uk-input uk-form-width-xsmall placar"></td>
                                    <td class="uk-text-center"><img src="{{asset('img/escudos/gremio.svg')}}" class="brasao"> Grêmio</td>
                                    <td class="uk-text-center"><button class="uk-button uk-button-primary uk-width-auto">Aleatório</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </li>
                <li>
                    <a class="uk-accordion-title" href="#">Rodada 5</a>
                    <div class="uk-accordion-content">
                        <table class="uk-table uk-table-striped">
                            <thead>
                            <tr>
                                <th class="uk-text-center">Data</th>
                                <th class="uk-text-center">Hora</th>
                                <th class="uk-text-center">Mandante</th>
                                <th class="uk-text-center" colspan="3">Placar</th>
                                <th class="uk-text-center">Visitante</th>
                                <th class="uk-text-center">Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="uk-text-center">11/05</td>
                                <td class="uk-text-center">16:00</td>
                                <td class="uk-text-center"><img src="{{asset('img/escudos/fluminense.svg')}}" class="brasao"> Fluminense</td>
                                <td class="uk-text-right"><input type="text" name="" class="uk-input uk-form-width-xsmall placar"></td>
                                <td class="uk-text-center"><i class="fa fa-times"></i></td>
                                <td class="uk-text-left"><input type="text" name="" class="uk-input uk-form-width-xsmall placar"></td>
                                <td class="uk-text-center"><img src="{{asset('img/escudos/botafogo.svg')}}" class="brasao"> Botafogo</td>
                                <td class="uk-text-center"><button class="uk-button uk-button-primary uk-width-auto">Aleatório</button></td>
                            </tr>
                            <tr>
                                <td class="uk-text-center">11/05</td>
                                <td class="uk-text-center">19:00</td>
                                <td class="uk-text-center"><img src="{{asset('img/escudos/corinthians.svg')}}" class="brasao"> Corinthians</td>
                                <td class="uk-text-right"><input type="text" name="" class="uk-input uk-form-width-xsmall placar"></td>
                                <td class="uk-text-center"><i class="fa fa-times"></i></td>
                                <td class="uk-text-left"><input type="text" name="" class="uk-input uk-form-width-xsmall placar"></td>
                                <td class="uk-text-center"><img src="{{asset('img/escudos/gremio.svg')}}" class="brasao"> Grêmio</td>
                                <td class="uk-text-center"><button class="uk-button uk-button-primary uk-width-auto">Aleatório</button></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </li>
                <li>
                    <a class="uk-accordion-title" href="#">Rodada 6</a>
                    <div class="uk-accordion-content">
                        <table class="uk-table uk-table-striped">
                            <thead>
                            <tr>
                                <th class="uk-text-center">Data</th>
                                <th class="uk-text-center">Hora</th>
                                <th class="uk-text-center">Mandante</th>
                                <th class="uk-text-center" colspan="3">Placar</th>
                                <th class="uk-text-center">Visitante</th>
                                <th class="uk-text-center">Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="uk-text-center">11/05</td>
                                <td class="uk-text-center">16:00</td>
                                <td class="uk-text-center"><img src="{{asset('img/escudos/fluminense.svg')}}" class="brasao"> Fluminense</td>
                                <td class="uk-text-right"><input type="text" name="" class="uk-input uk-form-width-xsmall placar"></td>
                                <td class="uk-text-center"><i class="fa fa-times"></i></td>
                                <td class="uk-text-left"><input type="text" name="" class="uk-input uk-form-width-xsmall placar"></td>
                                <td class="uk-text-center"><img src="{{asset('img/escudos/botafogo.svg')}}" class="brasao"> Botafogo</td>
                                <td class="uk-text-center"><button class="uk-button uk-button-primary uk-width-auto">Aleatório</button></td>
                            </tr>
                            <tr>
                                <td class="uk-text-center">11/05</td>
                                <td class="uk-text-center">19:00</td>
                                <td class="uk-text-center"><img src="{{asset('img/escudos/corinthians.svg')}}" class="brasao"> Corinthians</td>
                                <td class="uk-text-right"><input type="text" name="" class="uk-input uk-form-width-xsmall placar"></td>
                                <td class="uk-text-center"><i class="fa fa-times"></i></td>
                                <td class="uk-text-left"><input type="text" name="" class="uk-input uk-form-width-xsmall placar"></td>
                                <td class="uk-text-center"><img src="{{asset('img/escudos/gremio.svg')}}" class="brasao"> Grêmio</td>
                                <td class="uk-text-center"><button class="uk-button uk-button-primary uk-width-auto">Aleatório</button></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </li>
                <li>
                    <a class="uk-accordion-title" href="#">Rodada 7</a>
                    <div class="uk-accordion-content">
                        <table class="uk-table uk-table-striped">
                            <thead>
                            <tr>
                                <th class="uk-text-center">Data</th>
                                <th class="uk-text-center">Hora</th>
                                <th class="uk-text-center">Mandante</th>
                                <th class="uk-text-center" colspan="3">Placar</th>
                                <th class="uk-text-center">Visitante</th>
                                <th class="uk-text-center">Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="uk-text-center">11/05</td>
                                <td class="uk-text-center">16:00</td>
                                <td class="uk-text-center"><img src="{{asset('img/escudos/fluminense.svg')}}" class="brasao"> Fluminense</td>
                                <td class="uk-text-right"><input type="text" name="" class="uk-input uk-form-width-xsmall placar"></td>
                                <td class="uk-text-center"><i class="fa fa-times"></i></td>
                                <td class="uk-text-left"><input type="text" name="" class="uk-input uk-form-width-xsmall placar"></td>
                                <td class="uk-text-center"><img src="{{asset('img/escudos/botafogo.svg')}}" class="brasao"> Botafogo</td>
                                <td class="uk-text-center"><button class="uk-button uk-button-primary uk-width-auto">Aleatório</button></td>
                            </tr>
                            <tr>
                                <td class="uk-text-center">11/05</td>
                                <td class="uk-text-center">19:00</td>
                                <td class="uk-text-center"><img src="{{asset('img/escudos/corinthians.svg')}}" class="brasao"> Corinthians</td>
                                <td class="uk-text-right"><input type="text" name="" class="uk-input uk-form-width-xsmall placar"></td>
                                <td class="uk-text-center"><i class="fa fa-times"></i></td>
                                <td class="uk-text-left"><input type="text" name="" class="uk-input uk-form-width-xsmall placar"></td>
                                <td class="uk-text-center"><img src="{{asset('img/escudos/gremio.svg')}}" class="brasao"> Grêmio</td>
                                <td class="uk-text-center"><button class="uk-button uk-button-primary uk-width-auto">Aleatório</button></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </li>
                <li>
                    <a class="uk-accordion-title" href="#">Rodada 8</a>
                    <div class="uk-accordion-content">
                        <table class="uk-table uk-table-striped">
                            <thead>
                            <tr>
                                <th class="uk-text-center">Data</th>
                                <th class="uk-text-center">Hora</th>
                                <th class="uk-text-center">Mandante</th>
                                <th class="uk-text-center" colspan="3">Placar</th>
                                <th class="uk-text-center">Visitante</th>
                                <th class="uk-text-center">Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="uk-text-center">11/05</td>
                                <td class="uk-text-center">16:00</td>
                                <td class="uk-text-center"><img src="{{asset('img/escudos/fluminense.svg')}}" class="brasao"> Fluminense</td>
                                <td class="uk-text-right"><input type="text" name="" class="uk-input uk-form-width-xsmall placar"></td>
                                <td class="uk-text-center"><i class="fa fa-times"></i></td>
                                <td class="uk-text-left"><input type="text" name="" class="uk-input uk-form-width-xsmall placar"></td>
                                <td class="uk-text-center"><img src="{{asset('img/escudos/botafogo.svg')}}" class="brasao"> Botafogo</td>
                                <td class="uk-text-center"><button class="uk-button uk-button-primary uk-width-auto">Aleatório</button></td>
                            </tr>
                            <tr>
                                <td class="uk-text-center">11/05</td>
                                <td class="uk-text-center">19:00</td>
                                <td class="uk-text-center"><img src="{{asset('img/escudos/corinthians.svg')}}" class="brasao"> Corinthians</td>
                                <td class="uk-text-right"><input type="text" name="" class="uk-input uk-form-width-xsmall placar"></td>
                                <td class="uk-text-center"><i class="fa fa-times"></i></td>
                                <td class="uk-text-left"><input type="text" name="" class="uk-input uk-form-width-xsmall placar"></td>
                                <td class="uk-text-center"><img src="{{asset('img/escudos/gremio.svg')}}" class="brasao"> Grêmio</td>
                                <td class="uk-text-center"><button class="uk-button uk-button-primary uk-width-auto">Aleatório</button></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </li>
                <li>
                    <a class="uk-accordion-title" href="#">Rodada 9</a>
                    <div class="uk-accordion-content">
                        <table class="uk-table uk-table-striped">
                            <thead>
                            <tr>
                                <th class="uk-text-center">Data</th>
                                <th class="uk-text-center">Hora</th>
                                <th class="uk-text-center">Mandante</th>
                                <th class="uk-text-center" colspan="3">Placar</th>
                                <th class="uk-text-center">Visitante</th>
                                <th class="uk-text-center">Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="uk-text-center">11/05</td>
                                <td class="uk-text-center">16:00</td>
                                <td class="uk-text-center"><img src="{{asset('img/escudos/fluminense.svg')}}" class="brasao"> Fluminense</td>
                                <td class="uk-text-right"><input type="text" name="" class="uk-input uk-form-width-xsmall placar"></td>
                                <td class="uk-text-center"><i class="fa fa-times"></i></td>
                                <td class="uk-text-left"><input type="text" name="" class="uk-input uk-form-width-xsmall placar"></td>
                                <td class="uk-text-center"><img src="{{asset('img/escudos/botafogo.svg')}}" class="brasao"> Botafogo</td>
                                <td class="uk-text-center"><button class="uk-button uk-button-primary uk-width-auto">Aleatório</button></td>
                            </tr>
                            <tr>
                                <td class="uk-text-center">11/05</td>
                                <td class="uk-text-center">19:00</td>
                                <td class="uk-text-center"><img src="{{asset('img/escudos/corinthians.svg')}}" class="brasao"> Corinthians</td>
                                <td class="uk-text-right"><input type="text" name="" class="uk-input uk-form-width-xsmall placar"></td>
                                <td class="uk-text-center"><i class="fa fa-times"></i></td>
                                <td class="uk-text-left"><input type="text" name="" class="uk-input uk-form-width-xsmall placar"></td>
                                <td class="uk-text-center"><img src="{{asset('img/escudos/gremio.svg')}}" class="brasao"> Grêmio</td>
                                <td class="uk-text-center"><button class="uk-button uk-button-primary uk-width-auto">Aleatório</button></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </li>
                <li>
                    <a class="uk-accordion-title" href="#">Rodada 10</a>
                    <div class="uk-accordion-content">
                        <table class="uk-table uk-table-striped">
                            <thead>
                            <tr>
                                <th class="uk-text-center">Data</th>
                                <th class="uk-text-center">Hora</th>
                                <th class="uk-text-center">Mandante</th>
                                <th class="uk-text-center" colspan="3">Placar</th>
                                <th class="uk-text-center">Visitante</th>
                                <th class="uk-text-center">Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="uk-text-center">11/05</td>
                                <td class="uk-text-center">16:00</td>
                                <td class="uk-text-center"><img src="{{asset('img/escudos/fluminense.svg')}}" class="brasao"> Fluminense</td>
                                <td class="uk-text-right"><input type="text" name="" class="uk-input uk-form-width-xsmall placar"></td>
                                <td class="uk-text-center"><i class="fa fa-times"></i></td>
                                <td class="uk-text-left"><input type="text" name="" class="uk-input uk-form-width-xsmall placar"></td>
                                <td class="uk-text-center"><img src="{{asset('img/escudos/botafogo.svg')}}" class="brasao"> Botafogo</td>
                                <td class="uk-text-center"><button class="uk-button uk-button-primary uk-width-auto">Aleatório</button></td>
                            </tr>
                            <tr>
                                <td class="uk-text-center">11/05</td>
                                <td class="uk-text-center">19:00</td>
                                <td class="uk-text-center"><img src="{{asset('img/escudos/corinthians.svg')}}" class="brasao"> Corinthians</td>
                                <td class="uk-text-right"><input type="text" name="" class="uk-input uk-form-width-xsmall placar"></td>
                                <td class="uk-text-center"><i class="fa fa-times"></i></td>
                                <td class="uk-text-left"><input type="text" name="" class="uk-input uk-form-width-xsmall placar"></td>
                                <td class="uk-text-center"><img src="{{asset('img/escudos/gremio.svg')}}" class="brasao"> Grêmio</td>
                                <td class="uk-text-center"><button class="uk-button uk-button-primary uk-width-auto">Aleatório</button></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </li>
                <li>
                    <a class="uk-accordion-title" href="#">Rodada 11</a>
                    <div class="uk-accordion-content">
                        <table class="uk-table uk-table-striped">
                            <thead>
                            <tr>
                                <th class="uk-text-center">Data</th>
                                <th class="uk-text-center">Hora</th>
                                <th class="uk-text-center">Mandante</th>
                                <th class="uk-text-center" colspan="3">Placar</th>
                                <th class="uk-text-center">Visitante</th>
                                <th class="uk-text-center">Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="uk-text-center">11/05</td>
                                <td class="uk-text-center">16:00</td>
                                <td class="uk-text-center"><img src="{{asset('img/escudos/fluminense.svg')}}" class="brasao"> Fluminense</td>
                                <td class="uk-text-right"><input type="text" name="" class="uk-input uk-form-width-xsmall placar"></td>
                                <td class="uk-text-center"><i class="fa fa-times"></i></td>
                                <td class="uk-text-left"><input type="text" name="" class="uk-input uk-form-width-xsmall placar"></td>
                                <td class="uk-text-center"><img src="{{asset('img/escudos/botafogo.svg')}}" class="brasao"> Botafogo</td>
                                <td class="uk-text-center"><button class="uk-button uk-button-primary uk-width-auto">Aleatório</button></td>
                            </tr>
                            <tr>
                                <td class="uk-text-center">11/05</td>
                                <td class="uk-text-center">19:00</td>
                                <td class="uk-text-center"><img src="{{asset('img/escudos/corinthians.svg')}}" class="brasao"> Corinthians</td>
                                <td class="uk-text-right"><input type="text" name="" class="uk-input uk-form-width-xsmall placar"></td>
                                <td class="uk-text-center"><i class="fa fa-times"></i></td>
                                <td class="uk-text-left"><input type="text" name="" class="uk-input uk-form-width-xsmall placar"></td>
                                <td class="uk-text-center"><img src="{{asset('img/escudos/gremio.svg')}}" class="brasao"> Grêmio</td>
                                <td class="uk-text-center"><button class="uk-button uk-button-primary uk-width-auto">Aleatório</button></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </li>
            </ul>

        <a id="btn-go-top" href="#" class="uk-icon-button uk-button-primary uk-position-fixed uk-position-bottom-right uk-margin-small-right uk-margin-small-bottom">
            <i class="fas fa-arrow-circle-up"></i>
        </a>

    </div>
    <script>
        $(document).ready(function($){
            $(".placar").mask('00');

            $("#btn-go-top").on('click', function(e) {
                $('html, body').animate({scrollTop:0}, '200');
            });
        });
    </script>
@endsection