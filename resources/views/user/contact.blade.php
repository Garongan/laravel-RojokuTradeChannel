@extends('layout/main')
@section('content')

    {{-- inner banner --}}
    @include('components.inner_banner')
    {{-- /inner banner --}}

    <!-- contact section -->
    <section class="w3l-contact-11 py-5" id="contact">
        <div class="container py-lg-5 py-md-4 py-2">
            <h3 class="title-style text-center mb-lg-5 mb-4">Contact <span>Us</span></h3>
            <div class="row text-center mb-5 pb-lg-5 pb-sm-4">
                <div class="col-lg-3 col-sm-6 contact-info">
                    <i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="44.45" viewBox="0 0 576 512"><path fill="currentColor" d="M408 120c0 54.6-73.1 151.9-105.2 192c-7.7 9.6-22 9.6-29.6 0C241.1 271.9 168 174.6 168 120C168 53.7 221.7 0 288 0s120 53.7 120 120zm8 80.4c3.5-6.9 6.7-13.8 9.6-20.6c.5-1.2 1-2.5 1.5-3.7l116-46.4c15.8-6.3 32.9 5.3 32.9 22.3v270.8c0 9.8-6 18.6-15.1 22.3L416 503V200.4zm-278.4-62.1c2.4 14.1 7.2 28.3 12.8 41.5c2.9 6.8 6.1 13.7 9.6 20.6v251.4L32.9 502.7C17.1 509 0 497.4 0 480.4V209.6c0-9.8 6-18.6 15.1-22.3l122.6-49zM327.8 332c13.9-17.4 35.7-45.7 56.2-77v249.3l-192-54.9V255c20.5 31.3 42.3 59.6 56.2 77c20.5 25.6 59.1 25.6 79.6 0zM288 152a40 40 0 1 0 0-80a40 40 0 1 0 0 80z"/></svg>
                    </i>
                    <h4>Location</h4>
                    <p>London, 235 Terry, 10001</p>
                </div>
                <div class="col-lg-3 col-sm-6 contact-info mt-md-0 mt-4">
                    <i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 512 512"><path fill="currentColor" d="M256 48C141.1 48 48 141.1 48 256v40c0 13.3-10.7 24-24 24S0 309.3 0 296v-40C0 114.6 114.6 0 256 0s256 114.6 256 256v144.1c0 48.6-39.4 88-88.1 88l-110.3-.1c-8.3 14.3-23.8 24-41.6 24h-32c-26.5 0-48-21.5-48-48s21.5-48 48-48h32c17.8 0 33.3 9.7 41.6 24l110.4.1c22.1 0 40-17.9 40-40V256c0-114.9-93.1-208-208-208zM144 208h16c17.7 0 32 14.3 32 32v112c0 17.7-14.3 32-32 32h-16c-35.3 0-64-28.7-64-64v-48c0-35.3 28.7-64 64-64zm224 0c35.3 0 64 28.7 64 64v48c0 35.3-28.7 64-64 64h-16c-17.7 0-32-14.3-32-32V240c0-17.7 14.3-32 32-32h16z"/></svg>
                    </i>
                    <h4>Phone</h4>
                    <p><a href="tel:+44 987 654 321">+44 123 984 439</a></p>
                </div>
                <div class="col-lg-3 col-sm-6 contact-info mt-lg-0 mt-4">
                    <i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 48 48"><g fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="4"><path d="M44 24v16.818C44 42.023 43.105 43 42 43H6c-1.105 0-2-.977-2-2.182V24l20 13l20-13Z"/><path stroke-linecap="round" d="m4 23.784l10-6.892m30 6.892l-10-6.892"/><path d="M34 5H14v24.415a2 2 0 0 0 .91 1.677l8 5.2a2 2 0 0 0 2.18 0l8-5.2a2 2 0 0 0 .91-1.677V5Z"/><path stroke-linecap="round" d="M20 13h4m-4 6h8"/></g></svg>
                    </i>
                    <h4>Email</h4>
                    <p><a href="mailto:mail@example.com" class="email">mail@example.com</a></p>
                </div>
                <div class="col-lg-3 col-sm-6 contact-info mt-lg-0 mt-4">
                    <i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="40" viewBox="0 0 640 512"><path fill="currentColor" d="M496 224c-79.6 0-144 64.4-144 144s64.4 144 144 144s144-64.4 144-144s-64.4-144-144-144zm64 150.3c0 5.3-4.4 9.7-9.7 9.7h-60.6c-5.3 0-9.7-4.4-9.7-9.7v-76.6c0-5.3 4.4-9.7 9.7-9.7h12.6c5.3 0 9.7 4.4 9.7 9.7V352h38.3c5.3 0 9.7 4.4 9.7 9.7v12.6zM320 368c0-27.8 6.7-54.1 18.2-77.5c-8-1.5-16.2-2.5-24.6-2.5h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h347.1c-45.3-31.9-75.1-84.5-75.1-144zm-96-112c70.7 0 128-57.3 128-128S294.7 0 224 0S96 57.3 96 128s57.3 128 128 128z"/></svg>
                    </i>
                    <h4>Working Hours</h4>
                    <p>Mon-Sat: 9hrs & Sun: Closed</p>
                </div>
            </div>
            <div class="form-inner-cont mx-auto" style="max-width:800px">
                <form action="https://sendmail.w3layouts.com/submitForm" method="post" class="signin-form">
                    <div class="row align-form-map">
                        <div class="col-sm-6 form-input">
                            <input type="text" name="w3lName" id="w3lName" placeholder="Name" />
                        </div>
                        <div class="col-sm-6 form-input">
                            <input type="email" name="w3lSender" id="w3lSender" placeholder="Email" required="" />
                        </div>
                        <div class="col-sm-6 form-input">
                            <input type="text" name="w3lSubect" placeholder="Subject" class="contact-input">
                        </div>
                        <div class="col-sm-6 form-input">
                            <input type="number" name="w3lPhone" placeholder="Phone Number" class="contact-input">
                        </div>
                    </div>
                    <div class="form-input">
                        <textarea placeholder="Message" name="w3lMessage" id="w3lMessage" required=""></textarea>
                    </div>
                    <div class="submit text-right">
                        <button type="submit" class="btn btn-style">Submit
                            Message</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- map -->
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2spl!4v1562654563739!5m2!1sen!2spl"
            width="100%" height="400" frameborder="0" style="border: 0px;" allowfullscreen=""></iframe>
    </div>
    <!-- //contact section -->

@endsection