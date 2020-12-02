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
            <div class="section-title">
                <h2>Your <span>basket</span> is below</h2>
            </div>
            <div class="row menu-container">
                <div class="col-lg-6 menu-item filter-coffee">
                    <div class="menu-content">
                    <a href="#menu">Double Espresso</a><span class="btn btn-primary" onclick="addItemToCart()"><i class="icofont-ui-add"></i></span>
                    </div>
                    <div class="menu-ingredients">
                    60ml served with sparkling water
                    </div>
                </div>
                <div class="col-lg-6 menu-item filter-coffee">
                    <div class="menu-content">
                    <a href="#menu">Macchiato</a><span>$</span>
                    </div>
                    <div class="menu-ingredients">
                    Double Espresso marked with milk
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection