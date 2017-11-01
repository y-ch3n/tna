@extends('layouts.master')

@section('content')
<div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <h4>
                        Categories
                    </h4>
                </li>
                <li>
                    <a href="#electrical">Electrical</a>
                </li>
                <li>
                    <a href="#lighting">Lighting</a>
                </li>
                <li>
                    <a href="#hardware">Hardware</a>
                </li>
                <li>
                    <a href="#">Events</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <div class="container-fluid toggle-icon">
            <a href="#menu-toggle" id="menu-toggle"><i class="fa fa-navicon fa-lg"></i></a>
            <hr>
        </div>

        <!-- Page Content -->
        <div id="electrical" class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Electrical</h1>
                        <p>This page is showing electrical products</p>                        
                    </div>
                </div>
            </div>
        </div>
        <div id="lighting" class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Lighting</h1>
                        <p>This page is showing lighting products</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="hardware" class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Hardware</h1>
                        <p>This page is showing hardware products</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    
@endsection