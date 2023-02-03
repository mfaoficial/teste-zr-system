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
                        <div class="d-flex justify-content-end">
                            <button aria-controls="offcanvasRight" class="btn btn-outline-dark"
                                data-bs-target="#offcanvasRight" data-bs-toggle="offcanvas" type="button">
                                <i aria-hidden="true" class="fa fa-plus-circle"></i> Adicionar Novo
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
                                <tr>
                                    <td>Isabela Daiane Isabela Cavalcanti</td>
                                    <td>(95) 99180-9088</td>
                                    <td>isabela_daiane_cavalcanti@sinalmanaus.com.br</td>
                                    <td>
                                        <button aria-controls="offcanvasRight" class="btn btn-outline-dark"
                                            data-bs-target="#offcanvasRight" data-bs-toggle="offcanvas" type="button">
                                            <i aria-hidden="true" class="fa fa-pencil"></i>
                                        </button>
                                        <button class="btn btn-outline-danger deleteBtn" type="button">
                                            <i aria-hidden="true" class="fa fa-trash-o"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Emanuel José da Rocha</td>
                                    <td>(61) 99850-9485</td>
                                    <td>emanuel-darocha75@almaquinas.com.br</td>
                                    <td>
                                        <button aria-controls="offcanvasRight" class="btn btn-outline-dark"
                                            data-bs-target="#offcanvasRight" data-bs-toggle="offcanvas" type="button">
                                            <i aria-hidden="true" class="fa fa-pencil"></i>
                                        </button>
                                        <button class="btn btn-outline-danger deleteBtn" type="button">
                                            <i aria-hidden="true" class="fa fa-trash-o"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Isabela Joana Bruna Nunes</td>
                                    <td>(82) 98322-3292</td>
                                    <td>isabela.joana.nunes@br.inter.net</td>
                                    <td>
                                        <button aria-controls="offcanvasRight" class="btn btn-outline-dark"
                                            data-bs-target="#offcanvasRight" data-bs-toggle="offcanvas" type="button">
                                            <i aria-hidden="true" class="fa fa-pencil"></i>
                                        </button>
                                        <button class="btn btn-outline-danger deleteBtn" type="button">
                                            <i aria-hidden="true" class="fa fa-trash-o"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Diego Jorge Gabriel Viana</td>
                                    <td>(92) 99307-2944</td>
                                    <td>diego_jorge_viana@icloub.com</td>
                                    <td>
                                        <button aria-controls="offcanvasRight" class="btn btn-outline-dark"
                                            data-bs-target="#offcanvasRight" data-bs-toggle="offcanvas" type="button">
                                            <i aria-hidden="true" class="fa fa-pencil"></i>
                                        </button>
                                        <button class="btn btn-outline-danger deleteBtn" type="button">
                                            <i aria-hidden="true" class="fa fa-trash-o"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Sara Rita Cláudia Galvão</td>
                                    <td>(84) 99870-8188</td>
                                    <td>sararitagalvao@novotempo.com</td>
                                    <td>
                                        <button aria-controls="offcanvasRight" class="btn btn-outline-dark"
                                            data-bs-target="#offcanvasRight" data-bs-toggle="offcanvas" type="button">
                                            <i aria-hidden="true" class="fa fa-pencil"></i>
                                        </button>
                                        <button class="btn btn-outline-danger deleteBtn" type="button">
                                            <i aria-hidden="true" class="fa fa-trash-o"></i>
                                        </button>
                                    </td>
                                </tr>
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
            <form class="needs-validation" novalidate>

                <h4>Dados Pessoais</h4>
                <hr>

                <div class="row">
                    <div class="mb-3">
                        <label class="form-label" for="name">Nome Completo</label>
                        <input class="form-control" id="name" required type="text">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label class="form-label" for="personType">Tipo ... </label>
                        <select class="form-select" id="personType" required>
                            <option selected>Selecione...</option>
                            <option value="Pessoa Física">Pessoa Física</option>
                            <option value="Pessoa Jurídica">Pessoa Jurídica</option>
                        </select>
                    </div>
                    <div class="col">
                        <div class="mb-3" id="cpfDiv">
                            <label class="form-label" for="cpf">CPF</label>
                            <input class="form-control" id="cpf" type="text">
                        </div>
                        <div class="mb-3" id="cnpjDiv">
                            <label class="form-label" for="cnpj">CNPJ</label>
                            <input class="form-control" id="cnpj" type="text">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label" for="rg">Identidade (RG)</label>
                            <input class="form-control" id="rg" required type="text">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label" for="birthDate">Data de Nascimento</label>
                            <input class="form-control" id="birthDate" required type="text">
                        </div>
                    </div>
                    <div class="col">
                        <label class="form-label" for="personType">Estado Civil</label>
                        <select class="form-select" id="personType" required>
                            <option value="">Selecione...</option>
                            <option value="1">Solteiro</option>
                            <option value="2">Casado</option>
                            <option value="2">Separado</option>
                            <option value="2">Divorciado</option>
                            <option value="2">Viuvo</option>
                        </select>
                    </div>
                </div>

                <h4>Endereço</h4>
                <hr>
                <div class="row">
                    <div class="mb-3">
                        <label class="form-label" for="zipCode">CEP</label>
                        <input class="form-control" id="zipCode" required type="text">
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label class="form-label" for="street">Rua</label>
                            <input class="form-control" id="street" required type="text">
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="mb-3">
                            <label class="form-label" for="number">N°</label>
                            <input class="form-control" id="number" required type="number">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label class="form-label" for="complement">Complemento</label>
                            <input class="form-control" id="complement" type="text">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label" for="district">Bairro</label>
                            <input class="form-control" id="district" required type="text">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label" for="city">Cidade</label>
                            <input class="form-control" id="city" required type="text">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label" for="state">Estado</label>
                            <input class="form-control" id="state" required type="text">
                        </div>
                    </div>
                </div>

                <h4>Telefones</h4>
                <hr>

                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label" for="phone">Telefone Fixo</label>
                            <input class="form-control" id="phone" type="text">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label" for="cellPhone">Telefone Celular</label>
                            <input class="form-control" id="cellPhone" required type="text">
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
            $('.deleteBtn').on('click', function(e) {
                Swal.fire({
                    title: 'Do you want to save the changes?',
                    showDenyButton: true,
                    showCancelButton: true,
                    confirmButtonText: 'Save',
                    denyButtonText: `Don't save`,
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        Swal.fire('Saved!', '', 'success')
                    } else if (result.isDenied) {
                        Swal.fire('Changes are not saved', '', 'info')
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
</body>

</html>
