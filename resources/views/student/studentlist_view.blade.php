<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student View</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">

    <style>
      /* .hidden.sm\:flex-1.sm\:flex.sm\:items-center.sm\:justify-between{
        display: none;
      } */
    </style>
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Student List</h1>
                <a href="{{url('/')}}" class="btn btn-success">Home</a>
                <a href="{{url('/create')}}" class="btn btn-success">Create</a>
                <br><br>
                @if(Session::has('msg'))
                <p class="alert alert-success">{{Session::get('msg')}}</p>
           @endif
           
            <!-- {{$students}} -->
                <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Name</th>
                        <th scope="col">Roll</th>
                        <th scope="col">Reg</th>
                        <th scope="col">Depatment</th>
                        <th scope="col">Semester</th>
                        <th scope="col">Session</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Updated At</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($students as $student)
                     
                        <tr>
                          <th scope="row">{{$student->id}}</th>
                          <td>{{$student->name}}</td>
                          <td>{{$student->roll}}</td>
                          <td>{{$student->registion}}</td>
                          <td>{{$student->depatment}}</td>
                          <td>{{$student->semester}}</td>
                          <td>{{$student->session}}</td>
                          <td>{{$student->phone}}</td>
                          <td>{{$student->email}}</td>
                          <td>{{$student->created_at}}</td>
                          <td>{{$student->updated_at}}</td>
                          <td>
                            <a href="#" title=""><i class="fas fa-mobile"></i></a>
                          </td>
                          <td>
                            <a href="#" title=""><i class="fas fa-envelope-open-text"></i></a>
                          </td>
                          <td>
                            <a href="#" title=""><i class="far fa-calendar-alt"></i></a>
                          </td>
                          <td>
                            <div class="btn-group">
                              <a href="{{ url('edit', $student->id) }}">
                                <button class="btn btn-md btn-success me-1 p-1 ">Edit</button>
                              </a>
                              <a href="{{ route('student.delete',$student->id) }}">
                                <button class="btn btn-md btn-danger me-1 p-1 ml-2">Delete</button>
                              </a>

                            </div>
                          </td>
                        </tr>
                        @endforeach
                    
                    </tbody>
                  </table>

                  

            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>