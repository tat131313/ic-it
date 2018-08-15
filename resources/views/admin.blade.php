@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add new car</div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{route('addNewCar')}}" method="POST">
                        {{ csrf_field() }}
                        <select class="form-control" name="user">
                            <option value="">User</option>
                            @foreach($users as $user)
                                <option 
                                {{old('user') == $user->id ? "selected" : ""}}
                                value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
                        <br>
                        <select class="form-control" name="brand">
                            <option value="">Brand</option>
                            @foreach($brands as $brand)
                                <option 
                                {{old('brand') == $brand->id ? "selected" : ""}}
                                value="{{$brand->id}}">{{$brand->brand}}</option>
                            @endforeach
                        </select>
                        <br>
                        <select class="form-control" name="color">
                            <option value="">Color</option>
                            @foreach($colors as $color)
                                <option 
                                {{old('color') == $color->id ? "selected" : ""}}
                                value="{{$color->id}}">{{$color->color}}</option>
                            @endforeach
                        </select>
                        <br>
                        <input type="text" class="form-control" placeholder="Number" id="number" value="{{ old('number') }}" name="number">
                        <br>
                        <button type="submit" class="btn btn-outline-primary">Submit</button>
                    </form>
                </div>

                <div class="card-header">All cars</div>
                <div class="card-body">
                <form action="{{route('deleteCar')}}" method="POST">
                    {{ csrf_field() }}
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">User</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Color</th>
                            <th scope="col">Number</th>
                            <th scope="col">#</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($allCars as $car)
                            <tr>
                                <td>{{$car->name}}</td>
                                <td>{{$car->brand}}</td>
                                <td>{{$car->color}}</td>
                                <td>{{$car->number}}</td>
                                <td><button type="submit" class="btn btn-outline-danger btn-sm" value="{{$car->id}}" name="delete">Delete</button></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </form>                  
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
