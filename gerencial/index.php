<?php include('./imports/head.php');
include('./imports/principal.php');
?>
<title>Gerencial</title>
</head>

<body>
    <div class="">
        <?= sidebar(); ?>
        <!-- Page Content -->
        <div id="content">
            <div class="row">
                <div class="col-md-1">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        &lt;&lt;
                    </button>
                </div>
                <div class="col-md-11 text-right">
                    <p>
                        última atualização:
                        <?php date_default_timezone_set('America/Sao_Paulo');
                        echo date('H:i:s \| d/m/Y'); ?>
                    </p>
                </div>
            </div>

            <br>

            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Produtos vendidos
                        </div>
                        <div class="card-body">
                            bla bla bla
                        </div>
                    </div>
                </div>

                <div class="col-md-4 offset-md-4">
                    <div class="card">
                        <div class="card-header">
                            Período:
                        </div>
                        <div class="card-body">
                            <ul class="pagination justify-content-end">
                                <li class="page-item <?= daysActive('01') ?>" style="width: 33%"><a class="page-link" href="?days=01">24h</a></li>
                                <li class="page-item <?= daysActive('15') ?>" style="width: 33%"><a class="page-link" href="?days=15">15 dias</a></li>
                                <li class="page-item <?= daysActive('30') ?>" style="width: 33%"><a class="page-link" href="?days=30">30 dias</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <br>

            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Ranking de Vendas
                        </div>
                        <div class="card-body">
                            bla bla bla
                        </div>
                    </div>
                </div>

                <div class="col-md-5 offset-md-3">
                    <div class="row">
                        <div class="col-6">
                            <div class="card">
                                <div class="card-header">
                                    Total de <br>compradores
                                </div>
                                <div class="card-body">
                                    R$ 00,00
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    Valor médio <br>por comprador
                                </div>
                                <div class="card-body">
                                    R$ 00,00
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>

        </div>
    </div>
    <!--Footer-->
    <?php include('./imports/footer.php'); ?>
</body>

</html>