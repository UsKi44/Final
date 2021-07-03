<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0 , maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-Ua-Compatible" content="le=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Cars App</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <form action="{{route('cars.create')}}" method="post">
                    @csrf
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="">Make: </label>
                            <input type="text" name="make" class="form-control" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="">Model: </label>
                            <input type="text" name="model" class="form-control" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="">Produced on: </label>
                            <input type="date" name="produced_on" class="form-control" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col md-12">
                            <button type="submit" class="btn btn-success float-right w-50" style="float: right; margin-top: 5px;">Create</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <table class="table table-stripped table-hover">
                    <tr>
                        <th>Make</th>
                        <th>Model</th>
                        <th>Produced on</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
