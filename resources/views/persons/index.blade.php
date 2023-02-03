<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap -->
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" rel="stylesheet">

    <!-- FontAwesome 4 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- SweetAlert -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.min.css" rel="stylesheet">

    <!-- DataTable -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">

    <style>
        body {
            background-color: #ced0d4;
        }
    </style>

</head>

<body>

    <div class="container">
        <div class="row mt-5">
            <div class="col-12">

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-end mb-4">
                            <button aria-controls="offcanvasRight" class="btn btn-outline-dark"
                                data-bs-target="#offcanvasRight" data-bs-toggle="offcanvas" type="button">
                                <i aria-hidden="true" class="fa fa-plus-circle"></i> Adicionar Nova Pessoa
                            </button>
                        </div>
                        <table class="mt-4 table" id="personsTable">
                            <thead class="table-dark">
                                <th>
                                    Nome
                                </th>
                                <th>
                                    Telefone
                                </th>
                                <th>
                                    Bairro
                                </th>
                                <th>
                                    Ações
                                </th>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div aria-labelledby="offcanvasRightLabel" class="offcanvas offcanvas-end w-50" id="offcanvasRight" tabindex="-1">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel"></h5>
            <button aria-label="Close" class="btn-close" data-bs-dismiss="offcanvas" type="button"></button>
        </div>
        <div class="offcanvas-body">
            <form id="personForm" class="needs-validation" novalidate>

                <input id="typeCpf" name="typeCpf" value="" type="hidden">
                <input id="typeCnpj" name="typeCnpj" value="" type="hidden">
                <input id="id" name="id" value="" type="hidden">

                <div id="errors-list"></div>

                <h4>Dados Pessoais</h4>
                <hr>

                <div class="row">
                    <div class="mb-3">
                        <label class="form-label" for="name">Nome Completo</label>
                        <input class="form-control" id="name" name="name" required type="text">
                        <div class="alert alert-danger" style="display:none;"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label class="form-label" for="type">Tipo ... </label>
                        <select class="form-select" id="type" name="type" required>
                            <option value="" selected>Selecione...</option>
                            <option value="Pessoa Física">Pessoa Física</option>
                            <option value="Pessoa Jurídica">Pessoa Jurídica</option>
                        </select>
                        <div class="alert alert-danger" style="display:none;"></div>
                    </div>
                    <div class="col">
                        <div class="mb-3" id="cpfDiv" style="display:none;">
                            <label class="form-label" for="cpf">CPF</label>
                            <input class="form-control" id="cpf" name="cpf" type="text">
                            <div class="alert alert-danger" style="display:none;"></div>
                        </div>
                        <div class="mb-3" id="cnpjDiv" style="display:none;">
                            <label class="form-label" for="cnpj">CNPJ</label>
                            <input class="form-control" id="cnpj" name="cnpj" type="text">
                            <div class="alert alert-danger" style="display:none;"></div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col" id="rgDiv" style="display:none;">
                        <div class="mb-3">
                            <label class="form-label" for="rg">Identidade (RG)</label>
                            <input class="form-control" id="rg" name="rg" type="text">
                            <div class="alert alert-danger" style="display:none;"></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label" for="birthDate">Data de Nascimento</label>
                            <input class="form-control" id="birthDate" name="birth_date" required type="text">
                            <div class="alert alert-danger" style="display:none;"></div>
                        </div>
                    </div>
                    <div class="col">
                        <label class="form-label" for="personType">Estado Civil</label>
                        <select class="form-select" id="personType" name="person_type" required>
                            <option value="">Selecione...</option>
                            <option value="1">Solteiro</option>
                            <option value="2">Casado</option>
                            <option value="2">Separado</option>
                            <option value="2">Divorciado</option>
                            <option value="2">Viuvo</option>
                        </select>
                        <div class="alert alert-danger" style="display:none;"></div>
                    </div>
                </div>

                <h4>Endereço</h4>
                <hr>
                <div class="row">
                    <div class="mb-3">
                        <label class="form-label" for="zipCode">CEP</label>
                        <input class="form-control" id="zipCode" name="zip_code" required type="text">
                        <div class="alert alert-danger" style="display:none;"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label class="form-label" for="street">Rua</label>
                            <input class="form-control" id="street" name="street" required type="text">
                            <div class="alert alert-danger" style="display:none;"></div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="mb-3">
                            <label class="form-label" for="number">N°</label>
                            <input class="form-control" id="number" name="number" required type="number">
                            <div class="alert alert-danger" style="display:none;"></div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label class="form-label" for="complement">Complemento</label>
                            <input class="form-control" id="complement" name="complement" type="text">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label" for="district">Bairro</label>
                            <input class="form-control" id="district" name="district" required type="text">
                            <div class="alert alert-danger" style="display:none;"></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label" for="city">Cidade</label>
                            <input class="form-control" id="city" name="city" required type="text">
                            <div class="alert alert-danger" style="display:none;"></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label" for="state">Estado</label>
                            <input class="form-control" id="state" name="state" required type="text">
                            <div class="alert alert-danger" style="display:none;"></div>
                        </div>
                    </div>
                </div>

                <h4>Telefones</h4>
                <hr>

                <div class="row">
                    <div class="col-4">
                        <label for="phoneType" class="form-label">Tipo de Telefone</label>
                        <select class="form-select form-select-lg" name="phone_type" id="phoneType">
                            <option value="" selected>Selecione uma opção...</option>
                            <option value="Fixo">Fixo</option>
                            <option value="Celular">Celular</option>
                        </select>
                        <div class="alert alert-danger" style="display:none;"></div>
                    </div>
                    <div class="col-8">
                        <div class="mb-3">
                            <label class="form-label" for="phone">Telefone</label>
                            <input class="form-control" id="phone" name="phone" type="text">
                            <div class="alert alert-danger" style="display:none;"></div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-end">
                    <button class="btn btn-dark" type="submit">Salvar</button>
                </div>
            </form>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- jQuery Mask -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.all.min.js"></script>

    <!-- DataTable -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js">
    </script>
    <script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js">
    </script>

    <!-- Validação de formulário ao clicar em salvar -->
    <script>
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>

    <!-- Confirmação de exclusão de pessoa -->
    <script>
        $(document).ready(function() {
            $(document).on('click', '.deleteBtn', function (event) {
                event.preventDefault();

                Swal.fire({
                    title: 'Você tem certeza que deseja excluir esta pessoa? Esta ação é irreversível.',
                    icon: 'warning',
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					cancelButtonColor: '#d33',
					confirmButtonText: 'Sim, deletar!',
					cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': "{{csrf_token()}}",
                            },
                            url: "{{ route('persons.delete') }}",
                            type: 'DELETE',
                            data: {
                                id: $(this).data('id')
                            },
                            success: function (data) {
                                if(data.success) {
                                    Swal.fire('Pessoa Excluída com Sucesso!', '', 'success')
                                    setTimeout(function() {
										location.reload();
									}, 2000)
                                } else {
									Swal.fire(
										'Falhou! Entre em contato com o administrador do sistema.',
										'',
										'error'
									)
									setTimeout(function() {
										location.reload();
									}, 2000)
								}
                            }
                        });
                    }
                })
            });
        });
    </script>

    <!-- Preenchimento automatico dos dados de endereço a partir do CEP -->
    <script>
        $(document).ready(function() {
            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#street").val("");
                $("#district").val("");
                $("#city").val("");
                $("#state").val("");
            }

            $('#zipCode').on('blur', function() {
                var cep = $(this).val().replace(/\D/g, '');

                if (cep != "") {
                    var validacep = /^[0-9]{8}$/;

                    if (validacep.test(cep)) {
                        $('#street').val("...");
                        $('#district').val("...");
                        $('#city').val("...");
                        $('#state').val("...");

                        $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                $('#street').val(dados.logradouro);
                                $('#district').val(dados.bairro);
                                $('#city').val(dados.localidade);
                                $('#state').val(dados.uf);
                            } else {
                                limpa_formulário_cep();
                                Swal.fire(
                                'Erro!',
                                'CEP não encontrado.',
                                'error'
                                )
                            }
                        });
                    } else {
                        limpa_formulário_cep();
                        Swal.fire(
                        'Erro!',
                        'Formato de CEP inválido.',
                        'error'
                        )
                    }
                } else {
                    limpa_formulário_cep();
                }
            });
        });
    </script>

    <!-- Campos que necessitam de mascara -->
    <script>
        $(document).ready(function() {
            $('#birthDate').mask('00/00/0000', {placeholder: "__/__/____"});
            $('#cpf').mask('000.000.000-00', {reverse: true, placeholder: "___.___.___-__"});
            $('#cnpj').mask('00.000.000/0000-00', {reverse: true, placeholder: "__.___.___/____-__"});
            $('#cellPhone').mask('(00) 00000-0000', {placeholder: "(__) _____-____"});
            $('#phone').mask('(00) 0000-0000', {placeholder: "(__) ____-____"});
            $('#zipCode').mask('00000-000', {placeholder: "_____-___"});
        });
    </script>

    <!-- Buscar todas as pessoas cadastradas -->
    <script>
        $(document).ready(function() {
            $('#personsTable').DataTable({
                processing: true,
                serverSide: true,
                ordering: false,
                bLengthChange: false,
                lengthMenu: [10],
                ajax: "{{ route('persons.getAll') }}",
                columns: [
                    {data: 'name', name: 'name'},
                    {data: 'phone', name: 'phone'},
                    {data: 'district', name: 'district'},
                    {
                        data: 'action',
                        name: 'action',
                        orderable: true,
                        searchable: true
                    },
                ],
                "oLanguage": {
                    "sProcessing": "Processando...",
                    "sLengthMenu": "Mostrar _MENU_ registros",
                    "sZeroRecords": "Não foram encontrados resultados",
                    "sInfo": "Mostrando de _START_ at&eacute; _END_ de _TOTAL_ registros",
                    "sInfoEmpty": "Mostrando de 0 at&eacute; 0 de 0 registros",
                    "sInfoFiltered": "(filtrado de _MAX_ registros no total)",
                    "sInfoPostFix": "",
                    "sSearch": "Buscar:",
                    "sUrl": "",
                    "oPaginate": {
                        "sFirst": "Primeiro",
                        "sPrevious": "Anterior",
                        "sNext": "Seguinte",
                        "sLast": "Último"
                    }
                },
            });
        });
    </script>

    <!-- Submeter formulário -->
    <script>
        $(document).ready(function() {
            $('#personForm').on('submit', function(event) {
                event.preventDefault();

                let form = $('#personForm');
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': "{{csrf_token()}}",
                    },
                    url: "{{ route('persons.store') }}",
                    method: "POST",
                    data: form.serialize(),
                    dataType: "json",
                    success: function(data) {
                        if(data.success) {
                            Swal.fire('Pessoa Cadastrada com Sucesso!', '', 'success')
                            setTimeout(function() {
                                location.reload();
                            }, 2000)
                        } else {
                            form.removeClass('was-validated');
                            $.each(data.errors, function (key, value) {
                                console.log(key);
                                form.find('[name="' + key + '"]').addClass(
                                    'is-invalid');
                                form.find('[name="' + key + '"]').next().html(value)
                                form.find('[name="' + key + '"]').next().show();
                            });
                        }
                    }
                });
            });
        });
    </script>

    <!-- Quando tipo de pessoa for física, CPF e RG são obrigatórios -->
    <script>
        $(document).ready(function() {
            $('#type').on('change', function() {
                if (this.value == 'Pessoa Física') {
                    $('#typeCpf').val('1');
                    $('#typeCnpj').val('');
                    $('#cpf').attr('required', true);
                    $('#rg').attr('required', true);
                    $('#cnpj').removeAttr('required');
                    $('#cnpjDiv').hide();
                    $('#cpfDiv').show();
                    $('#rgDiv').show();
                } else {
                    $('#typeCnpj').val('1');
                    $('#typeCpf').val('');
                    $('#cnpj').attr('required', true);
                    $('#cpf').removeAttr('required');
                    $('#rg').removeAttr('required');
                    $('#cpfDiv').hide();
                    $('#cnpjDiv').show();
                    $('#rgDiv').hide();
                }
            });
        });
    </script>

    <!-- Quando clica no botão de editar preenche os dados do formulário e o campo hidden com ID -->
    <script>
        $(document).ready(function() {
            $(document).on('click', '.editBtn', function() {
                let id = $(this).data('id');
                $.ajax({
                    url: "/persons/" + id + "/edit",
                    dataType: "json",
                    success: function(data) {
                        $('#name').val(data.result.name);
                        $('#birthDate').val(data.result.birthDate);
                        $('#type').val(data.result.type);
                        $('#cpf').val(data.result.cpf);
                        $('#rg').val(data.result.rg);
                        $('#cnpj').val(data.result.cnpj);
                        $('#email').val(data.result.email);
                        $('#cellPhone').val(data.result.cellPhone);
                        $('#phone').val(data.result.phone);
                        $('#zipCode').val(data.result.zipCode);
                        $('#street').val(data.result.street);
                        $('#number').val(data.result.number);
                        $('#complement').val(data.result.complement);
                        $('#district').val(data.result.district);
                        $('#city').val(data.result.city);
                        $('#state').val(data.result.state);
                        $('#id').val(id);
                    }
                });
            });
        });
</body>

</html>
