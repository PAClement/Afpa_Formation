<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Discovery</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">

</head>

<body>

<<<<<<< HEAD
    <nav>
        <div class="container mt-5">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ">Disabled</a>
                </li>
            </ul>
        </div>
    </nav>
=======
    <?php include('includes/_header.php'); ?>

    <button type="button" class="btn btn-primary mt-5" id="liveToastBtn">Show live toast</button>

    <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
        <div id="liveToast" class="toast" style="position: absolute; top: 0; right: 0;">
            <div class="toast-header">
                <img src="..." class="rounded mr-2" alt="...">
                <strong class="mr-auto">Bootstrap</strong>
                <small>11 mins ago</small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                Hello, world! This is a toast message.
            </div>
        </div>
    </div>
>>>>>>> 5c79eac9ceaff2c6a5a9267a490370783477737d

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script>
        $("#liveToastBtn").click(function() {

            $("#liveToast").toast("show");

        });
    </script>
</body>

</html>