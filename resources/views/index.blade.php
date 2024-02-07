@extends('layouts.app')

@sections('content')
<home></home>
<section class="py-5 text-center">
    <div class="container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 id="typing-text" class="fw-light text-light">Welcome to GameStore</h1>
                <p class="lead text-light">
                    Level up your gaming experience with us! At GameStore, we're more than just a store; we're
                    your ultimate destination for all things gaming. Whether you're a hardcore gamer, a casual player,
                    or
                    shopping for the perfect gift, we've got you covered!
                </p>
                <p>
                    <a href="{{ url('shop') }}" class="btn fs-5 fw-bold btn-primary my-2 me-2 text-white">
                        Webshop</a>
                    <a href="{{ url('contact') }}" class="btn fs-5 btn-outline-primary my-2 text-white">Contact</a>
                </p>
            </div>
            <div>

            </div>
        </div>
    </div>
</section>
