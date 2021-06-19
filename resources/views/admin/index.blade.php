 @extends('admin.layout.master')
 @section('titel')
     Admin
 @endsection
@section('contact')
    
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">@yield('titel')</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">@yield('titel')</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-paste"></i></span>
           
              <div class="info-box-content">
                <span class="info-box-text"> Posts</span>
                <span class="info-box-number">
                
                  {{$post->count()}}
                  <small>%</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-photo-video"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">videos</span>
                <span class="info-box-number">{{$video->count()}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-sticky-note"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">categorys</span>
                <span class="info-box-number">{{$category->count()}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          {{-- <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">New Members</span>
                <span class="info-box-number">2,000</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div> --}}
          <!-- /.col -->
        </div>
        <!-- /.row -->

    

        <!-- Main row -->
     <div class="row">
           <div class="col-md-12">
  
            <!-- /.card -->

            <!-- PRODUCT LIST -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Message</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>

              
              <!-- /.card-header -->
              <div class="card-body p-0">
                <ul class="products-list product-list-in-card pl-2 pr-2">
                  @foreach ($data as $item)
                      
                  <li class="item">
                    <div class="product-img">
                      <img src="dist/img/default-150x150.png" alt="Product Image" class="img-size-50">
                    </div>
                    <div class="product-info">
                      <a href="{{route('view',$item->id)}}" class="product-title">{{$item->name}}
                        <span class="badge badge-info float-right">{{$item->subject}}</span></a>
                      <span class="product-description">
                        {{$item->message}}
                      </span>
                      <span class="badge badge-warning float-right">{{$item->created_at}}</span>
                    </div>
                  </li>
                  @endforeach
                
           
                </ul>
              </div>
           
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div> 
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>

    <!-- /.content -->
  </div>

  <!-- /.content-wrapper -->
  @endsection 