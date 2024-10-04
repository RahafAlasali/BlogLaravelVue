<div class=" text-gray-900">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators" style="z-index: 99999">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner" style="padding-bottom: 50px">
            <div class="position-absolute w-100 h-100 top-0 right-0" style="z-index: 9; background-color: #000000a1">
            </div>
            <div class="carousel-item active">
                <img src="{{ asset('images/blog_2.jpg') }}" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/blog_1.jpg') }}" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/blog_2.jpg') }}" class="d-block w-100" alt="..." />
            </div>
        </div>
        <button class="carousel-control-prev d-none" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next d-none" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
