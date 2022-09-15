
@if(Session::has('successMessage'))
<div class="alert alert-success">
  {{Session::get('successMessage')}}
</div>
 {{Session::forget('successMessage')}}
@endif

@if(Session::has('errorMessage'))
  <div class="alert alert-danger">
    <{{Session::get('errorMessage')}}
  </div>
   {{Session::forget('errorMessage')}}
@endif

@if(count($errors)>0)
    <!-- <div class="alert alert-danger"> -->
          <p class="bg-danger text-default">
            <ul style="list-style-type:none;"class="bg-danger text-default">
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
          </p>
    <!-- </div> -->
    <div class="clearfix"></div>
@endif
