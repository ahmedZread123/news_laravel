@extends('admin.layout.master')
@section('titel')
   update Post
@endsection
@section('contact')
   
   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>@yield('titel')</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">@yield('titel')</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
  <section class="content">

    <form action="{{route('post.update',$post)}} " method="POST">
      @csrf
      @method('PUT')
      <div class="row">

        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">post</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Post title</label>
                <input type="text" name="title" class="form-control" value="{{$post->title}}">
              </div>
              <div class="form-group">
                <label for="inputDescription">body</label>
                <textarea name="body" class="form-control" rows="4">{{$post->body}}</textarea>
              </div>
              <div class="form-group">
                <label for="inputStatus">categoire</label>
                <select class="form-control custom-select" name="categoire_id">
                  <option selected disabled>Select one</option>
                  @foreach ($category as $categorie)
                      
                   
                  <option value="{{$categorie->id}}"
                      {{$post->category_id == $categorie->id?'selected':'' }}>
                    {{$categorie->title}}</option>
                  @endforeach
                </select >
              </div>

           
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>

        
      </div>
      <div class="row">
        <div class="col-12">
          <a href="#" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="update post" class="btn btn-success float-right">
        </div>
      </div>
    </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  @endsection