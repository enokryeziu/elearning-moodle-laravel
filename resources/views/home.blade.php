@extends('layouts.template')
@section('content')
<div id="carouselExampleIndicators" class="carousel slide customSlide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{asset("images/slide.png")}}" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>Lorem ipsum</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, itaque repellendus. Exercitationem quidem sed consequuntur, numquam quisquam expedita, quos voluptatibus adipisci porro consequatur id reprehenderit similique natus ratione ab atque.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{asset("images/slide.png")}}" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>Lorem ipsum</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, itaque repellendus. Exercitationem quidem sed consequuntur, numquam quisquam expedita, quos voluptatibus adipisci porro consequatur id reprehenderit similique natus ratione ab atque.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{asset("images/slide.png")}}" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>Lorem ipsum</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, itaque repellendus. Exercitationem quidem sed consequuntur, numquam quisquam expedita, quos voluptatibus adipisci porro consequatur id reprehenderit similique natus ratione ab atque.</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div><br>
<div class="row">
    <h3 class="col-md-8"></h3>
    <h3 class="col-md-4"></h3>
</div>
<br>
<div class="row">
    <div class="col-md-8">
        <h3>Today Class's</h3>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Time & Date</th>
                    <th scope="col">Class Name</th>
                    <th scope="col">Lesson Plan</th>
                    <th scope="col">Assignments</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">9:15AM - 10:15AM</th>
                    <td>Data Structures Using C++</td>
                    <td>C++ Basic</td>
                    <td>No assigments due today</td>
                </tr>
                <tr>
                    <th scope="row">10:15AM - 11:15AM</th>
                    <td>Information Technology</td>
                    <td>Hypertext Markup Basic</td>
                    <td>No assigments due today</td>
                </tr>
                <tr>
                    <th scope="row">1:00PM - 2:00PM</th>
                    <td>Software Requirements Analysis</td>
                    <td>Introduction</td>
                    <td>No assigments due today</td>
                </tr>
                <tr>
                    <th scope="row">02:30PM - 3:30PM</th>
                    <td>Introduction to Databases</td>
                    <td>Introduction</td>
                    <td>No assigments due today</td>
                </tr>
                <tr>
                    <th scope="row">03:45PM - 4:45PM</th>
                    <td>Professional Practice in Industry</td>
                    <td>Introduction</td>
                    <td>No assigments due today</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="col-md-4 activityOveriew">
        <div class="aoHead">
            <h3>Activity & Overview</h3>  
        </div>
        <div class="aoBody">

        </div>
    </div>
</div><br>
<h3>Courses</h3><br>
<div class="row">
    <div class="col-md-3">
        <div class="card mb-3 shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect fill="#55595c" width="100%" height="100%"/><text fill="#eceeef" dy=".3em" x="50%" y="50%">Thumbnail</text></svg>
            <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-md btn-outline-secondary">Read More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card mb-3 shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect fill="#55595c" width="100%" height="100%"/><text fill="#eceeef" dy=".3em" x="50%" y="50%">Thumbnail</text></svg>
            <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-md btn-outline-secondary">Read More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card mb-3 shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect fill="#55595c" width="100%" height="100%"/><text fill="#eceeef" dy=".3em" x="50%" y="50%">Thumbnail</text></svg>
            <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-md btn-outline-secondary">Read More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card mb-3 shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect fill="#55595c" width="100%" height="100%"/><text fill="#eceeef" dy=".3em" x="50%" y="50%">Thumbnail</text></svg>
            <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-md btn-outline-secondary">Read More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection