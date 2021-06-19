@extends('admin.layout.master')
@section('titel')
    Post
@endsection
@section('contact')
   
 
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Post</h1>
            <br>
           @include('admin.layout.message')
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Projects</li>
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
          <h3 class="card-title">posts</h3>

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
                      <th style="width: 19%">
                         Title
                      </th>
                   
                      <th style="width: 20%">
                        Image
                      </th>
                     
                    
                      <th  class="text-center "  style="width:10%">
                        views
                      </th>
                    
                      <th  class="text-center"  style="width: 25%">
                        categoire
                      </th>
                     
                      <th style="width: 25%">
                        Action
                      </th>
                  </tr>
              </thead>
              @foreach ($post as $posts)
                  
           
              <tbody>
                  <tr>
                      {{-- id --}}
                      <td>
                        
                        {{$loop->iteration }}
                      </td>
                      {{-- title --}}
                      <td>
                          <a>
                            {{ $posts->title  }}
                          </a>
                          <br/>
                          <small>
                              Created {{ $posts->created_at  }}
                          </small>
                      </td>
                      {{-- Image --}}
                      <td>
                       
                        {{-- <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png"> --}}
                        <img alt="Avatar" class="table-avatar " src=" {{ asset('post_image/'.$posts->image)   }}">
                     </td>
                        {{-- views --}}
                      <td  class="text-center">
                       
                    
                            {{ $posts->views  }}
                  

                      </td>

                      <td  class="text-center">
                         @foreach ($category as $item)
                            @if ( $posts->category_id ==$item->id )
                            {{$item->title }}
                            @endif
                           
                         @endforeach
                       
                      </td>
                      <td class="project-actions text-left">
                          <a class="btn btn-primary btn-sm" href="{{route('post.show',$posts)}}">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>
                          <a class="btn btn-info btn-sm" href="{{route('post.edit',$posts)}}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <form action="{{route('post.destroy',$posts)}}" method="POST">
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
      {{ $post->links() }}
    </section>
    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection