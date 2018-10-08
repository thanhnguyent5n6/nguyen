@extends('admin.master')
@section('content')

<section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
                <div class="col-sm-12">
              <section class="panel">
              <header class="panel-heading">
                Quản lý sản phẩm
             <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                <a href="javascript:;" class="fa fa-times"></a>
             </span>
              </header>
              <div class="panel-body">
              <div class="adv-table">
                  <a href="{{ route('them-sp') }}" class="btn btn-primary">Create New Product</a>
              <table id="myTable" class="display">
                <thead>
                    <tr>
                        <th>Tên</th>
                        <th>Giá</th>
                        <th>Edit | Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($prod as $key)
                    <tr>
                        
                        <td>{{ $key->name }}</td>
                        <td>{{ number_format($key->price) }}</td>
                        <td>
                            <a href="{{ route('product.edit',$key) }}">Edit</a>
                            <span> | </span>
                            <form action="{{route('product.destroy',$key)}}" method="POST">
                                {{ csrf_field() }} {{ method_field('DELETE') }}
                                <button type="submit">Xóa</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

              </div>
              </div>
              </section>
              </div>
              </div>
              <!-- page end-->
          </section>
      </section>

@endsection