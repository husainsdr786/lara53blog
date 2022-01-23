@extends('admin.layouts.app')

@section('main-content')



<div class="content-wrapper">

     <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Category</h1>
          </div>
          
        </div>
      </div>
    </section>

     <section class="content">
      <div class="container-fluid">
        
        <div class="card card-primary">
          <div class="card-header">
                <h3 class="card-title">Category</h3>
          </div>
          

          <form method="post" action="">
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                 <div class="form-group">
                    <label for="name">Category Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Category name">
                  </div>

                   <div class="form-group">
                    <label for="subtitle">Category Slug</label>
                    <input type="text" class="form-control" name="slug" id="slug" placeholder="Category Slug">
                  </div>

              </div>
     
            </div>
            
            </div>

	        </form>
	        <div class="form-group">
		        <div class="card-footer">
		          <button type="submit" class="btn btn-primary">Submit</button>
		        </div>
	        </div>

        </div>
  
      </div>
    </section>
  </div>


@endsection
