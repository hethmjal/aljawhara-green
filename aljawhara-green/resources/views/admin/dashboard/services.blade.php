@extends('admin.layout.partials')
@section('content')
@if (session('success'))
<div class="alert alert-success">{{session('success')}}</div>
@endif
<br>
            <div class="content">
                <div class="container">
                    <div>
                        <a class="btn btn-primary" href="{{route('service.add')}}">اضافة خدمة جديدة </a>
                    </div> 
                   
                    <br>
                    
                    <div class="page-title">
                        <h3>الخدمات
                        </h3>
                    </div>
                    <div class="box box-primary">
                        <div class="box-body">
                            <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th scope="col">الصورة</th>
                                    <th scope="col">العنوان</th>
                                    <th scope="col">التفاصيل</th>

                                    <th scope="col"></th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php $x =1; ?>
                                @foreach ($services as $service)
                                <tr>
                                    <th class="" scope="row"><?php  echo $x++; ?></th>
                                    <td>
                                        <img width="50px" height="50px" src="{{asset('uploads/'.$service->image)}}" />
                                    </td>
                                    <td class="col-2">{{$service->title}}</td>
                                    <td class="col-3">{!! Str::words( $service->detailes,10)!!}</td>


                                    <td class="col-3">
                                        <a class="btn btn-outline-success btn-sm" href="{{route('service.edit',$service->id)}} "><i class="fas fa-edit"></i></a>

                                        <a class="btn btn-outline-danger btn-sm" href="{{route('service.destroy',$service->id)}} "><i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                        
                                       
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