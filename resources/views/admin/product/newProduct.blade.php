@extends('admin.master')
@section('content')

<section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
                <div class="col-lg-12">
                <div class="card">
                  <h5 class="card-header">Thêm sản phẩm</h5>
                  <div class="card-body">
                  <form action="{{ route('product.store') }}" method="POST">
                  {{ csrf_field() }}
                    <p class="class-text">
                      Tên máy: <input type="text" name="name">
                      Hãng: 
                      <select name="category_id" id="hang">
                        @foreach($cat as $c)
                          <option value="{{$c->id}}">{{ $c->name }}</option>
                        @endforeach
                      </select>
                      Giá: <input type="text" name="price">
                    </p>
                    <p>
                      Mô tả: <br>
                      <textarea name="description" id="" cols="30" rows="10">
                      </textarea>
                    </p>
                    <p>
                      Nội dung: <br>
                      <textarea name="content" id="" cols="30" rows="10">
                      </textarea>
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