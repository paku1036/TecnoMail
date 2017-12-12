@extends('layouts.app')
@section('css')
    <link href="{{ asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/iCheck/custom.css') }}" rel="stylesheet">
    @yield('scss')
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

@endsection
@section('content')
    <div id="wrapper" class="gray-bg">
        <div id="page">
            <div class="row">
                <div class="col-lg-3">
                    <div class="ibox float-e-margins">
                        <div class="ibox-content mailbox-content">
                            <div class="file-manager">
                                <a class="btn btn-block btn-primary compose-mail" href="{{route('compose')}}">
                                    {{__('Compose Mail')}}</a>
                                <div class="space-25"></div>
                                <h5>
                                    {{__('Folders')}}
                                </h5>
                                <ul class="folder-list m-b-md" style="padding: 0">
                                    @foreach($folders as $folder)
                                        <li><a href="{{route('mail',['folder'=>$folder->folderName->name])}}"> <i
                                                        class="fa fa-inbox "></i>
                                                {{__($folder->folderName->name)}}
                                                <span
                                                        class="label label-black pull-right"> No leidos: {{$folder->readed}}
                                                    / {{$folder->quantity}}</span>
                                            </a></li>
                                    @endforeach
                                </ul>
                                <!--h5>Categories</--h5>
                                <ul class="category-list" style="padding: 0">
                                    <li><a href="#"> <i class="fa fa-circle text-navy"></i> Work </a></li>
                                    <!--
                                    <li><a href="#"> <i class="fa fa-circle text-white"></i> Work </a></li>
                                    <li><a href="#"> <i class="fa fa-circle text-danger"></i> Documents</a></li>
                                    <li><a href="#"> <i class="fa fa-circle text-primary"></i> Social</a></li>
                                    <li><a href="#"> <i class="fa fa-circle text-info"></i> Advertising</a></li>
                                    <li><a href="#"> <i class="fa fa-circle text-warning"></i> Clients</a></li>

                                </ul>

                                <h5 class="tag-title">Labels</h5>
                                <ul class="tag-list" style="padding: 0">
                                    <li><a href="#"><i class="fa fa-tag"></i>Some Tag</a></li>
                                </ul>  -->
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                @yield('more')
            </div>
        </div>
    </div>
@endsection
@section('js')
    <!-- Custom and plugin javascript -->
    <!--script src="{{ asset('js/inspinia.js') }}"></script>
    <script src="{{ asset('js/plugins/pace/pace.min.js') }}"></script-->
    <script src="{{ asset('js/plugins/iCheck/icheck.min.js') }}"></script>
    @yield('jss')
@endsection
