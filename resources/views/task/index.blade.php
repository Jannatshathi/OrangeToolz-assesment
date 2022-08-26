<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<br>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('store')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label"> Task Create</label>
                                <input name ='task' type="text" placeholder="Write your task ..." class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="col-4">
                                    <button type="submit" class="btn btn-warning"> Add </button>
                                </div>
                          </form>
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>
    <br>
    <div>
        <div class="container">
            <div class="row">
                {{-- <div class="col-md-4"></div> --}}
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-header">
                            <div class="card">To do</div>   
                        </div>
                    </div>
                </div>
                <div class="col-md-4"></div>
                @foreach ($task as $t)
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="text-center">
                        <div class="card-header">
                            
                            {{-- <div class="card-body">
                                <div class=" text-center"> --}}
                                   {{$t->task}}
                                {{-- </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-4"></div>
                @endforeach
                
                <div class="col-4">
                    <div class="card text-center">
                        <div class="card-header">
                            <div class="card">In Progress</div>
                            <div class="card-body">
                                <div class=" text-center">
                                    Task 02
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card text-center">
                        <div class="card-header">
                            <div class="card">Done</div>
                            <div class="card-body">
                                <div class=" text-center">
                                   Task 03
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
