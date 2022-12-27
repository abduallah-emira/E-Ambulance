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

<table class="table table-striped">
                                <thead>
                                    <th>name</th>
                                    <th>age</th>
                                    <th>email</th>
                                    <th>phone</th>
                                    <th>address</th>
                                    <th>nId</th> 
                                    
                                </thead>

                                <tbody>

                                @foreach($App as $user_infos)
                                    <tr>
                                        <td>{{$user_infos->fName}}</td>
                                        <td>{{$user_infos->LName}</td>
                                        <td>{{$user_infos->email}</td>
                                        <td>{{$user_infos->phone}</td>
                                    
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            
        
                      </div>

                            
                        </div>
                    </div>

                </div>
            </div>
        </div>



</container>



    
</body>
</html>