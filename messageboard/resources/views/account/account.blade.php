@extends('master')
@section('title', 'Account')

@section('hero')
<section id="hero">
    <div class="hero-container">
            <ol class="carousel-indicators" id="hero-carousel-indicators"><a href="#why-us"><i class="icofont-arrow-down"></i></a></ol>
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
            <div class="col-lg-12">
                @guest
                    <div class="box">
                        <span>Login/Register</span>
                        <a href="/login" class="btn btn-warning btn-block">Sign In</a>
                        <a href="/register" class="btn btn-secondary btn-block">Register</a>
                        <a href="/sign-in/github" class="btn btn-dark btn-block">Sign In with GitHub</a>
                    </div>
                @else
                    <div class="box">
                        <span>Hi {{ Auth::user()->name }}!</span>
                        <p>More information coming soon...</p>
                    </div>
                @endguest
            </div>
        </div>
    </div>
</section>
@endsection