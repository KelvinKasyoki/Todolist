@include('incl.header')
<div class="container">
        <div class="row">
                <legend>Legend</legend>
                @if(session('info'))
                <div class="alert alert-success">
                {{session('info')}}
                </div>
                @endif
                <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Task</th>
                            <th scope="col">Description</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                                @if(count($articles)>0)
                                @foreach ($articles ->all() as $article)
                          <tr >
                          <td>{{$article->Id}}</td>
                          <td>{{$article->Task}}</td>
                          <td>{{$article->Description}}</td>
                            <td>
                              <a href='{{url("/read/{$article->Id}")}}'   button type="button" class="btn btn-primary">Read</a>
                            
                            <a href='{{url("/update/{$article->Id}")}}'   button type="button" class="btn btn-success">Update </a>

                             <a href='{{url("/delete/{$article->Id}")}}'  button type="button" class="btn btn-danger">Delete </a> 
                            
                            </td>
                          </tr>
                          @endforeach
                          @endif
                        </tbody>
                      </table> 
        </div>
 </div>
        
@include('incl.footer')