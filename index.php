<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Planes de Trabajo - UNE</title>
        <link rel="icon" type="image/png" href="./assets/images/favicon.PNG">
        <!-- Estilos -->
        <link rel="stylesheet" href="./assets/bootstrap-5.0.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="./assets/bootstrap-icons/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="./assets/js/jquery-ui-1.13.2/jquery-ui.min.css">
        <link rel="stylesheet" href="./assets/js/jquery-ui-1.13.2/jquery-ui.theme.min.css">
        <link rel="stylesheet" href="./assets/js/datatable/datatables.min.css">
        <link rel="stylesheet" href="./assets/js/sweetalert2/sweetalert2.min.css">
        <link rel="stylesheet" href="./assets/css/style.css">
        <!-- Fin Estilos -->


    </head>
    <!-- Modals -->
    <?php include_once('./modals/modal-add-task.php'); ?>
    <!-- End Modals -->

    <body>
        <!-- BD -->
        <?php include_once('./config/database.php') ?>

        <!-- Header -->
        <?php include_once('./shared/header.php'); ?>
        <!-- End Header -->

        <!-- Content -->
        <?php include_once('./content/content.php'); ?>
        <!-- End Content -->

        <!-- Footer -->
        <?php include_once('./shared/footer.php'); ?>
        <!-- End Footer -->
        <!-- Scripts -->
        <script src="./assets/bootstrap-5.0.2/js/bootstrap.min.js"></script>
        <script src="./assets/js/jquery-3.7.0.js"></script>
        <script src="./assets/js/jquery-ui-1.13.2/jquery-ui.min.js"></script>
        <script src="./assets/js/datatable/datatables.min.js"></script>
        <script src="./assets/js/sweetalert2/sweetalert2.all.min.js"></script>
        <script src="./assets/js/html2pdf.bundle.min.js"></script>
        <script src="./assets/js/pdf.js"></script>
        <script src="./assets/js/mensajes.js"></script>
        <script src="./assets/js/main.js"></script>
        <script src="./assets/js/tareas.js"></script>
        <!-- End Scripts -->
    </body>

</html>

<script type="text/javascript">
    let anno = $('select#annos').val();
    traerTareasAnual(anno);
</script>