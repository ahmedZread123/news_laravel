@extends('admin.layout.master')
@section('titel')
Categorie
@endsection
@section('contact')
   
 
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Categorie</h1>
            <br>
           @include('admin.layout.message')
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Categorie</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Categorie</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          #
                      </th>
                      <th style="width: 50%">
                         Title
                      </th>    
                      <th style="width: 49%">
                        Action
                      </th>
                  </tr>
              </thead>
              
              @foreach ($category as $categories)
                  
           
              <tbody>
                  <tr>
                      {{-- id --}}
                      <td>
                        
                        {{$loop->iteration }}
                   
                      </td>
                      {{-- title --}}
                      <td>
                          <a>
                            {{ $categories->title  }}
                          </a>
                          <br/>
                          <small>
                              Created {{ $categories->created_at  }}
                          </small>
                      </td>
                      
                
                        <td class="project-actions text-left">
                     
                          <a class="btn btn-info btn-sm mb-1" href="{{route('category.edit',$categories->id)}}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                           
                          </a>
                          <form action="{{route('category.destroy',$categories)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">
                              Delete
                            </button  >
                          </form >
                         
                      </td>
                  </tr>

          
              </tbody>
              @endforeach
          </table>
        </div>
        <!-- /.card-body -->
      </div>
     
      <!-- /.card -->
      {{ $category ->links() }}
      <br><br>
    </section>
    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection