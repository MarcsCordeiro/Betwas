@extends('layouts.admin')

@section('content')
    <div id="modal-user" uk-modal>
        <div class="uk-modal-dialog">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <div class="uk-modal-header">
                <h2 class="uk-modal-title">Editar</h2>
            </div>
            <div class="uk-modal-body">
            <form class="uk-grid-small" uk-grid>
                <div class="uk-width-1-1">
                    <label  class="uk-form-label" >Nome</label>
                    <input name="nome" class="uk-input" type="text">
                </div>
                <div class="uk-width-1-1@s">
                    <label  class="uk-form-label" >E-mail</label>
                    <input name="email" class="uk-input" type="email">
                </div>
                <div class="uk-width-1-2@s">
                    <label class="uk-form-label">Senha</label>
                    <input name="pass" class="uk-input" type="text">
                </div>
                <div class="uk-width-1-2@s">
                    <label class="uk-form-label">Confirmar senha</label>
                    <input name="conf-pass" class="uk-input" type="text">
                </div>
                <div class="uk-width-1-1@s">
                    <label class="uk-form-label">Status</label>
                    <select class="uk-select">
                        <option value="0">Desabilitado</option>
                        <option value="1">Habilitado</option>
                    </select>
                </div>
            </form>
            </div>
            <div class="uk-modal-footer uk-text-right">
                <button class="uk-button uk-button-default uk-modal-close" type="button">Cancelar</button>
                <button class="uk-button uk-button-primary" type="button">Salvar</button>
            </div>
        </div>
    </div>
    <table class="uk-table uk-table-hover uk-table-divider">
        <thead>
            <tr>
                <th>Usuário</th>
                <th>E-mail</th>
                <th class="uk-text-center">Status</th>
                <th class="uk-text-center">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user )
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td class="uk-text-center">
                        <span uk-icon="check" style="color: green"></span>
                    </td>
                    <td class="uk-text-center">
                        <a id="btn-edit-user" name="{{$user->name}}" email="{{$user->email}}" href="#" class="uk-button uk-button-primary uk-icon-link uk-margin-small-right" uk-icon="file-edit"></a>
                        <a id="btn-delete-user" href="#" id-user="{{$user->id}}" class="uk-button uk-button-danger uk-icon-link" uk-icon="trash"></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <script type="text/javascript">
        $(document).ready(function() {
            $(document).on("click", "#btn-edit-user", function() {
                let modal = $("#modal-user");
                let nome = $(this).attr("name");
                let email = $(this).attr("email");
                
                modal.find("input[name='nome']").val(nome);
                modal.find("input[name='email']").val(email);

                UIkit.modal(modal).show();
            });

            $(document).on("click", "#btn-delete-user", function() {
                let idUser = $(this).attr("id-user");
                let tr = $(this).closest("tr");
                swal({
                    title: "Você tem certeza?",
                    text: "Realmente deseja excluir isso?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                    })
                    .then((confirm) => {
                        if (confirm) {
                            $.get("{{route('delete-user')}}", {id: idUser});
                            tr.remove();
                            swal("Deletado com sucesso", {
                                icon: "success",
                            });
                        } else {
                            swal("Cancelado", {
                                icon: "error",
                            });
                        }
                    });
            });
        });
    </script>
@endsection
