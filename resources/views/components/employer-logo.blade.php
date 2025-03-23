@props(['employer', 'width'=>90])
@php
    $emp_is_from_web = false;
    if (strpos($employer->logo, 'http')===0) {
       $emp_is_from_web = true;
    }
@endphp
<img src=" {{ $emp_is_from_web ? $employer->logo :  asset('storage/'.$employer->logo)  }} " alt="" class="rounded-xl" width=" {{$width}} ">
<!--<p>{{ asset($employer->logo)  }}</p>-->


