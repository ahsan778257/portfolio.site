@extends('front-end.homes.header')




@section('title')

   This is Md Ahsan Ali.I am a Web Developer

@endsection






<body>
<!-- This is navber section-->
<nav class="navber-container navbar navbar-expand-lg navbar-light text-white sticky-top">
    <a class="navbar-brand text-white" href="#">MD AHSAN ALI</a>
    <button type="button" class="navbar-toggler" data-bs-target="#navbarCollapse" data-bs-toggle="collapse">
        <span class="navbar-toggler-icon "></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about">ABOUT</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#service">SERVICE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact">CONTACT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#profile">PROFILE</a>
            </li><li class="nav-item">
                <a class="nav-link" href="#portfolio">PORTFOLIO</a>
            </li>
        </ul>
    </div>
    </div>
</nav>
<div class="container-fluid 100vh home">
    <img src="{{ asset('/') }}/front-end/images/ahsan%20formal%20p.jpg" class="rounded-circle img-fluid" style="height: 200px;width: 200px">
    <br>
    <br>
    <h1 class="i"> I'm Md Ahsan Ali</h1>
    <br>
    <h5 class="e"> Exprienced in Web Development</h5>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

</div>

<!-- This is about section -->
<div class="container-fluid  100vh about" id="about">
    <div class="row">

        <div class="col-sm-6">
            <img class="about-image" src="{{ asset('/') }}/front-end/images/md%20ahsan%20ali.jpg">
        </div>
        <div class="col-sm-6 about-des">
            <h1>Why hire me for
                your next project ?</h1>
            <br>
            <h5>

                Hello I am a Full Stack Web Developer over 2+ years of experience.
                I Have Worked On All Websites and That Exists In This Universe. I
                believe with my in-depth research prior to developing , designing
                and keeping the track of meeting deadlines , ensure quality service
                to all my valuable clients.</h5>
        </div>
    </div>
</div>

<!--This is progress bar section-->
<div class="container py-5">
    <div class="row">
        <div>
            <div class="col-md-2">
                <h5>HTML</h5>
            </div>
            <div class="col-md-10">
                <div class="progress">

                    <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">90%</div>
                </div>
            </div>
        </div>
        <div>
            <div class="col-md-2">
                <h5>CSS</h5>
            </div>
            <div class="col-md-10">
                <div class="progress">

                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">80%</div>
                </div>
            </div>
        </div>
        <div>
            <div class="col-md-2">
                <h5>BOOTSTRAP</h5>
            </div>
            <div class="col-md-10">
                <div class="progress">

                    <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">90%</div>
                </div>
            </div>
        </div>
        <div>
            <div class="col-md-2">
                <h5>JAVASCRIPTS</h5>
            </div>
            <div class="col-md-10">
                <div class="progress">

                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">80%</div>
                </div>
            </div>
        </div>
        <div>
            <div class="col-md-2">
                <h5>PHP</h5>
            </div>
            <div class="col-md-10">
                <div class="progress">

                    <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">85%</div>
                </div>
            </div>
        </div>
        <div>
            <div class="col-md-2">
                <h5>PHP LARAVEL</h5>
            </div>
            <div class="col-md-10">
                <div class="progress">

                    <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">75%</div>
                </div>
            </div>
        </div>



    </div>
</div>



<!--This is education section-->
<div class="container-fluid education p-2 m-auto">
    <div class="row m-lg-5 text-center">
        <h1 class="text-center text-light fw-bold ">EDUCATION, WORK & Skills</h1>
        <div class="col-md-5">
            <h4>Web Developer</h4>
            <p class="para">
                I currently work for Pixelwars creative studio.
                I create usable web interfaces,back end coding stuff and almost anything.
                But i love what i do.
            </p>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-5">
            <h4>E-Commerce</h4>
            <p class="para">
                I have an highly exprience in E-commerce site in laravel. I have ready to E-commerce site.Anyone E-commerce site needs please contact me.

            </p>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-5">
            <h4>Web Application</h4>
            <p class="para">I create usable web interfaces, front-end almost anything. But I love what I do. </p>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-5">
            <h4>Computer Science</h4>
            <P class="para">I am a Graduate of BBA. Then I am BITM institute in PHP, Laravel, and Vue.js learn.
                I create usable web interfaces, front-end and back-end coding, and almost anything. But I love what I do. .</P>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>

