@extends('master')
@section('title', 'Account')

@section('hero')
<section id="hero">
    <div class="hero-container">
            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
            <div class="carousel-inner" role="listbox">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2 class="animate__animated animate__fadeInDown">Accounts <span>Page</span></h2>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</section>
@endsection

@section('content')
<section id="why-us" class="why-us">
    <div class="container">
        <div class="section-title">
            <h2>Account Page</h2>
            <p>Log in or register below</p>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="box">
                <span>01</span>
                <h4>The Sunday Times 2017</h4>
                <p>" One of the top 25 Coffee Houses in the UK. "</p>
                </div>
            </div>
            <div class="col-lg-6 mt-4 mt-lg-0">
                <div class="box">
                <span>02</span>
                <h4>The Guardian Newspaper 2010</h4>
                <p>" One of the best 10 coffee shops in the UK. "</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection