@extends('admin.layout.partials')
@section('content')
@if (session('success'))
<div class="alert alert-success">{{session('success')}}</div>
@endif



<div class="content">
    <div class="container">
            
   

        <div class="card col-8 m-auto">
          <div class="card-body">
        <div class="box box-primary">
            <div class="box-body">
                <table class="table table-striped ">
                    <thead>
                      <tr>
                        <th scope="col">الاسم</th>
                        <td scope="col">{{$message->name}} </td>
                      </tr>
                     
                      <tr>
                        <th scope="col">رقم الهاتف</th>
                        <td scope="col"> {{$message->phone}} </td>
                      </tr>
                     
                      <tr>
                        <th scope="col">الايميل</th>
                        <td scope="col"> {{$message->email}}</td>
                      </tr>
                     
                     
                      <tr>
                        <th scope="col">الرسالة</th>
                        <td scope="col"> {{$message->message}}</td>
                      </tr>

                      
                    </thead>
                  
                  </table>
                
            </div>
          </div>
        </div>
       
        </div>
        
    </div>
</div>



@endsection