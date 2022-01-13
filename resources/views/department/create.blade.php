@extends('layouts.app')

@section('title')
  Add New Department
@endsection

@section('content')
<div class="container col-12 col-lg-6 col-md-8 mt-4">
  <div class="card">
      <div class="card-header">
        <h5>Add New Department</h5>
      </div>
      <div class="card-body">
        <form class="form-prevent-department" method="post" action={{ route('store.department') }}>
          @csrf
              <label for="department" class="pt-2">Department:</label>
              <input type="text" name="department" class="form-control form-control-sm @error('department') is-invalid @enderror"
                  placeholder="Department"
                  oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);"
                  >

                  @error('department')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror

            <button type="submit" class="btn btn-sm btn-primary float-right my-3 button-prevent-department">Add <i class="spinner fa fa-spinner fa-spin float-right mt-1 ml-1"></i></button>
        </form>
      </div> 
        <div class="card-footer">
          <button class="btn btn-sm btn-light mr-auto" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            View All Department <i class="fas fa-caret-down"></i>
          </button>
        
        
          <div class="collapse mt-2" id="collapseExample">
            <div class="row">
              @foreach ($department->sortBy('department') as $depart)
                <div class="col-6">{{ $depart->department }}</div>
              @endforeach
            </div>
          </div>
        </div>
  </div>
</div>
<div class="drop-bottom"></div>
@endsection
