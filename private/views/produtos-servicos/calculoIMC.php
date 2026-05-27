<?php include '../../includes/header.php'; ?>
<?php include '../../includes/nav.php'; ?>

<div class="container-fluid">
    <div class="row">
        <?php include '../../includes/sidebar.php'; ?>
        <!-- Conteúdo Principal -->
        <main class="col-md-9 col-lg-10 p-4">
            <section>
                <h2 onmouseover="console.log('Bem-vindo ao Cálculo de IMC do ISEP')">
                    Cálculo de IMC
                </h2>
                <p>
                    Esta funcionalidade permite calcular o Índice de Massa Corporal (IMC),
                    uma medida utilizada para avaliar se o peso de uma pessoa está adequado à sua altura.
                </p>
            </section>
            <div class="card shadow rounded mt-4">
                <div class="card-body">
                    <h2 class="mb-4">
                        <strong>
                            <i class="fa-solid fa-heart-pulse me-2"></i>
                            Calculadora de IMC
                        </strong>
                    </h2>
                    <hr>
                    <form>
                        <div class="mb-3">
                            <label for="peso" class="form-label">
                                Peso (kg):
                            </label>
                            <input type="number"
                                id="peso"
                                name="peso"
                                class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="altura" class="form-label">
                                Altura (m):
                            </label>

                            <input type="number"
                                id="altura"
                                name="altura"
                                class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">
                                Resultado:
                            </label>
                            <br>
                            <span id="indicadorIMC">
                                <!-- texto será atualizado dinamicamente -->
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>
</div>
<script>
    console.log("Engenharia Biomédica");
</script>
<script src="../../includes/js/funcoes.js"></script>
<?php include '../../includes/footer.php'; ?>