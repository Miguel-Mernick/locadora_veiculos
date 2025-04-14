<?php
// backend
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <title>ADM - Locadora de veículos</title>
</head>

<body class="container py-4">
    <div class="container py-4">
        <!-- Barra de informações de usuário -->
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="d-flex justify-content-between align-items-center inicio">
                    <h1>Lista de Locadora de veículos</h1>
                    <div class="d-flex align-items-center gap-3 user-info mx-3">
                        <span class="user-icon">
                            <i class="bi bi-person" style="font-size: 24px;"></i>
                        </span>
                        <!-- Bem-vindo, [usuário] -->
                        <span class="welcome-text">
                            Bem-vindo, <strong>Usuario</strong>
                        </span>
                        <!-- botão de logout -->
                        <a href="" class="btn btn-outline-danger d-flex align-items-center gap-1"><i class="bi bi-box-arrow-in-right"></i>Sair</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Seção de cálculo da previsão de aluguel -->
        <div class="row same-height-row">
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-header">
                        <h4 class="mb-0">
                            Calculadora de previsão de aluguel 💰
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="post" method="POST" class="needs-validation" novalidate>
                            <div class="mb-3">
                                <label for="tipo" class="input-label">Tipo de veículo:</label>
                                <select class="form-select" name="tipo" id="tipo" required>
                                    <option value="carro">Carro</option>
                                    <option value="moto">Moto</option>
                                    <option value="helicoptero">Helicoptero</option>
                                    <option value="caminhao">Caminhão</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="quantidade" class="form-label">Quantidade de dias 📅</label>
                                <input type="number" name="quantidade" class="form-control" required>
                            </div>
                            <button type="button" class="btn btn-success w-100" onclick="calcularPrevisao()">Calcular previsão</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Seção de Oferta -->
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-header">
                        <h4 class="mb-0">
                            Oferta imperdível 🎉
                        </h4>
                    </div>
                    <div class="card-body">
                        <h4>Alugue agora mesmo uma Tracer 900 por apenas $150 (de $200). Corra, as vagas são limitadas!</h4>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabela de veículos cadastrados -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">
                            Veículos cadastrados 🚘
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Tipo</th>
                                        <th>Modelo</th>
                                        <th>Placa</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Carro</td>
                                        <td>Golf GTI</td>
                                        <td>FGS1D35</td>
                                        <td>
                                            <span class="badge bg-warning">Alugado</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Moto</td>
                                        <td>Tracer 900</td>
                                        <td>OSD5913</td>
                                        <td>
                                            <span class="badge bg-success" onclick="abrirModal('Moto', 'Tracer 900', 'OSD5913')">Disponível</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Helicóptero</td>
                                        <td>Ka-52 Alligator</td>
                                        <td>123654</td>
                                        <td>
                                            <span class="badge bg-success" onclick="abrirModal('Helicóptero', 'Ka-52 Alligator', '123654')">Disponível</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Caminhão</td>
                                        <td>KBP PANTSIR-S1</td>
                                        <td>DDWD346E</td>
                                        <td>
                                            <span class="badge bg-warning">Alugado</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Modal para Editar Veículo -->
    <div class="modal fade" id="editarVeiculoModal" tabindex="-1" aria-labelledby="editarVeiculoModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editarVeiculoModalLabel">Editar Veículo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="tipoVeiculo" class="form-label">Tipo de Veículo</label>
                            <input type="text" class="form-control" id="tipoVeiculo" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="modeloVeiculo" class="form-label">Modelo</label>
                            <input type="text" class="form-control" id="modeloVeiculo" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="placaVeiculo" class="form-label">Placa</label>
                            <input type="text" class="form-control" id="placaVeiculo" readonly>
                        </div>
                        <button type="button" class="btn btn-primary">Salvar alterações</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Função de cálculo da previsão de aluguel
        function calcularPrevisao() {
            const tipoVeiculo = document.getElementById('tipo').value;
            const quantidadeDias = document.querySelector('[name="quantidade"]').value;
            let precoDiario = 0;

            // Preços diários por tipo de veículo
            switch (tipoVeiculo) {
                case 'carro':
                    precoDiario = 50;
                    break;
                case 'moto':
                    precoDiario = 30;
                    break;
                case 'helicoptero':
                    precoDiario = 500;
                    break;
                case 'caminhao':
                    precoDiario = 100;
                    break;
                default:
                    precoDiario = 0;
                    break;
            }

            // Cálculo do preço total
            const precoTotal = precoDiario * quantidadeDias;
            alert(`O custo total para ${quantidadeDias} dias é de $${precoTotal}`);
        }

        // Função para abrir o modal e carregar os dados do veículo
        function abrirModal(tipo, modelo, placa) {
            document.getElementById('tipoVeiculo').value = tipo;
            document.getElementById('modeloVeiculo').value = modelo;
            document.getElementById('placaVeiculo').value = placa;

            // Abrir o modal
            const modal = new bootstrap.Modal(document.getElementById('editarVeiculoModal'));
            modal.show();
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
