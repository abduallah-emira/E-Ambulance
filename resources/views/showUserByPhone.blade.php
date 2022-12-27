<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
</head>
<body>
<container class="container">

<form method="get" action="{{Route('userData.show')}}">
@csrf

@if (count($errors) > 0)
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<label for="phone" class="form-label">phone number</label>
<input class="form-control form-control-lg" type="text" placeholder="phone" aria-label="phone">
<br>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</container>



    
</body>
</html>