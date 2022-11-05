<!doctype html>
<html lang="en">

<head>
  <title>CRUD</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('mycss/app.css')}}">
    <style>
      body{
        background: green;
      }
    </style>
    
</head>

<body>  

  <div class="row">
    <div class="col-sm-12">
    <h1 class="text-center text-white">Add Student Information</h1>
    </div>
    <div><h1 class="text-center text-white">Form</h1></div>
    <div class="col-md-12">
    <marquee behavior="scroll" scrollamount="12" direction="left"><h1 class="text-black text-white">INFORMATION OF STUDENT HOME PAGE.</h1> </marquee>
    
   
    <div class="btn-container">

    <a href="{{ url('/create')}}" class="btn btn-danger">Student Add Form</a>

    </div>
    

    </div>
  </div>


  
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>