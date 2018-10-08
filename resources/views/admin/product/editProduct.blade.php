@extends('admin.master')
@section('content')

<section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
                <div class="col-lg-12">
                <div class="card">
                  <h5 class="card-header">Sửa sản phẩm</h5>
                  <div class="card-body">
                  <form action="{{ route('product.update',$product) }}" method="POST">
                  {{ csrf_field() }}
                    <p class="class-text">
                      Tên máy: <input type="text" name="name" value={{ $product->name }}>
                      Hãng: 
                      <select name="category_id" id="hang">
                        @foreach($categories as $c)
                          <option value="{{$c->id}}" {{$product->category_id == $c->id ? "selected" : ""}}>{{$c->name}}</option>
                        @endforeach
                      </select>
                      Giá: <input type="text" name="price" value="{{ $product->price }}">
                    </p>
                    <p>
                      Mô tả: <br>
                      <textarea name="description" id="" cols="30" rows="10">
                        {!! $product->description !!}
                      </textarea>
                      <script type="text/javascript">
                                  CKEDITOR.replace('description');    
                                </script>
                    </p>
                    <p>
                      Nội dung: <br>
                      <textarea name="content" id="" cols="30" rows="10">
                      {!! $product->content !!}
                      </textarea>
                      <script type="text/javascript">
                                  CKEDITOR.replace('content');    
                                </script>
                    </p>  
                    
                    <p><input type="submit" value="Thêm" class="btn btn-primary"/></p>
                    </form>
                  </div>
                </div>
                </div>
              </div>
          </section>
      </section>

@endsection