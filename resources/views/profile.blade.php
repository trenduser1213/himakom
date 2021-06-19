@extends('layouts.base')
@section('content')
    <header class="masthead header-cover" style="background-image:url('assets/img/cover-001.jpg');">
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in"><span></span></div>
                <div class="intro-heading text-uppercase"><span class="font-himakom">Himakom</span></div><a class="btn border rounded-pill btn-xl text-uppercase js-scroll-trigger btn-yellow-custom shadow-lg" role="button" href="#services">MEET THE TEAM<br></a>
            </div>
        </div>
    </header>
    <section class="text-center text-light bg-yellow"><img class="img-position" src="assets/img/Group32.svg">
        <div class="container">
            <h6 class="display-4 font-weight-bold">SEJARAH HIMAKOM<br></h6>
            <p><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus accumsan orci sed leo aliquam tincidunt. Nunc ut ligula pretium, feugiat purus non, accumsan magna. Sed ac facilisis purus, vitae imperdiet tortor. Mauris viverra est eget ex porttitor luctus. Duis mollis quam sapien. Pellentesque et semper risus, at accumsan mauris. Cras a viverra metus.<br><br><br><br>Etiam venenatis vestibulum libero in pulvinar. Cras sed purus pellentesque, imperdiet mauris et, commodo augue. Morbi a augue eu nisi tempor tincidunt ut ut libero. Maecenas eget nulla tellus. Ut in congue mi, nec iaculis erat. Fusce nec nunc et orci tincidunt convallis. Aenean nec lorem mi. Fusce mattis purus quis nunc lacinia luctus. Donec accumsan, neque id vestibulum bibendum, ex nisi venenatis lectus, in mollis magna magna vel diam. Donec cursus urna tortor, a luctus metus bibendum vel. Nullam nisi orci, accumsan at blandit sed, ultricies eget lectus. Integer rutrum mattis eros eu vulputate. Fusce vitae eros gravida, pulvinar mi eget, gravida urna. Duis tempor pharetra nisl.<br><br></p>
        </div>
    </section>
    <div class="row">
        <div class="col-lg-6 col-dark-custom">
            <section>
                <div class="container">
                    <h6 class="display-4 d-lg-flex justify-content-lg-center font-weight-bold p-4">VISI<br></h6>
                    <p class="text-center d-lg-flex justify-content-lg-center p-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus accumsan orci sed leo aliquam tincidunt. Nunc ut ligula pretium, feugiat purus non, accumsan magna. Sed ac facilisis purus, vitae imperdiet tortor. Mauris viverra est eget ex porttitor luctus. Duis mollis quam sapien. Pellentesque et semper risus, at accumsan mauris. Cras a viverra metus.<br></p>
                </div><img class="img-position-bottom" src="assets/img/Group32.svg">
            </section>
        </div>
        <div class="col-lg-6 col-light-custom">
            <section><img class="img-position" src="assets/img/Group%2033.svg" style="right: 30px;">
                <div class="container">
                    <h6 class="display-4 text-center d-lg-flex justify-content-lg-center font-weight-bold p-4">MISI<br></h6>
                    <ul class="p-5">
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt<br><br></li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt<br><br></li>
                    </ul>
                    <p class="text-left d-lg-flex"><br></p>
                </div>
            </section>
        </div>
    </div>
    @endsection