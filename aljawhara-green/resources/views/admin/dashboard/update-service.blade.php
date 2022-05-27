@extends('admin.layout.partials')
@section('content')
<div class="content">
    <div class="container">
<div class="col-lg-12">
    <div class="card">
        <div class="card-header"><h4>تعديل خدمة </h4></div>
        <div class="card-body">
            <form accept-charset="utf-8" enctype="multipart/form-data" method="POST" action="{{route('service.update',$service->id)}}">
                @csrf
           
               
                
                <div class="form-group">
                    <label for="name">العنوان</label>
                    <input name="title" type="text" placeholder=" " value="{{$service->title}}" class="form-control">
                    @error('title')
                    <p class="invalid-feedback d-block"> {{$message}}</p>
                    @enderror
                </div>
    
               
              
                
    
                <div class="form-group">
                    <label for="name">الصورة</label>
                    <input accept="image/*" type='file' name="image" id="imgInp" class="form-control" />
                    @error('image')
                    <p class="invalid-feedback d-block"> {{$message}}</p>
                    @enderror
                </div>
    
                <div class="form-group">
                    <label for="name">الصورة الحالية:</label>
                    <img id="blah" width="100px" height="100px" src="{{asset('uploads/'.$service->image)}}" alt="your image" />
                </div>
               
             
                <div class="form-group">
                    <label for="name">التفاصيل</label>
                  <textarea id="ardes" name="detailes" class="form-control" cols="30" rows="10">{!!$service->detailes!!}</textarea>
             
                  @error('detailes')
                  <p class="invalid-feedback d-block"> {{$message}}</p>
                  @enderror
                   </div>
    
               
    
    
                <div class="form-group">
    
                <button type="submit" class="btn btn-primary">تعديل</button>
            </div>
            </form>
        </div>
    </div>
</div>
<div>
   
</div>
    </div>
</div>
@push('js')
<script>
    imgInp.onchange = evt => {
             const [file] = imgInp.files
             if (file) {
               blah.src = URL.createObjectURL(file)
             }
           }
</script>
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
CKEDITOR.replace('ardes');
CKEDITOR.replace('endes');
</script>  
@endpush
@endsection