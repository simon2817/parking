<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0">
    <title>API Parking</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body class="h-100 bg-primary">
    <div class="container h-100 border p-5 form">
        <div class="row justify-content-center h-100">
            <div class="col-sm-8 align-self-center text-center">
                <div class="card shadow">
                    <h2>
                        API Parking Access
                    </h2>
                    <div class="card-body">
                        <form action="http://35.184.245.196/parking/backend/updateregistro.php" method="POST" enctype="multipart/form-data" class="p-3 form" novalidate>
                            <div class="row">
                                <div class="col">
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <div class="input-group">
                                                <input type="text" name="idregistro" class="form-control" placeholder="vehiculo" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                        <div class="col-md-8 mb-3">
                                            <div class="input-group">
                                                <input type="datetime-local" name="fecha_salida" class="form-control" placeholder="Estado" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input class="btn btn-primary" type="submit" value="Salida">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
