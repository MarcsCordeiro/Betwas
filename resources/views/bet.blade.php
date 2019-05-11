@extends('layouts.app')

@section('content')
    <div class="uk-padding-small">
        <h3 class="uk-heading-bullet">Faça suas apostas</h3>

        <select id="select-rodada" class="uk-select uk-form-width-medium">
            <option value="hide">Selecione a rodada</option>
            @for($i = 1; $i < 39; $i++)
                <option value="rodada<?php echo $i?>">Rodada <?php echo $i?></option>
            @endfor
        </select>

            <div id="div-rodadas" class="uk-margin-medium-top remove-tabelas">
                @for($i = 1; $i < 39; $i++)
                    <div id="rodada<?php echo $i?>">
                        <p class="uk-label">Rodada <?php echo $i?></p>

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
                                <td class="uk-text-center"><button class="uk-button uk-button-danger uk-width-auto">Aleatório</button></td>
                            </tr>
                            </tbody>
                        </table>
                        <hr>
                        <a id="btn-save-bet" href="#" class="uk-button uk-button-primary uk-float-right uk-margin-large-bottom">Salvar</a>
                    </div>
                @endfor

                </div>
            </div>
     </div>

    <script>
        $(document).ready(function($){
            $('#div-rodadas').children('div').hide();

            $('#div-rodadas').removeClass('remove-tabelas');

            $(".placar").mask('00');

            $('#select-rodada').on('change', function () {

                var selectValue = '#'+$(this).val();

                if (selectValue == "#hide"){
                    $('#div-rodadas').children('div').hide();
                }
                else {
                    $('#div-rodadas').children('div').hide();
                    $('#div-rodadas').children(selectValue).show();
                }

            });

        });
    </script>
@endsection