<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>

     <link rel="stylesheet" href="{{asset('assets/css/dashlite.css?ver=2.9.0')}}">
     <link id="skin-default" rel="stylesheet" href="{{asset('assets/css/theme.css?ver=2.9.0')}}">
</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">
     <div class="nk-app-root">
          <!-- main @s -->
          <div class="nk-main ">
     <div class="nk-block nk-block-lg">
     <div class="nk-wrcap">
     <div class="nk-content ">
          <div class="container-fluid">
               <div class="nk-content-inner">
                    <div class="nk-content-body">
                    <div class="components-preview wide-md mx-auto">
                    <div class="nk-block-head nk-block-head-lg wide-sm">
                              
                    <div class="card card-bordered">
                         <div class="card-inner">
                              <div class="card-head">
                                   <h5 class="card-title">Update Information</h5>
                                   <a class="btn btn-primary" href="/">Back </a>
                              </div>
                              @if(session('status'))
                              <div class="alert alert-success mb-1 mt-1">
                              {{ session('status') }}
                              </div>
                              @endif
                              <form action="{{ route('update', $author->id) }}" method="POST" enctype="multipart/form-data">
                              @csrf
                              @method('PUT')
                                   <div class="row g-4">
                                        <div class="col-lg-6">
                                             <div class="form-group">
                                                  <label class="form-label" for="name">Full Name</label>
                                                  <div class="form-control-wrap">
                                                       <input type="text" class="form-control" id="full-name-1" name='name' value="{{$author->name}}" > 
                                                  </div>
                                             </div>
                                        </div>
                                        <div class="col-lg-6">
                                             <div class="form-group">
                                                  <label class="form-label" for="title">Title</label>
                                                  <div class="form-control-wrap">
                                                       <input type="text" class="form-control"  name='title' value="{{$author->title}}">
                                                  </div>
                                             </div>
                                        </div>
                                        <div class="col-lg-6">
                                             <div class="form-group">
                                                  <label class="form-label" for="des">Description</label>
                                                  <div class="form-control-wrap">
                                                       <input type="text" class="form-control" name='des' value="{{$author->des}}"  >
                                                  </div>
                                             </div>
                                        </div>
                                        <div class="col-lg-6">
                                             <div class="form-group">
                                                  <label class="form-label" for="image">Image</label>
                                                  <div class="form-control-wrap">
                                                       <input type="file" class="form-control" name='image' value="{{$author->image}}"  >
                                                  </div>
                                             </div>
                                        </div>
               
                                        
                                        <div class="col-12">
                                             <div class="form-group">
                                                  <button type="submit" class="btn btn-lg btn-primary">Save Informations</button>
                                             </div>
                                        </div>
                                   </div>
                              </form>
                         </div>
                    </div>
               </div>
          </div>
     </div>
     </div>
     </div>
          </div>
     </div>
     </div>

</body>
<script src="{{asset('assets/js/bundle.js?ver=2.9.0')}}"></script>
<script src="{{asset('assets/js/scripts.js?ver=2.9.0')}}"></script>

</html>