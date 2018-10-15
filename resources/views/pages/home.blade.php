@extends('layouts.landing')
@section('content')
    <div class="container">
        <div id="myCarousel" class="carousel bgDark slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide"
                         src="https://static1.squarespace.com/static/54064a32e4b02005532012ab/5a9f08a2085229be72afd9e3/5a9f4014f9619a03dd31708c/1522122331710/0656.jpg?format=1500w"
                         alt="First slide">
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h1>CAPTURING YOUR LOVE NO MATTER THE LOCATION</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="second-slide"
                         src="http://www.hishandsphotographs.com/wp-content/themes/flexsitez/flexthemes/hishands1/images/slideshow1/His_Hands_Photographs_HeaderImages_0006.jpg"
                         alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h1>CREATING YOUR MOMENTS</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="third-slide"
                         src="https://static1.squarespace.com/static/54c92832e4b040b062ecda71/t/58a366c086e6c075a70a744b/1487103703994/Mother-and-daughter-photo-newborn-baby-photography-toronto"
                         alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption text-right">
                            <h1>BRINGING SMILES THAT TAKE YOU MILES</h1>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="container">
        <h1>Features and Pricing</h1>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="bgDark">
                <tr class="font-weight-bold text-black-50">
                    <th scope="col"></th>
                    <th scope="col"><h4>Weddings</h4></th>
                    <th scope="col"><h4>Baby</h4></th>
                    <th scope="col"><h4>Model</h4></th>
                    <th scope="col"><h4>Official Events</h4></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th class="bgDark font-weight-bold text-black-50"  scope="row"><h4>Registration</h4></th>
                    <td class="font-weight-bold">Optional</td>
                    <td class="font-weight-bold">Optional</td>
                    <td class="font-weight-bold">Yes</td>
                    <td class="font-weight-bold">Yes</td>
                </tr>
                <tr>
                    <th class="bgDark font-weight-bold text-black-50" scope="row"><h4>General Scheduling</h4></th>
                    <td class="font-weight-bold">Customer demand</td>
                    <td class="font-weight-bold">Customer demand</td>
                    <td class="font-weight-bold">Evenings after 6</td>
                    <td class="font-weight-bold">Customer demand</td>
                </tr>
                <tr>
                    <th class="bgDark font-weight-bold text-black-50" scope="row"><h4>Internships</h4></th>
                    <td class="font-weight-bold">Yes</td>
                    <td class="font-weight-bold">Yes</td>
                    <td class="font-weight-bold">Yes</td>
                    <td class="font-weight-bold">Yes</td>
                </tr>
                <tr>
                    <th class="bgDark font-weight-bold text-black-50"  scope="row"><h4>Billing</h4></th>
                    <td class="font-weight-bold">Online</td>
                    <td class="font-weight-bold">Online</td>
                    <td class="font-weight-bold">TBD</td>
                    <td class="font-weight-bold">Yes</td>
                </tr>
                <tr>
                    <th class="bgDark font-weight-bold text-black-50" scope="row"><h4>Price</h4></th>
                    <td class="font-weight-bold">$850.00</td>
                    <td class="font-weight-bold">$750.00</td>
                    <td class="font-weight-bold">$950.00</td>
                    <td class="font-weight-bold">1250.00</td>
                </tr>
                </tbody>
            </table>
        </div>

    </div>
@stop