@extends('layouts.app')
@section('content')
<style>
    html{
        scroll-behavior: smooth;
    }
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body{
        font-family: "Catamaran", sans-serif;
        background: white;
        color: #102a42;
        line-height: 1.5;
        font-size: 0.875rem;
    }
    a{
        text-decoration: none;
    }
    img{
        width: 100%;
        display: block;
    }
    .head{
        margin-bottom: 0.75rem;
        line-height: 1.25;
        font-size: 1.8rem;
        margin-left: 1.5rem

    }
    .header{
        min-height: 100vh;
        background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)) ,url("Pictures/main-available-jobs-pic.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        position: relative;
        /* animation */
        overflow-x: hidden;
        
    }
    .banner{
        text-align: center;
        position:absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    .banner h2{
        color: red;
        font-family: "Grand Hotel", cursive;
        animation: slideFromRight 5s ease-in-out;
    }
    .banner h1{
        color: white;
        margin-top: 1.25rem;
        margin-bottom: 2rem;
        animation: slideFromLeft 5s ease-in-out;
    }
    .btn{
        background:red;
        color: white;
        padding: 0.75rem 1rem;
        letter-spacing: 0.25rem;
        display: inline-block;
        font-weight: 700;
        transition: all 0.3s linear;
        font-size: 1rem;
        border: none;
        cursor: pointer;
        box-shadow: 0 1px 3px rgba(0,0,0,0.2); 
    }
    .btn:hover{
        color: red;
        background: lightslategrey
    }
    .banner-btn{
        outline: 0.125rem solid red;
        outline-offset: 0.25rem;
        font-size: 1.25rem;
        padding: 1rem 1.75rem;
    }
    .apply-btn{
        padding: 0.75rem 0.5rem;
        font-weight: 400;
        font-size: 0.7rem;
        text-align: center;
        position:absolute; 
        transform: translate(-50%, -50%);
        left: 50%;
        margin-bottom: 3rem;
    }
     .apply-btn-2{
        padding: 0.75rem 0.5rem;
        font-weight: 400;
        font-size: 0.7rem;
        text-align: center;
        position:absolute;
        transform: translate(-50%, -50%);
        margin-bottom: 3rem; 
    }
    .content-devider{
        height: 0.3rem;
        background: linear-gradient(to left, red, blue, red);
    }
    .mission{
        font-size: 1rem;
        color: grey;
        margin-top: 3rem;
        margin-bottom: 1.5rem;
        margin-left: 1.5rem;
    }
    .mission-text{
        margin: 0rem 1.5rem;
        font-size: 1.3rem;
        margin-left: 1.5rem;
        margin-bottom: 3rem;
    }
    .position{
        margin-left: 1.5rem;
        margin-bottom: 6rem;
    }
    .footer{
        background: #222;
        text-align: center;
        margin-top: 7rem;
    }
    .social-icon{
        color: white;
        font-size: 1.5rem;
        margin-right: 1rem;
        transition: all 0.3s linear;
        text-decoration: none;
    }
    .social-icon:hover{
        color: red;
    }
    .footer-text{
        margin-top: 1.25rem;
        text-transform: uppercase;
        color: white;
        font-weight: 400;
    }
    .company{
        color: red;
    }
    .section-center{
        padding: 3rem;
    }
    @media screen and (min-width: 800px) {
        .head{
            font-size: 2rem;
            line-height: 1;
        }
        body{
            font-size: 1rem;
        }
    }
    @keyframes slideFromRight {
        0% {
            transform: translateX(100px);
            opacity: 0;
        }
        50%{
            transform: translateX(-300px);
            opacity: 0.5;
        }
        75%{
            transform: translateX(100px);
            opacity: 0.75;
        }
        100%{
            transform: translateX(0px);
            opacity: 1;
        }
    }
    @keyframes slideFromLeft {
        0% {
            transform: translateX(-1000px);
            opacity: 0;
        }
        50%{
            transform: translateX(300px);
            opacity: 0.5;
        }
        75%{
            transform: translateX(-100px);
            opacity: 0.75;
        }
        100%{
            transform: translateX(0px);
            opacity: 1;
        }
    }
    .learn{
        margin-top: 4rem;
        height: 3rem;
        background: green;
        width: 50rem;
    }
    

</style>



<h2 class="head">Career at Apollon</h2>
{{-- Start of header --}}
<header class="header">
 <div class="container">
     <div class="banner">
         <h2>What is your next destination?</h2>
         <h1>START A NEW CAREER <br>
         WITH US</h1>
         <a href="#jobs" class="btn banner-btn">Explore</a>
    </div>
 </div>
</header>
{{-- end of header --}}
<div class="content-devider"></div>
{{-- Our mission section --}}
{{-- Add image side to mission part --}}
<h3 class="mission">Our Mission</h3>
<p class="mission-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias mollitia necessitatibus vel voluptas odit culpa dolore harum illum sequi at porro officia ipsam ipsa aliquam labore laboriosam quia cum omnis cupiditate recusandae numquam, eligendi quis corrupti laborum? Velit quis dicta architecto laborum quasi, sunt delectus odio atque magnam at, nihil ea facilis praesentium, doloribus animi assumenda repudiandae exercitationem suscipit nulla? Velit placeat accusamus cupiditate laboriosam molestiae, asperiores dignissimos. Architecto, odit.</p>
{{-- End of Our mission section --}}

{{-- Add some more sections here with more info and maybe pics like airbnb--}}

{{-- Start of Opportunities section --}}
<div class="opportunities">
<h3 class="mission">Opportunities</h3>
<h1 class="position" id="jobs">Take a look at our job positions below</h1>
</div>


<h2 class="head">Marketing manager</h2>
<button class="btn banner-btn apply-btn">Learn more about this job</button>
<div class="learn" id="myDIV-1">
    <h2>This is job 1</h2>
    </div>
<a href="job_application" id="apply1" class="btn banner-btn apply-btn">Apply</a>


{{-- <h2 class="head">Job position here</h2>
<button href="" class="btn banner-btn apply-btn">Learn more about this job</button>
<div class="learn" id="myDIV-2">
    <h2>This is job 2</h2>
</div>
<h2 class="head">Job position here</h2>
<button href="" class="btn banner-btn apply-btn">Learn more about this job</button>
<div class="learn" id="myDIV-3">
    <h2>This is job 1</h2>
</div>
<h2 class="head">Job position here</h2>
<button href="" class="btn banner-btn apply-btn">Learn more about this job</button>
<div class="learn" id="myDIV-4">
    <h2>This is job 1</h2>
</div> --}}

<script>
    // function myFunction(){
    //     var x = document.getElementById("myDIV");
    //     if(x.style.display === "none"){
    //         x.style.display = "block";
    //     }else{
    //         x.style.display = "none";
    //     }
    // }
</script>




<footer class="footer">
    <div class="section-center">
        <div class="social-icons">
            <a href="#" class="social-icon"><i class="fab fa-facebook"></i> Facebook</a>  {{-- Here should be icon of facebook instead of word and for that you need some settings --}}
             <a href="#" class="social-icon"><i class="fab fa-instagram"></i> Instagram</a>  {{-- Here should be icon of instagram instead of word and for that you need some settings --}}
              <a href="#" class="social-icon"><i class="fab fa-twitter"></i> Twitter</a>  {{-- Here should be icon of twitter instead of word and for that you need some settings --}}
        </div>
        <h4 class="footer-text">&copy; <span>2020</span> <span class="company"> Apollon Restaurant </span>All rights reserved</h4>
    </div>
</footer>
@endsection