@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">All Pizza
                <a href="{{route('pizza.create')}}"><button class = "btn btn-success" style = "float: right">Add Pizza</button></a>
                
                </div>

                <div class="card-body">
                    @if (session('message'))
                    <div class="alert alert-success" role="alert">
                        {{ session('message') }}
                    </div>
                    @endif
                    <table class="table table-bordered" style="text-align:center">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Image</th>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Category</th>
                                <th scope="col">Small Price</th>
                                <th scope="col">Medium Price</th>
                                <th scope="col">Large Price</th>
                                <th scope="col">Actions</th>


                            </tr>
                        </thead>
                        <tbody>
                            @if (count($pizzas)>0)
                            @foreach($pizzas as $key=> $pizza)
                            <tr>
                                <th scope="row">{{$key+1}}</th>
                                <td><img src="{{Storage::url($pizza->image)}}" width="80"></td>
                                <td>{{$pizza->name}}</td>
                                <td>{{$pizza->description}}</td>
                                <td>{{$pizza->category}}</td>
                                <td>{{$pizza->small_pizza_price}}</td>
                                <td>{{$pizza->medium_pizza_price}}</td>
                                <td>{{$pizza->large_pizza_price}}</td>
                                <td> <a href="{{route('pizza.edit',$pizza->id)}}"><button
                                            class="btn btn-primary">Edit</button></a></td>
                                <td><button class="btn btn-danger" data-toggle="modal"
                                        data-target="#exampleModal{{$pizza->id}}">Delete</button></td>

                                <div class="modal fade" id="exampleModal{{$pizza->id}}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <form action="{{route('pizza.destroy',$pizza->id)}}" method = "post">@csrf
                                    @method('DELETE')
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Are You Sure?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </tr>

                            @endforeach

                            @else
                            <p>There is no Pizza to show</p>
                            @endif

                        </tbody>
                    </table>
                    {{$pizzas->links()}}


                </div>
            </div>
        </div>
    </div>
</div>
@endsection