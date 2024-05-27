@extends('main')
@section('custom-style')
    @if(Auth::user())
    <style>
        @media screen and (max-width:480px){
            .footer{
                height: 550px;
            }
            .content{
                padding-top: 220px;
            }
        }
    </style>
    @else
        <style>
            @media screen and (max-width:480px){
                .footer{
                    height: 550px;
                }
                .content{
                    padding-top: 120px;
                }
            }
        </style>
    @endif
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="com-md-12">
                @include('partials.navbar')
            </div>
        </div>
    </div>
    <div class="owl-carousel owl-carousel1">
        <div class="item"><img src="{{asset('images/banner1.jpg')}}" alt="Image 1" style="width: 100%; height: 600px;"></div>
        <div class="item"><img src="{{asset('images/banner2.jpg')}}" alt="Image 2" style="width: 100%; height: 600px;"></div>
        <div class="item"><img src="{{asset('images/banner3.jpg')}}" alt="Image 3" style="width: 100%; height: 600px;"></div>
        <div class="item"><img src="{{asset('images/banner4.jpg')}}" alt="Image 4" style="width: 100%; height: 600px;"></div>
    </div>
    <section class="members py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <h5 class="text-center" style="color: #2D3034; font-size: 36px;">Find Your Partner</h5>
                        <hr>
                    </div>
                    <div class="owl-carousel owl-carousel2">
                        @foreach($members as $member)
                            <div class="item">
                                <div class="card member-card">
                                @php
                                    $image = $member->images->first();
                                @endphp
                                    <img  src="{{asset($image?$image->path:'images/default_profile.jpg')}}" class="card-img-top" alt="Member 1">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$member->name}}</h5>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="text-left">
                                                <p class=""> <span class="font-weight-bold">Age: </span> {{$member->age}}</p>
                                                <p class=""> <span class="font-weight-bold">Gender: </span>   {{ucfirst($member->gender)}}</p>
                                            </div>
                                            <div class="text-right">
                                                <p>{{ucfirst($member->religion)}}</p>
                                            </div>
                                        </div>
                                        <a href="{{route('profile.details',['id'=>$member->id])}}" class="btn btn-primary">More profile details</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="text-center mt-3">
                        <a href="{{route('all.members')}}" class="btn btn-outline-success">See All</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about  pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <h5 class="text-center" style="color: #2D3034; font-size: 36px;">About Us</h5>
                        <hr>
                    </div>
                    <p class="text-justify"> Welcome to Eternal Match Site, your trusted partner in finding true love and companionship. Our mission is to connect individuals seeking meaningful and lasting relationships through a secure and user-friendly platform. We believe in the beauty of love and the power of a shared life journey. At Eternal Match Site, we are dedicated to helping you find your perfect match, offering personalized matchmaking services that cater to your unique preferences and values. Our platform is designed to facilitate genuine connections, allowing you to meet like-minded individuals who share your goals and aspirations.</p>

                    <p class="text-justify">With a diverse community of members from various backgrounds, our site provides an inclusive environment where love can flourish. We understand that each individual’s journey to finding love is unique, which is why our advanced matching algorithms are tailored to consider your specific preferences and criteria. Our commitment to privacy and security ensures that you can navigate your search with confidence, knowing that your personal information is protected. At Eternal Match Site, we believe in fostering meaningful relationships that can lead to a lifetime of happiness and fulfillment.</p>

                    <p class="text-justify">Join us at Eternal Match Site and embark on the path to a lifelong partnership filled with love, respect, and happiness. Our dedicated team is here to support you every step of the way, making your search for eternal love a joyous and fulfilling experience. Whether you are seeking companionship, romance, or a lifelong partner, Eternal Match Site is here to help you find the connection you’ve been dreaming of. Experience the difference with our trusted and reliable matchmaking services, and let us guide you on your journey to finding true and lasting love. </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Add more slides as needed -->
    <div class="container-fluid pricing-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card pricing-card shadow">
                        <div class="card-body">
                            <h5 class="card-title">Basic</h5>
                            <p class="card-text">৳. 00.00</p>
                            <p class="card-text text-success">Online Service</p>
                            <ul>
                                <li>Express Interests: 4 Times</li>
                                <li>Direct Messages 30 Times</li>
                                <li>Photo Gallery 4 Images</li>
                                <li>Duration 18 Days</li>
                                <!-- Add more features as needed -->
                            </ul>
                            <a href="/example1" class="btn btn-primary">Get This Package</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card pricing-card shadow">
                        <div class="card-body">
                            <h5 class="card-title">Pro</h5>
                            <p class="card-text">৳. 5000.00</p>
                            <p class="card-text text-success">Online Service</p>
                            <ul>
                                <li>Express Interests: 40 Times</li>
                                <li>Direct Messages 30 Times</li>
                                <li>Photo Gallery 4 Images</li>
                                <li>Duration 36 Days</li>
                                <!-- Add more features as needed -->
                            </ul>
                            <a href="example2" class="btn btn-primary">Get This Package</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card pricing-card shadow">
                        <div class="card-body">
                            <h5 class="card-title">Premium</h5>
                            <p class="card-text">৳. 15000.00</p>
                            <p class="card-text text-success">Online & Offline Service</p>

                            <ul>
                                <li>Express Interests: 400 Times</li>
                                <li>Direct Messages 300 Times</li>
                                <li>Photo Gallery 4 Images</li>
                                <li>Duration 180 Days</li>
                                <!-- Add more features as needed -->
                            </ul>
                            <a href="#" class="btn btn-primary">Get This Package</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('custom-scripts')
    <script>
        $(document).ready(function(){
            $(".owl-carousel1").owlCarousel({
                loop:true,
                margin:10,
                autoplay:true, // Add autoplay option
                autoplayTimeout:5000,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:1
                    },
                    1000:{
                        items:1
                    }
                }
            });

            $(".owl-carousel2").owlCarousel({
                loop:true,
                margin:10,
                autoplay:true, // Add autoplay option
                autoplayTimeout:5000,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:2
                    },
                    1000:{
                        items:4
                    }
                }
            });
        });
    </script>
@endsection
