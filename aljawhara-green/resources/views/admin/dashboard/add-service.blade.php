@extends('admin.layout.partials')
@section('content')
<div class="content">
    <div class="container">

    <div class="card">
        <div class="card-header"><h4> اضافة خدمة</h4></div>
        <div class="card-body">
            <form accept-charset="utf-8" enctype="multipart/form-data" method="POST" action="{{route('service.store')}}">
                @csrf
           
                <div class="form-group">
                    <label for="name">العنوان</label>
                    <input name="title" type="text" placeholder=" " class="form-control">
                    @error('title')
                    <p class="invalid-feedback d-block"> {{$message}}</p>
                    @enderror
                </div>
    
              
                
    
                <div class="form-group">
                    <label for="name">الصورة</label>
                    <input name="image" type="file"  class="form-control">
                    @error('image')
                    <p class="invalid-feedback d-block"> {{$message}}</p>
                    @enderror
                </div>
    
               
          
      
             
    
                   <div class="form-group">
                    <label for="name">التفاصيل</label>
                  <textarea id="detailes" name="detailes" class="form-control" cols="30" rows="10"></textarea>
             
                  @error('detailes')
                  <p class="invalid-feedback d-block"> {{$message}}</p>
                  @enderror
                   </div>
    
    
    
    
                <div class="form-group">
    
                <button type="submit" class="btn btn-primary">اضافة</button>
            </div>
            </form>
        </div>
    </div>
</div>
<div>
   

    </div>
</div>
@push('js')
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
CKEDITOR.replace('detailes');

</script>  

@endpush

@endsection