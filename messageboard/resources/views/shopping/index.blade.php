@extends('master')
@section('title', 'Homepage')

@section('hero')
<section id="hero">
    <div class="hero-container">
        <ol class="carousel-indicators" id="hero-carousel-indicators"><a href="#why-us"><i class="icofont-arrow-down"></i></a></ol>
        <div class="carousel-inner" role="listbox">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="carousel-container">
                    <div class="carousel-content">
                        <h2 class="animate__animated animate__fadeInDown">Your <span>Basket</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
    <section id="menu" class="menu">
        <div class="container">
            @if(session()->has('sessionBasket'))
                @if(Session::get('sessionBasket'))
                    <div class="section-title">
                        <h2>Your <span>basket</span> is below</h2>
                    </div>
                @else
                    <div class="section-title">
                        <h2>Your <span>basket</span> is empty</h2>
                    </div>
                @endif
            @endif
            <div class="row menu-container">
                @if(session()->has('sessionBasket'))
                    @if(Session::get('sessionBasket'))
                        @foreach(Session::get('sessionBasket') as $basketItem) 
                            @foreach($basketItem as $item)
                            <div class="col-lg-6 menu-item basketItemsNumbered" id="item-{{ $item[0] }}">
                                <div class="menu-content">
                                    <a href="#menu">{{ $item[1] }}</a><span class="btn btn-primary" style="background-color:#df4759 !important;" onclick="removeCheckoutItem(this)"><i class="icofont-ui-remove"></i></span>
                                </div>
                                <div class="menu-ingredients">
                                    {{ $item[2] }}
                                </div>
                            </div>
                            @endforeach
                    @endforeach
                    @else
                        <div class="col-lg-12 menu-item">
                            <div class="text-center">
                                <p>Go <a href="/" style="text-decoration:underline">home</a> to add items!</p>
                            </div>
                        </div>
                    @endif
                @endif
            </div>
        </div>
    </section>
@endsection