<!--This is service provider section -->
<div class="container" id="service">
    <div class="row">
        <div class="card-title fw-bold">Service Provided</div>
        <div class="col-md-4">
            <div class="card card1">

                <div class="text-center m-lg-auto fw-bolder">Website Design</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class=" card card1">
                <div class="text-center m-lg-auto fw-bolder">Web Development</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class=" card card1">
                <div class="text-center m-lg-auto fw-bolder">Custome Service</div>
            </div>
        </div>
    </div>
</div>
<!--This is recent work section-->
<div class="container-md" id="portfolio">
    <div class="row">
        <h2 class="text-center fw-bolder py-5 m-auto">Recent Works</h2>
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('/') }}/front-end/images/md%20ahsan%20ali.jpg" style="width: 350px; height: 300px">
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('/') }}/front-end/images/md%20ahsan%20ali.jpg" style="width: 350px; height: 300px">
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('/') }}/front-end/images/md%20ahsan%20ali.jpg" style="width: 350px; height: 300px">
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('/') }}/front-end/images/md%20ahsan%20ali.jpg" style="width: 350px; height: 300px">
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('/') }}/front-end/images/md%20ahsan%20ali.jpg" style="width: 350px; height: 300px">
            </div>
        </div>
    </div>
</div>


<!--this is footer section-->
<div class="container-fluid footer py-5" id="contact">
    <div class="row">
        <div class="col-md-5 mx-5 py-5">
            <h3>ADDRESS</h3>
            <H6>Chapainawabganj,Rajshahi,Bangladesh</H6>
            <br>
            <h3>CONTACT NO</h3>
            <H6> +88 01721-778257</H6>
            <br>
            <h3>EMAIL</h3>
            <h6>mdahsanallahsan@gmail.com</h6>
            <div class="circle-footer">
                <a href="https://web.facebook.com/mdahsanallahsan" target="blank"><i class="fab fa-facebook-f"></i> </a>

            </div>
            <div class="circle-footer">
                <a href="https:/facebook.com/mdahsanallahsan" target="blank"><i class="fas fa-at"></i>
            </div>
            <div class="circle-footer">
                <a href="https://github.com/mdahsanallahsan" target="blank"><i class="fab fa-github"></i>
            </div>
            <div class="circle-footer">
                <a href="https://twitter.com/mdahsanallahsan" target="blank"><i class="fab fa-twitter"></i> </a>

            </div>
            <div class="circle-footer">
                <a href="https://www.linkedin.com/in/mdahsanali/" target="blank"><i class="fab fa-linkedin"></i></a>
            </div>

        </div>
        <div class="col-md-5 py-6 ">

            <form action="{{ URL::to('/save') }}" method="post">

                {{ csrf_field() }}
               <h1>{{ Session::get('message') }}</h1>
                <div class="form-group row">
                    <label><h4>Your FirsName:</h4></label>
                    <input type="text" name="first_name" placeholder="first-name" class="form-control border-2 border-success">
                </div>
                <div class="form-group row">
                    <label><h4>Your LastName:</h4></label>
                    <input type="text" name="last_name" placeholder="last-name" class="form-control border-2 border-success">
                </div>
                <div class="form-group row">
                    <label><h4>Email Address:</h4></label>
                    <input type="email" name="email" placeholder="email-addresss" class="form-control border-2 border-success">
                </div>
                <div class="form-group row">
                    <label><h4>Message:</h4></label>
                    <textarea class="form-control border-2 border-success" rows="5" name="message"></textarea>
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" name="btn" class="btn">
                </div>
            </form>
        </div>
    </div>
</div>




</body>
</html>
