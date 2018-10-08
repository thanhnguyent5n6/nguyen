@extends('admin.master')
@section('content')

<div class="row">
<div class="col-md-12">

<section class="panel">
    <div class="panel-body">
        <div class="col-md-6">
            <div class="pro-img-details">
                <img src="admin/image/{{ $product->image }}" alt=""/>
            </div>
            
        </div>
        <div class="col-md-6">
            <h4 class="pro-d-title">
                <a href="#" class="">
                    {{ $product->name }}
                </a>
            </h4>
            <p>
                {{ $product->title }}
            </p>
            <div class="m-bot15"> <strong>Price : </strong> <span class="amount-old">{{ $product->price }}</span>  <span class="pro-price"> $300.00</span></div>
            
        </div>
    </div>
</section>

<section class="panel">
    <header class="panel-heading tab-bg-dark-navy-blue">
        <ul class="nav nav-tabs ">
            <li class="active">
                <a data-toggle="tab" href="#description">
                    Description
                </a>
            </li>
            <li>
                <a data-toggle="tab" href="#reviews">
                    Reviews
                </a>
            </li>

        </ul>
    </header>
    <div class="panel-body">
        <div class="tab-content tasi-tab">
            <div id="description" class="tab-pane active">
                <h4 class="pro-d-head">Product Description</h4>
                <p> Praesent ac condimentum felis. Nulla at nisl orci, at dignissim dolor, The best product descriptions address your ideal buyer directly and personally. The best product descriptions address your ideal buyer directly and personally. </p>
                <p> Praesent ac condimentum felis. Nulla at nisl orci, at dignissim dolor, The best product descriptions address your ideal buyer directly and personally. The best product descriptions address your ideal buyer directly and personally. The best product descriptions address your ideal buyer directly and personally. The best product descriptions address your ideal buyer directly and personally. </p>
            </div>
            <div id="reviews" class="tab-pane">
                <article class="media">
                    <a class="pull-left thumb p-thumb">
                        <img src="img/avatar-mini.jpg">
                    </a>
                    <div class="media-body">
                        <a href="#" class="cmt-head">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                        <p> <i class="fa fa-time"></i> 1 hours ago</p>
                    </div>
                </article>
                <article class="media">
                    <a class="pull-left thumb p-thumb">
                        <img src="img/avatar-mini2.jpg">
                    </a>
                    <div class="media-body">
                        <a href="#" class="cmt-head">Nulla vel metus scelerisque ante sollicitudin commodo</a>
                        <p> <i class="fa fa-time"></i> 23 mins ago</p>
                    </div>
                </article>
                <article class="media">
                    <a class="pull-left thumb p-thumb">
                        <img src="img/avatar-mini3.jpg">
                    </a>
                    <div class="media-body">
                        <a href="#" class="cmt-head">Donec lacinia congue felis in faucibus. </a>
                        <p> <i class="fa fa-time"></i> 15 mins ago</p>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<div class="row product-list">
    <div class="col-md-4">
        <section class="panel">
            <div class="pro-img-box">
                <img src="img/product-list/pro-1.jpg" alt=""/>
                <a href="#" class="adtocart">
                    <i class="fa fa-shopping-cart"></i>
                </a>
            </div>

            <div class="panel-body text-center">
                <h4>
                    <a href="#" class="pro-title">
                        Leopard Shirt Dress
                    </a>
                </h4>
                <p class="price">$300.00</p>
            </div>
        </section>
    </div>
    <div class="col-md-4">
        <section class="panel">
            <div class="pro-img-box">
                <img src="img/product-list/pro1.jpg" alt=""/>
                <a href="#" class="adtocart">
                    <i class="fa fa-shopping-cart"></i>
                </a>
            </div>

            <div class="panel-body text-center">
                <h4>
                    <a href="#" class="pro-title">
                        Leopard Shirt Dress
                    </a>
                </h4>
                <p class="price">$300.00</p>
            </div>
        </section>
    </div>
    <div class="col-md-4">
        <section class="panel">
            <div class="pro-img-box">
                <img src="img/product-list/pro2.jpg" alt=""/>
                <a href="#" class="adtocart">
                    <i class="fa fa-shopping-cart"></i>
                </a>
            </div>

            <div class="panel-body text-center">
                <h4>
                    <a href="#" class="pro-title">
                        Leopard Shirt Dress
                    </a>
                </h4>
                <p class="price">$300.00</p>
            </div>
        </section>
    </div>

</div>
</div>
</div>

@endsection