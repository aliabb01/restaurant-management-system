@extends('layouts.app')

@section('content')

<style>
    /*! * Start Bootstrap - Simple Sidebar (https://startbootstrap.com/templates/simple-sidebar) * Copyright 2013-2020 Start Bootstrap * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-simple-sidebar/blob/master/LICENSE) */
    #wrapper {
        overflow-x: hidden;
    }

    #sidebar-wrapper {
        min-height: 100vh;
        margin-left: -15rem;
        -webkit-transition: margin .25s ease-out;
        -moz-transition: margin .25s ease-out;
        -o-transition: margin .25s ease-out;
        transition: margin .25s ease-out;
    }

    #sidebar-wrapper .sidebar-heading {
        padding: 0.875rem 1.25rem;
        font-size: 1.2rem;
    }

    #sidebar-wrapper .list-group {
        width: 15rem;
    }

    #page-content-wrapper {
        min-width: 100vw;
    }

    #wrapper.toggled #sidebar-wrapper {
        margin-left: 0;
    }

    @media (min-width: 768px) {
        #sidebar-wrapper {
            margin-left: 0;
        }

        #page-content-wrapper {
            min-width: 0;
            width: 100%;
        }

        #wrapper.toggled #sidebar-wrapper {
            margin-left: -15rem;
        }
    }
</style>

<div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="sidebar-heading">Start Bootstrap </div>
        <div class="list-group list-group-flush"> 
            <a href="#"
                class="list-group-item list-group-item-action bg-light">Dashboard</a> 
                <a href="dish.index" class="list-group-item list-group-item-action bg-light"> Dishes</a> 
                <a href="delete_reviews" class="list-group-item list-group-item-action bg-light">Delete review</a> 
                <a href="/" class="list-group-item list-group-item-action bg-light">View site</a> <a href="/"
                class="list-group-item list-group-item-action bg-light">Status</a> 
            </div>
    </div> <!-- /#sidebar-wrapper -->
    <!-- Page Content -->
    <div id="page-content-wrapper">
        
<table>
    <tr>
        <td>dish nam</td>
    </tr>
</table>
    </div> <!-- /#page-content-wrapper -->
</div> <!-- /#wrapper -->
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> <!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) { e.preventDefault(); $("#wrapper").toggleClass("toggled"); }); 
</script>
@endsection