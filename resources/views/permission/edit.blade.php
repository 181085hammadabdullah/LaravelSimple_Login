<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('links')
    <style>

        input,select,textarea{
            outline: none;
        box-shadow:none !important;
        }
        input:focus{
            border:1px solid red !important;
        }
        select:focus {
            border:1px solid red !important;
        
        }
        textarea:focus {
            border:1px solid red !important;
        
        }
        
        </style>
</head>
<body>
   
    <br><br><br><br>
    <div class="container">
        @if(count($errors)>0)
        <div class="alert alert-danger" role="alert">
           <ul>
               @foreach ($errors->all() as $error)
                   <li>
                       {{$error}}
                   </li>
               @endforeach
           </ul>
          </div>
        @endif

        <hr>
        {{Form::model($permission,['route' =>['permission-update',$permission->id] , 'method' => 'put'])}} 
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="name">Name</label>
              {{  Form::text('name', null, array('class' => 'form-control','id'=>'name'))}}
              </div>
              <div class="form-group col-md-6">
                <label for="display_name">Display Name</label>
                {{  Form::text('display_name',null, array('class' => 'form-control','id'=>'display_name'))}}
              </div>
            </div>
            <div class="form-group">
              <label for="description">Description</label>
             
              {{  Form::textarea('description', null, array('class' => 'form-control','id'=>'description','placeholder'=>"1234 Main St"))}}
            </div>
           
            <button type="submit" class="btn btn-primary">Update</button>
          {{ Form::close() }}
    </div>


</body>
</html>