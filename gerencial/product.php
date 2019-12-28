<?php include('./imports/head.php');
include('./imports/principal.php') ?>
<title>Gerencial</title>
</head>

<body>
    <div class="">
        <?= sidebar(); ?>
        <!-- Page Content -->
        <div id="content">

            <form method="POST">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Produto</th>
                            <th scope="col">Descricao</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Valor Compra</th>
                            <th scope="col">Valor Venda</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        lista();
                        ?>


                        <div class="row">
                            <div class="col-4 mb-2">
                                <button type="submit" name="update" class="btn btn-info">
                                    <img src="./img/atualizar.png" alt="fornecedor" class="img-fluid" style="max-width: 25%;">
                                    <br />
                                    Atualizar dados
                                </button>
                            </div>
                        </div>
            </form>

        </div>
    </div>
    <!--Footer-->
    <?php include('./imports/footer.php'); ?>
    <script type="text/javascript">
        var tr = $('table tbody tr'); // o :not(:first-child) é util no meu exemplo somente porque usa th
        tr.on('click', function() {
            tr.not(this).removeClass('bg-secondary text-white');

            $(this).toggleClass('bg-secondary text-white');
        });
    </script>
</body>

</html>