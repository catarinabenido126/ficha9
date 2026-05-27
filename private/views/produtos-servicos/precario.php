<?php include '../../includes/header.php'; ?>
<?php include '../../includes/nav.php'; ?>
<div class="container-fluid">
    <div class="row">
        <?php include '../../includes/sidebar.php'; ?>
        <main class="col-md-9 col-lg-10 p-4">
            <section>
                <h2>Preçário Interativo</h2>
                <p>Escolha o serviço e a frequência para ver o preço.</p>
            </section>
            <div class="row mt-4">
                <div class="col-md-6 mb-3">
                    <div class="card shadow rounded text-center p-4" onclick="selecionarServico('PT')">
                        <h4>Treino Pers. (PT)</h4>
                        <p>Clique para escolher</p>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="card shadow rounded text-center p-4" onclick="selecionarServico('AG')">
                        <h4>Aulas de Grupo (AG)</h4>
                        <p>Clique para escolher</p>
                    </div>
                </div>
            </div>
            <div id="opcoesPT" style="display:none;">
                <div class="row mt-3">
                    <div class="col-md-3 mb-2">
                        <button class="btn btn-outline-primary w-100" onclick="mostrarPrecoPT(1)">
                            1 vez/semana
                        </button>
                    </div>
                    <div class="col-md-3 mb-2">
                        <button class="btn btn-outline-primary w-100" onclick="mostrarPrecoPT(2)">
                            2 vezes/semana
                        </button>
                    </div>
                    <div class="col-md-3 mb-2">
                        <button class="btn btn-outline-primary w-100" onclick="mostrarPrecoPT(3)">
                            3 vezes/semana
                        </button>
                    </div>
                    <div class="col-md-3 mb-2">
                        <button class="btn btn-outline-primary w-100" onclick="mostrarPrecoPT(4)">
                            4 vezes/semana
                        </button>
                    </div>
                </div>
                <p id="resultadoPT" class="text-center mt-3"></p>
            </div>
            <div id="opcoesAG" style="display:none;">
                <div class="row mt-3">
                    <div class="col-md-4 mb-2">
                        <button class="btn btn-outline-success w-100" onclick="mostrarPrecoAG(1)">
                            1 vez/semana
                        </button>
                    </div>
                    <div class="col-md-4 mb-2">
                        <button class="btn btn-outline-success w-100" onclick="mostrarPrecoAG(2)">
                            2 vezes/semana
                        </button>
                    </div>
                    <div class="col-md-4 mb-2">
                        <button class="btn btn-outline-success w-100" onclick="mostrarPrecoAG('Livre')">
                            Livre
                        </button>
                    </div>
                </div>
                <p id="resultadoAG" class="text-center mt-3"></p>
            </div>
        </main>
    </div>
</div>
<script src="../../includes/js/funcoes.js"></script>
<?php include '../../includes/footer.php'; ?>