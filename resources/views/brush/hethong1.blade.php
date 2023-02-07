@extends('layout')
@section('danhmuc')

<nav class=" navbar navbar-expand-xl bg-primary navbar-light">
             
             <ul class="navbar-nav">
                              <li class="nav-item border text-center">
                              <a class="nav-link " href="{!! URL::route('index') !!}">
                                       <img src="{{ asset('/images/khuvuc.png')}}" width="40px" height="30px" style="margin-top:-10px; " ><br> Demo2
                                   </a>
                               </li>
                               <li class="nav-item border text-center">
                               <a class="nav-link" href="{!! URL::route('create') !!}">
                                       <img src="{{ asset('/images/nhasanxuat.png')}}" width="40px" height="30px" style="margin-top:-10px;" ><br>Demo2
                                   </a>
                               </li>
                               <li class="nav-item border text-center">
                               <a class="nav-link" href="#">
                                       <img src="{{ asset('/images/nhaphanphoi.png')}}" width="40px" height="30px" style="margin-top:-10px;" ><br> Demo2
                                   </a>
                               </li>
                               <li class="nav-item border text-center">
                               <a class="nav-link" href="#">
                                       <img src="{{ asset('/images/vattu.png')}}" width="40px" height="30px" style="margin-top:-10px;" ><br> Demo2
                                   </a>
                               </li>
</ul>
                   
           </nav>

           @stop