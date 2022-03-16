@extends('front.layouts.master')
@section('title',$category->name.'Kategorisi |'.count($articles).' yazı bulundu')
@section('content')
<!-- Main Content-->



<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            @include('front.widgets.articleList')
        </div>
        @include('front.widgets.categoryWidget')
    </div>
</div>

@endsection
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="front/js/scripts.js"></script>
</body>
</html>

