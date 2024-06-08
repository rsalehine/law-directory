@extends('layouts.public.public')

@section('title', 'Contact Us')

@section('content')
    <main>
        <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="https://getbootstrap.com/docs/5.2/examples/heroes/bootstrap-themes.png"
                        class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold lh-1 mb-3">Responsive left-aligned hero with image</h1>
                    <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s
                        most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid
                        system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
                        <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
                    </div>
                </div>
            </div>

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
                                <div class="d-grid">
                                    <button class="btn btn-primary btn-lg" id="submitButton" type="submit">
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
            <!-- Contact Form Ends -->
        </div>
    </main>
@endsection
