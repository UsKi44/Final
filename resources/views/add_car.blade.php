@extends('layout')

@section('content')


        <div class="jumbotron jumbotron-fluid bg-danger" style="display: flex">
            <div class="container" style="display: flex">
                <div class="col-md-6">
                    <h1 class="display-4 white" style="color: white">
                        CarsApp
                    </h1>
                    <p class="lead" style="color: white">
                        App for Final term :)
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="/resources/img/11-2-car-picture.png" alt="car">
                    {{--                    <img src="<?= asset('/resources/img/11-2-car-picture.png') ?>" alt="logo">--}}
                    {{--                    ამ ნაწილს თუ შეიძლება რომ დააკვირდეთ, ანუ არ ვიცი რატომ მაგრამ სურათი არ გამოაქვს ორი გზით ვცადე მარა არცერთით არ აკეთებს--}}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <form action="{{route('create')}}" method="post">
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
                <div class="col md-12">
                    <a href="/">
                        <button class="btn btn-danger float-left w-auto" style="float: left; margin-top: -40px;">
                            Return Home
                        </button>
                    </a>

                </div>
            </div>



            <div class="col-md-6">
                <table class="table table-stripped table-hover">

                    <tr>
                        <th>Make</th>
                        <th>Model</th>
                        <th>Produced on</th>
                    </tr>
                    @foreach($data as $elem)
                        <tr>
                            <td>{{$elem->make}}   </td>
                            <td>{{$elem->model}} </td>
                            <td>{{$elem->produced_on}} </td>
                            <td>
                                <form method="post" action="{{route('delete',$elem->id)}}">
                                    @csrf
                                    @method('DELETE')
                                    <a href="" class="btn btn-sm btn-primary">Edit</a>
                                    <button class="btn btn-danger">Delete</button>
                                </form>

                            </td>

                        </tr>


                    @endforeach

                </table>
            </div>
        </div>
    </div>


@endsection



