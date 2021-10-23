@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8">
        @if(count($errors)>0)

            <div class="card mt-5">
                <div class="card-body" >
                @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
                @endforeach


                </div>
            </div>
            @endif
            <div class="card">
                <div class="card-header">Edit Pizza</div>

                <form action="{{route('pizza.update',$pizza->id)}}" method="post" enctype="multipart/form-data">@csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Pizza Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Pizza Name"
                                value="{{$pizza->name}}">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control"
                                placeholder="Description">{{$pizza->description}}</textarea>
                        </div>
                        <div class="form-inline">
                            <label>Price($)</label>
                            <input type="text" name="small_pizza_price" class="form-control" placeholder="Small"
                                value="{{$pizza->small_pizza_price}}">
                            <input type="text" name="medium_pizza_price" class="form-control" placeholder="Medium"
                                value="{{$pizza->medium_pizza_price}}">
                            <input type="text" name="large_pizza_price" class="form-control" placeholder="Large"
                                value="{{$pizza->large_pizza_price}}">
                        </div>

                        <div class="form-group">
                            <label for="category">Category</label>
                            <select class="form-control" name="category" >
                                <option value="{{$pizza->category}}" selected disabled hidden>{{$pizza->category}}</option>
                                <option value="Vegetarian">Vegetarian</option>
                                <option value="Nonvegetarian">Non Vegetarian</option>
                                <option value="Traditional">Traditional</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="form-control" name="image">
                            <img src="{{Storage::url($pizza->image)}}" width = "80">
                        </div>
                        <div class="form-group text-center">

                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection