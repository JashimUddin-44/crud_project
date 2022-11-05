<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <title>CRUD Student</title>
</head>
<body>

<div class="container">
        <div class="row">
           <div class="col-md-12">
             <marquee behavior="scroll" scrollamount="12" direction="left"><h1>Students information Add</h1></marquee>


             <a href="{{url('/')}}" class="btn btn-primary my-3">Home</a>
             <a href="{{ url('studentlist_view')}}" class="btn btn-primary my-3">Show Data</a>
             <a href="#" class="btn btn-primary my-3">Edit</a>
             <a href="#" class="btn btn-primary my-3">Delete</a>
             <br>
              @if(Session::has('msg'))
                <p class="alert alert-success">{{Session::get('msg')}}</p>
              @endif

              {{-- @if(session()->get('msg'))
              <b class="alert alert-success"> {{ session()->get('msg'); }}</b>
            @endif
             --}}

                <form action="{{url('/storedata')}}" method="POST">
                    @csrf

                    <div class="row">
                      <div class="col-md-6">
                        <div class="mb-3">
                          <label for="name" class="form-label">Full Name </label>
                          <input type="text" name="name" class="form-control" value="{{ old('name'); }}" id="name" placeholder="Full Name">
                          @error('name')
                              <strong class="text-danger">{{ $message }}</strong>
                          @enderror
                        </div>
    
                        <div class="mb-3">
                          <label for="roll" class="form-label">Roll Number</label>
                          <input type="number" name="roll" value="{{ old('roll'); }}" class="form-control" id="roll" placeholder="Roll Number">
                          @error('roll')
                          <strong class="text-danger">{{ $message }}</strong>
                          @enderror
                        </div>
    
                        <div class="mb-3">
                          <label for="registion" class="form-label">Registion Number </label>
                          <input type="number" name="registion" value="{{ old('registion'); }}" class="form-control" id="registion" placeholder="Registion Number">
                          @error('registion')
                            <strong class="text-danger">{{ $message }}</strong>
                          @enderror
                        </div>
    
                        <div class="mb-3">
                          <label for="depatment" class="form-label">Depatment </label>
                          <input type="text" name="depatment" value="{{ old('depatment'); }}" class="form-control" id="depatment" placeholder="Depatment">
                          @error('depatment')
                            <strong class="text-danger">{{ $message }}</strong>
                          @enderror
                        </div>
    
                        <div class="mb-3">
                          <label for="semester" class="form-label">Semester </label>
                          <input type="number" name="semester" value="{{ old('semester'); }}" class="form-control" id="semester" placeholder="Semester">
                          @error('semester')
                            <strong class="text-danger">{{ $message }}</strong>
                          @enderror
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="mb-3">
                          <label for="session" class="form-label">Session </label>
                          <input type="number" name="session" value="{{ old('session'); }}" class="form-control" id="session" placeholder="Session">
                          @error('session')
                            <strong class="text-danger">{{ $message }}<strong>
                          @enderror
                        </div>
    
                        <div class="mb-3">
                          <label for="phone" class="form-label">Mobile Number </label>
                          <input type="number" name="phone" value="{{ old('phone'); }}" class="form-control" id="phone" placeholder="Mobile Number">
                          @error('phone')
                            <strong class="text-danger">{{ $message }}</strong>
                          @enderror
                        </div>
    
                        <div class="mb-3">
                          <label for="email" class="form-label">Email address </label>
                          <input type="email" name="email" value="{{ old('email'); }}" class="form-control" id="email" placeholder="Email Address">
                          @error('email')
                            <strong class="text-danger">{{ $message }}</strong>
                          @enderror
                        </div>
    
                        <div class="mb-3">
                          <label for="password" class="form-label">Password </label>
                          <input type="password" value="{{ old('password'); }}" name="password" class="form-control" id="password" placeholder="password">
                          @error('password')
                            <strong class="text-danger">{{ $message }}</strong>
                          @enderror
                        </div>

                      </div>
                      
                    <button type="submit" class="btn btn-primary" value="submit">Submit</button>
                    </div>



 

                  </form>
                  <br>
            </div>
          </div>
    </div>



 



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

</body>
</html>   