<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/feef5712cc.js" crossorigin="anonymous"></script>
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
    <title>Panel de Administracion</title>
</head>
<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
   <x-sidebar />
    

    <div id="content-wrapper" class="d-flex flex-column">

      
        <div id="content">
            <x-topbar />
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                     
                    </div>
                    <div class="pull-right m-5" style="margin-bottom:10px;">
                    <a class="btn btn-success" href="{{ url('create') }}"> Create New Product</a>
                    </div>
                </div>
            </div>
      
         
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Details</th>
                    <th>Precio</th>
                    <th width="280px">Action</th>
                </tr>
             {{--    @foreach ($products as $product) --}}
                <tr>
                    <td>1</td>
                    <td><img src="https://cdn.pixabay.com/photo/2016/10/22/20/34/wines-1761613_960_720.jpg" width="100px"></td>
                    <td>vino de uvas</td>
                    <td>El mejor de la casa</td>
                    <td>$90.00</td>
                    <td>
                        <form method="POST" >
              
                            <a class="btn btn-info" href="#">Show</a>
               
                            <a class="btn btn-primary" href="#">Edit</a>
                 
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><img src="https://cdn.pixabay.com/photo/2018/02/23/19/23/smoothies-3176371_960_720.jpg" width="100px"></td>
                    <td>Batidos de crema</td>
                    <td>pura proteina rey</td>
                    <td>$100.00</td>
                    <td>
                        <form method="POST" >
              
                            <a class="btn btn-info" href="#">Show</a>
               
                            <a class="btn btn-primary" href="#">Edit</a>
                 
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                <td>3</td>
                <td><img src="https://cdn.pixabay.com/photo/2017/08/03/21/48/drinks-2578446_960_720.jpg" width="100px"></td>
                <td>Jugos naturales</td>
                <td>vitaminas y minerales</td>
                <td>$50.00</td>
                <td>
                    <form method="POST" >
          
                        <a class="btn btn-info" href="#">Show</a>
           
                        <a class="btn btn-primary" href="#">Edit</a>
             
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
                {{-- @endforeach --}}
            </table>
             
           {{--  {!! $products->links() !!} --}}

    </div>
  

</div>

   

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('js/demo/chart-pie-demo.js')}}"></script>

</body>
</html>