@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-4">
            <div class="card">
                <div class="card-header">Menue</div>

                <div class="card-body">
                <ul class = "list-group">
                <a href="#" class = "list-group-item list-group-item-action">View</a>
                <a href="#" class = "list-group-item list-group-item-action">Add</a>

                </ul>

                    
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pizza</div>

                <div class="card-body">
                    <div class ="form-group">
                    <label for="name">Pizza Name</label>
                    <input type="text" class = "form-control" placeholder = "Pizza Name"> 
                    </div>
                    <div class ="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" class ="form-control" placeholder ="Description"></textarea>
                    </div>
                    <div class ="form-inline">
                    <label >Price($)</label>
                    <input type="number" class ="form-control" placeholder = "Small">
                    <input type="number" class ="form-control" placeholder = "Medium">
                    <input type="number" class ="form-control" placeholder = "Large">
                    </div>

                    <div class ="form-group">
                    <label for="category">Category</label>
                    <select class ="form-control">
                    <option value=""></option>
                    <option value="vegetarian" >Vegetarian</option>
                    <option value="nonvegetarian">Non Vegetarian</option>
                    <option value="traditional">Traditional</option>
                    </select>
                    </div>

                    <div class ="form-group">
                    <label >Image</label>
                    <input type="file" class ="form-control" name ="image">
                    </div>
                    <div class ="form-group text-center" >
                    
                    <button type ="submit" class ="btn btn-primary">Save</button>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
