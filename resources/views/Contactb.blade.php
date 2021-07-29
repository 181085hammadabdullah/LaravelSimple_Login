<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<style>

input,select{
    outline: none;
box-shadow:none !important;
}
input:focus{
    border:1px solid red !important;
}
select:focus {
    border:1px solid red !important;

}

</style>
</head>
<body>
    <br><br><br><br>

    <div class="container">
        {{Form::open(array('url' => 'foo/bar', 'method' => 'put'))}} 
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
              {{  Form::email('inputEmail4', null, array('class' => 'form-control','id'=>'inputEmail4'))}}
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Password</label>
                {{  Form::password('inputPassword4', array('class' => 'form-control','id'=>'inputPassword4'))}}
              </div>
            </div>
            <div class="form-group">
              <label for="inputAddress">Address</label>
             
              {{  Form::text('inputAddress', null, array('class' => 'form-control','id'=>'inputAddress','placeholder'=>"1234 Main St"))}}
            </div>
            <div class="form-group">
              <label for="inputAddress2">Address 2</label>
              {{  Form::text('inputAddress2', null, array('class' => 'form-control','id'=>'inputAddress2','placeholder'=>"Apartment, studio, or floor"))}}
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">City</label>
              {{  Form::text('inputCity', null, array('class' => 'form-control','id'=>'inputCity'))}}

              </div>
              <div class="form-group col-md-4">
                <label for="inputState">State</label>
                
            {{Form::select('inputState', ['Albania' => 'Albania','Kosovo'=>'Kosovo','Germany'=>'Germany','France'=>'France'],'Kosovo', ['class' => 'form-control','id'=>"inputState"])}}    
              </div>
              <div class="form-group col-md-2">
                <label for="inputZip">Zip</label>
              {{  Form::text('inputZip', null, array('class' => 'form-control','id'=>'inputZip'))}}

              </div>
            </div>
            <div class="form-group">
              <div class="form-check">
                  {{Form::checkbox('gridCheck', 'mycheck')}}
                <label class="form-check-label" for="gridCheck">
                  Check me out
                </label>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>
         {{ Form::close() }}
    </div>
    <script>
        function changecolor(){
            document.getElementById("inputEmail4").style.borderColor = "red";

        } 
    </script>
</body>
</html>