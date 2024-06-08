@extends('layouts.public.public')

@section('title', 'Contact Us')

@section('content')
    <!-- Contact Form Starts -->
    <div class="container text-center">
        <section class="py-5">
            <div class="text-center mb-5">
                <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i
                        class="bi bi-envelope"></i></div>
                <h1 class="fw-bolder">Get in touch</h1>
                <p class="lead fw-normal text-muted mb-0">Let's work together!</p>
            </div>
            <div class="row">
                <div class="col-12 justify-content-md-center px-4">
                    <form action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingFirstName" name="firstName"
                                placeholder="Your first Name" required>
                            <label for="floatingFirstName">First Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingLastName" name="lastName"
                                placeholder="Your last Name" required>
                            <label for="floatingLastName">Last Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" name="email"
                                placeholder="name@example.com" required>
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="tel" class="form-control" id="floatingPhone" name="phone"
                                placeholder="Your Phone Number">
                            <label for="floatingPhone">Phone Number</label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Write you message here" id="floatingTextarea2" name="comments"
                                style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Write your message here</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </section>
    </div>

    <!-- Contact Form Ends -->
@endsection
