@extends('layouts.other')
@section('content')
{{-- This is Report a problem page --}}

{{-- Report Problem --}}
<h1 class="first">Please fill in the form and report your problem to us.</h1>
<section class="contact">
    <div class="section-center clearfix">
        <article class="contact-info">
            <div class="contact-item">
                <h4 class="contact-title">
                    <span class="contact-icon">
                        <i class="fas fa-location-arrow"></i>
                    </span>
                    Address
                </h4>
                <h4 class="report-text">
                    352 N Fairfax Ave <br>
                    Kaunas, CA 90048
                </h4>
            </div>
            <div class="contact-item">
                <h4 class="contact-title">
                    <span class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </span>
                    Email
                </h4>
                <h4 class="report-text">
                    email@email.com
                </h4>
            </div>
            <div class="contact-item">
                <h4 class="contact-title">
                    <span class="contact-icon">
                        <i class="fas fa-phone"></i>
                    </span>
                    Telephone
                </h4>
                <h4 class="report-text">
                    +123 456 78
                </h4>
            </div>
        </article>
        <article class="report-form">
            <h3>Report a problem</h3>
            <form>
                <div class="form-group">
                    <input type="text" placeholder="Name" class="form-control" name="Name"/>
                    <input type="email" placeholder="Email" class="form-control" name="Email"/>
                    <textarea name="message" placeholder="Message" class="form-control" rows="8"></textarea>
                </div>
                <button type="submit" class="submit-btn btn">Submit Here</button>
            </form>
        </article>
    </div>
</section>

<footer class="footer">
    <div class="section-center">
        <div class="social-icons">
            <a href="#" class="social-icon"><i class="fab fa-facebook"></i>Facebook</a>  {{-- Here should be icon of facebook instead of word and for that you need some settings --}}
             <a href="#" class="social-icon"><i class="fab fa-instagram"></i>Instagram</a>  {{-- Here should be icon of instagram instead of word and for that you need some settings --}}
              <a href="#" class="social-icon"><i class="fab fa-twitter"></i>Twitter</a>  {{-- Here should be icon of twitter instead of word and for that you need some settings --}}
        </div>
        <h4 class="footer-text">&copy; <span>2020</span> <span class="company"> Apollon Restaurant </span>All rights reserved</h4>
    </div>
</footer>



<style>
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
    .contact{
        background: lightslategray;
    }
    .report-form, .contact-info{
        margin: 1rem 0;
    }
    .contact-item{
        margin-bottom: 1.75rem; 
    }
    .contact-title{
        color: red;
        font-weight: 400;
        font-size: 2rem
    }
    .report-form{
        background: white;
        border-radius: 0.5rem;
        text-align: center;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        transition: all 0.3s linear;
        max-width: 35rem;
    }
    .report-form:hover{
        box-shadow: box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    .report-form h3{
        padding-top: 1.25rem;
        color: lightslategray;
    }
    .form-group{
        padding: 1rem 1.5rem;
    }
    .form-control{
        display: block;
        width: 100%;
        padding: 0.75rem 1 rem;
        border: none;
        margin-bottom: 1.25rem;
        background: lightgrey;
        border-radius: 0.5rem;
        letter-spacing: 0.25rem;
    }
    .form-control::placeholder{
        font-family: "Catamaran" sans-serif;
        color: grey;
        letter-spacing: 0.25rem;
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
    .submit-btn{
        display: block;
        width: 100%;
        padding: 1rem;
        border-bottom-left-radius: 0.5rem;
        border-bottom-right-radius: 0.5rem;
    }
    .clearfix::after, .clearfix::before{
        content: "";
        clear: both;
        display: table;
    }
    .first{
        margin-top: 2rem;
        margin-bottom: 5rem;
    }
    .footer{
        background: #222;
        text-align: center;
        margin-top: 12rem;
    }
    .social-icon{
        color: white;
        font-size: 1.5rem;
        margin-right: 1rem;
        transition: all 0.3s linear;
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
     a{
        text-decoration: none;
    }
    .report-text{
        font-size: 1.5rem
    }
    @media screen and (min-width:992px){
        .report-form, .contact-info{
            float: left;
            width: 50%;
        }
    }
</style>
@endsection