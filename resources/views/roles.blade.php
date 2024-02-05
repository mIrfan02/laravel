<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Table Example</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2></h2>
        <a href="{{ url('forms') }}" class="btn btn-primary">Create</a>
    </div>
<div class="container mt-5">
    <h2>Role Table </h2>
    <table class="table">
        <thead>
           
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Guardname</th>
                <th scope="col">Action</th>
                
            </tr>
        </thead>
        @foreach ($data as $musa )
                
               
        <tbody>
            <tr>
                <th scope="row">{{$musa->id}}</th>
                <td>{{$musa->name}}</td>
                <td>{{$musa->guard_name}}</td>
                <td><a href="{{ url('edit/'.$musa->id) }}" class="btn btn-success">Edit</a>
                <a href="{{ url('delete/'.$musa->id) }}" class="btn btn-danger">Delete</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Bootstrap JS and Popper.js (required for some Bootstrap components) -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
