@include('partials.header')
@section('main')


    <div class="booking">
        <div class="wedding">

            <h1>Weddings</h1>
            <p>Create lasting and unforgettable memories of your DREAM WEDDING. Hotel Bedu's Hospitality provides
                the perfect setting, sublime cuisine and unparalleled service - an experience that is magical and stunning.
                Our
                Event Managers will work with you to make your dream wedding become a reality, a celebration to remember
                from
                this day forward. The Regal Ballroom and Crystal Hall at the Historic Lal Durbar are the most idyllic venues
                for
                wedding receptions</p>
            <li><a href="/"><i class="fa-solid fa-angles-right"></i> Read More</a></li>
        </div>
    </div>
    <div class="containerr">
        <div class="gallery">
            <figure class="gallery__item gallery__item--1">
                <img src="assets/wed.jpeg" alt="Gallery image 1" class="gallery__img">
            </figure>
            <figure class="gallery__item gallery__item--2" style="margin-right: 20px;">
                <img src="assets/wed2.jpeg" alt="Gallery image 2" class="gallery__img">
            </figure>

            <figure class="gallery__item gallery__item--3">
                <img src="assets/wed3.jpeg" alt="Gallery image 3" class="gallery__img">
            </figure>

            <figure class="gallery__item gallery__item--5">
                <img src="assets/wed4.jpeg" alt="Gallery image 5" class="gallery__img">
            </figure>
            <figure class="gallery__item gallery__item--6">
                <img src="assets/wed5.jpeg" alt="Gallery image 6" class="gallery__img">
            </figure>
        </div>
    </div>


    <button class="button button2">Wedding Booking</button>
    @include('partials.footer')
