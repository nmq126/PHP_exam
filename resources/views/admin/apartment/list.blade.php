@extends('admin.layout.master')
@section('title', 'Apartment List | Admin')
@section('breadcrumb')
    <div class="breadcome-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcome-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcome-heading">
                                    <form role="search" class="sr-input-func">
                                        @csrf
                                        <input type="text" placeholder="Search..." class="search-int form-control">
                                        <a href="#"><i class="fa fa-search"></i></a>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <ul class="breadcome-menu">
                                    <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">List</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('style')
    <!-- datapicker CSS
      ============================================ -->
    <link rel="stylesheet" href="/css/datapicker/datepicker3.css">
    <link rel="stylesheet" href="/css/summernote/summernote.css">

@endsection
@section('content')
    <div class="contacts-area mg-b-15">
        <div class="container-fluid">
            @foreach($list as $data)
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="student-inner-std res-mg-b-30">
                        <div class="">
                            <img src="{{ $data['thumbnail'] }}" alt=""/>
                        </div>
                        <div class="student-dtl">
                            <h2>{{ $data['name'] }}</h2>
                            <p class="dp">Address: {{ $data['address'] }}</p>
                            <p class="dp-ag"><b>Price (m/m2):</b> {{ $data['price'] }}</p>
                            <p class="dp">Status: {{ $data['status'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="col-12 col-md-4"></div>
            <div class="col-12 col-md-8">
                @include('pagination.default', ['paginator' => $list])
            </div>
        </div>
    </div>
@endsection
@section('page-script')
    <!-- datapicker JS
		============================================ -->
    <script src="/js/datapicker/bootstrap-datepicker.js"></script>
    <script src="/js/datapicker/datepicker-active.js"></script>
    <!-- summernote JS
   ============================================ -->
    <script src="/js/summernote/summernote.min.js"></script>
    <script src="/js/summernote/summernote-active.js"></script>
    <script src="https://widget.cloudinary.com/v2.0/global/all.js" type="text/javascript"></script>
    <script type="text/javascript">
        var myWidget = cloudinary.createUploadWidget(
            {
                cloudName: 'nmq126',
                uploadPreset: 'jkyvknsj'
            },
            function (error, result) {
                if (!error && result && result.event === "success") {
                    console.log('Done! Here is the image info: ', result.info.secure_url);
                    document.forms['apartment-form']['thumbnail'].value += result.info.secure_url + ',';
                    var imgTag = document.getElementById('preview-img');
                    imgTag.innerHTML += `<img style="width: 150px" src="${result.info.secure_url}" alt="" class="img-thumbnail mr-2">`;
                }
            }
        )
        document.getElementById("thumbnail_upload_widget").addEventListener("click", function () {
            myWidget.open();
        }, false);
    </script>
@endsection
