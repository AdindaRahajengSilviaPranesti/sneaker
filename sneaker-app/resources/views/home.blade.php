@extends('layouts.app')

@section('content')
    <section class="hero">
        <div class="row">
            <div class="col-sm">
                <h1>PT ZONA KARYA NUSANTARA</h1>
                <p>Teamwork amplifies our strengths, allowing us to achieve more together than we ever could alone.</p>
                <a href="#" class="play-button">Go!</a>

            </div>
            <div class="col-sm">
                <img src="{{ asset('images/workof.png') }}" alt="workof">
            </div>
        </div>
    </section>

    <section class="about">
        <div class="row justify-content-center">
            <!-- Column for the image -->
            <div class="col-sm"> <!-- Changed to 6 for a 2-column grid -->
                <div class="about-image">
                    <img src="{{ asset('images/laptop.jpg') }}" alt="About Image">
                </div>
            </div>

            <!-- Column for the text -->
            <div class="col-sm"> <!-- Changed to 6 for a 2-column grid -->
                <div class="about-text">
                    <p>What We Do?</p>
                    <ul>
                        <li><b>Mobile Application</b><br>Building mobile applications is never easy.
                            P2P lending app? Logistic App? E-Commerce App?
                            We have done them all. Done them all well.
                            Done them all fast.</li>
                        <li><b>Web Application</b><br>We can build any web applications you need.
                            A personal blog? Company Profile? E-commerce?
                            or any specific functionalities? We got you covered!
                            We have a strong team of web developers that can
                            follow your stack and needs.</li>
                        <li><b>UI/UX Design</b><br>All things are designed. A few things are designed well.
                            We try to elevate your ideas with great UI/UX design,
                            suited to your taste, addressing the right pain points.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <section class="brands">
        <div class="row justify-content-center">
            <div class="col-sm">
                <h2>Our Brands</h2>
                <div class="brands-logos">
                    <img src="{{ asset('images/ventela2.jpeg') }}" alt="Brand 1">
                    <img src="{{ asset('images/adidas.png') }}" alt="Brand 2">
                    <img src="{{ asset('images/asics.jpeg') }}" alt="Brand 1">
                    <img src="{{ asset('images/diadora.png') }}" alt="Brand 2">
                    <img src="{{ asset('images/nike.jpeg') }}" alt="Brand 1">
                    <img src="{{ asset('images/adidas.png') }}" alt="Brand 2">
                    <img src="{{ asset('images/puma.jpeg') }}" alt="Brand 1">
                    <img src="{{ asset('images/reebok.jpeg') }}" alt="Brand 2">
                </div>
            </div>
        </div>
    </section> &nbsp;


    <h2 class="join"><b>Join Our Team</b></h2>
    <section class="jointeam">
        <div class="row justify-content-center">
            <div class="col-sm">
                <div class="join">
                    <img src="{{ asset('images/join.jpeg') }}" alt="join">
                </div>
            </div>
            <div class="col-sm">
                <div class="join-text">
                        <p>Are you passionate about innovation and eager to make an impact? At <b>PT. Zona Karya Nusantara</b>,
                             we're always looking for talented individuals to help us drive 
                             change and create something extraordinary.
                        <br> Whether you're a creative thinker, a tech enthusiast, 
                        or a strategic planner, we offer a dynamic environment where your ideas can flourish.</br>
                       
                        </p>
                        <button class="joinjez">JEZ CAREER</button>
                </div>
                
            </div>
        </div>
    </section>
@endsection
