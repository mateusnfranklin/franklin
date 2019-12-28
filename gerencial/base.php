<?php include('./imports/head.php');
include('./imports/principal.php') ?>
<title>Gerencial</title>
</head>

<body>
    <div class="wrapper">
        <?= sidebar(); ?>
        <!-- Page Content -->
        <div id="content">
            <div class="row">

                <div class="col-md-4">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        &lt;&lt;
                    </button>
                </div>
                <div class="offset-md-8">
                    <p>
                        última atualização:
                        <?php date_default_timezone_set('America/Sao_Paulo');
                        echo date('H:i:s \| d/m/Y'); ?>
                    </p>
                </div>
            </div>

        </div>
    </div>
    <!--Footer-->
    <?php include('./imports/footer.php'); ?>
</body>

</html>