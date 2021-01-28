@extends('admin.layouts.app')

@section('main-content')

  <div class="content-wrapper">

     <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blog</h1>
          </div>
          
        </div>
      </div>
    </section>

     <section class="content">
      <div class="container-fluid">
        
        <div class="card card-primary">
          <div class="card-header">
                <h3 class="card-title">Blog</h3>
          </div>
          

          <form method="post" action="" enctype="multipart/form-data">
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                 <div class="form-group">
                    <label for="title">Post Title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Title">
                  </div>

                  <div class="form-group">
                    <label for="subtitle">Post Sub Title</label>
                    <input type="text" class="form-control" name="subtitle" id="subtitle" placeholder="Sub Title">
                  </div>

                  <div class="form-group">
                    <label for="slug">Post Slug</label>
                    <input type="text" class="form-control" name="slug" id="slug" placeholder="Slug">
                  </div>

              </div>
             

              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputFile">Image</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" name="image" class="custom-file-input" id="image">
                      <label class="custom-file-label" for="image">Choose file</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text">Upload</span>
                    </div>
                  </div>
                </div>
                

                <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="status" name="status">
                        <label for="status">Publish
                        </label>
                      </div>
                </div>
               
              </div>
            </div>
          
            <div class="col-md-12">
              <div class="form-group">
                 <section class="content">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="card card-outline card-info">
                        <div class="card-header">
                          <h3 class="card-title">
                            Write Post Body Here
                          </h3>
                        </div>
                      
                        <div class="card-body">
                          <textarea id="summernote" name="body">
                            
                          </textarea>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  
                </section>
              </div>
            </div>

        </form>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>

        </div>
  
      </div>
    </section>
  </div>




  <!-- CodeMirror -->
<script src="{{asset('admin/plugins/codemirror/codemirror.js')}}"></script>
<script src="{{asset('admin/plugins/codemirror/mode/css/css.js')}}"></script>
<script src="{{asset('admin/plugins/codemirror/mode/xml/xml.js')}}"></script>
<script src="{{asset('admin/plugins/codemirror/mode/htmlmixed/htmlmixed.js')}}"></script>

<script src="{{asset('admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>

<script>
$(function () {
  bsCustomFileInput.init();
});
</script>

@endsection