@extends('admin.layout.partials')
@section('content')
@if (session('success'))
<div class="alert alert-success">{{session('success')}}</div>
@endif
<br>
            <div class="content">
                <div class="container">
                   
                    <br>
                    <div class="page-title">
                        <h3>الرسائل
                        </h3>
                    </div>
                    <div class="box box-primary">
                        <div class="box-body">
                            <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th scope="col"></th>
                                    <th scope="col">الاسم</th>
                                    <th scope="col"> الايميل</th>
                                    <th scope="col"> رقم الهاتف</th>
                                    <th scope="col">الرسالة</th>

                                    <th scope="col"></th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php $x =1; ?>
                                @foreach ($messages as $message)
                                <tr>
                                    <th scope="row"><?php  echo $x++; ?></th>
                                  
                                    <td>{{$message->name}}</td>
                                    <td>{{ $message->email}}</td>
                                    <td>{{$message->phone}}</td>

                                    <td>{{Str::words($message->message,10)}}</td>
                                    <td>
                                        <a class="btn btn-primary"  href="{{route('dashboard.show-messages',$message->id)}}"> عرض التفاصيل</a>
            
                                    </td>
                                  </tr>
                                
                                @endforeach
                                </tbody>
                              </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection