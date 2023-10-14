@include('layouts.header')
<div id="inner_banner" class="section inner_banner_section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <div class="title-holder">
                        <div class="title-holder-cell text-left">
                            <h1 class="page-title"></h1>
                            <ol class="breadcrumb">
                                <li><a href="index.html"></a></li>
                                <li class="active"></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end inner page banner -->
<!-- section -->
<div class="section padding_layout_1 product_list_main">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    @foreach ($data as $promocion)
                    <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_30_all">
                        <div class="product_list">
                            <div class="product_img"> <img class="img-responsive" src="{{asset($promocion->url_imagen)}}" alt=""> </div>
                            <div class="product_detail_btm">
                                <div class="center">
                                    <h4><a href="it_shop_detail.html">{{ $promocion->nombre }}</a></h4>
                                </div>
                                <div class="starratin">
                                    <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                                </div>
                                <div class="product_price">
                                    <p><span class="old_price">{{ $promocion->precio_X6S }}</span> – <span class="new_price">{{ $promocion->precio_X8S}}</span></p>
                                </div>
                                <div class="center">
                                    <a href="{{ url('/checkout')}}" class="btn btn-info">Comprar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="container">

                    <div class="row">
                        <div class="mx-auto pb-10 w-4/5">
                            {{ $data->links() }}

                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-3">
                <div class="side_bar">


                    <div class="side_bar_blog">
                        <h4>OUR SERVICE</h4>
                        <div class="categary">
                            <ul>
                                <li><a href="it_data_recovery.html"><i class="fa fa-angle-right"></i>Todas</a></li>
                                <li><a href="it_computer_repair.html"><i class="fa fa-angle-right"></i>Tratamientos</a></li>
                                <li><a href="it_mobile_service.html"><i class="fa fa-angle-right"></i>X Zonas</a></li>

                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- end section -->
@include('layouts.footer')