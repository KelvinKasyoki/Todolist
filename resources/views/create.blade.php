@include('incl.header')
<div class="container">
    <div class="row">
        <div class="col-md-6"> 
        <form class="form-horizontal" method="POST" action="{{ url('/insert')}}">
          {{csrf_field()}}
                        <fieldset>
                          <legend>Enter your tasks</legend>

                          @if(count($errors) >0 )
                               @foreach($errors->all() as $error)
                                    <div class="alert alert-danger">
                                         {{$error}}
                                     </div>
                                  @endforeach
                          @endif


                          <div class="form-group">
                            <label for="exampleInputDescription" class="col-log-2 control-label">Task</label>
                            <div class="col-log-10">
                            <input type="text" name="task" class="form-control"  placeholder="Enter Task">
                            
                          </div>
                          <div class="form-group">
                            <label for="exampleInputDescription">Description</label>  
                            <textarea name= "description" class="form-control"   placeholder="Description"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{'/'}}" class="btn btn-primary">Back</a>
                            </div>
                        </fieldset>
                      </form>
        </div>
    </div>
</div>
@include('incl.footer')