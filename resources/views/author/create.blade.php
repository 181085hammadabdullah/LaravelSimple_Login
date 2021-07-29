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
    @include('navbar2')
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
        {{Form::open(array('url' => 'Author/store', 'method' => 'post'))}} 
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="name">Name</label>
              {{  Form::text('name', null, array('class' => 'form-control','id'=>'name'))}}
              </div>
              <div class="form-group col-md-6">
                <label for="email">Email</label>
                {{  Form::email('email',null, array('class' => 'form-control','id'=>'email'))}}
              </div>
            </div>
            <div class="form-row">
            <div class="form-group col-md-6">
              <label for="password">Password</label>
             
              {{  Form::password('password',  array('class' => 'form-control','id'=>'password'))}}
            </div>
           

            <div class="form-group col-md-6">
                <label for="roles">Roles</label>
               
            {{  Form::select('roles[]',$roles, null, array('class' => 'form-control myselect','date_placeholder'=>'Select Roles','multiple','id'=>'roles'))}}
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
         {{ Form::close() }}
    </div>

<script>
    jQuery(document).ready(function()
    {
        jQuery(".myselect").chosen({
            disable_search_threshold:10,
            no_results_text:"Oops, nothing found!",
            width:"100%"
        })
    })
</script>
</body>
</html>