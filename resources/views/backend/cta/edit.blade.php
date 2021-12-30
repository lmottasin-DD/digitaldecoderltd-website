
@extends('backend.layouts.app')
@section('main-content')

    {{--main starts here--}}

    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="header-mobile-wrapper">
                <div class="app-header__logo">
                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="KeroUI Admin Template" class="logo-src"></a>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-sidebar-nav">
<span class="hamburger-box">
<span class="hamburger-inner"></span>
</span>
                    </button>
                    <div class="app-header__menu">
<span>
<button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
<span class="btn-icon-wrapper">
<i class="fa fa-ellipsis-v fa-w-6"></i>
</span>
</button>
</span>
                    </div>
                </div>
            </div>




            {{--app header starts--}}
            @include('backend.layouts.header')
            {{--app header ends--}}











            <div class="app-inner-layout app-inner-layout-page">
                <div class="app-inner-bar">
                    <div class="inner-bar-left">
                        <ul class="nav">
                            <li class="nav-item">
                                <a href="#" class="nav-link show-menu-btn">
                                    <i class="fa fa-align-left mr-2"></i>
                                    <span class="hide-text-md">Show page menu</span>
                                </a>
                                <a href="#" class="nav-link close-menu-btn">
                                    <i class="fa fa-align-right mr-2"></i>
                                    <span class="hide-text-md">Close page menu</span>
                                </a>
                            </li>
                        </ul>
                    </div> <div class="inner-bar-center">
                        <ul class="nav">
                            <li class="nav-item">
                                <a role="tab" data-toggle="tab" class="nav-link active" href="#tab-content-0">
                                    <span>Overview</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a role="tab" data-toggle="tab" class="nav-link" href="#tab-content-1">
                                    <span>Audiences</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a role="tab" data-toggle="tab" class="nav-link" href="#tab-content-2">
                                    <span>Demographics</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link opacity-8">
                                    <span>More</span>
                                    <i class="fa fa-angle-down ml-1 opacity-6"></i>
                                </a>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                    <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-inbox"> </i><span>Menus</span></button>
                                    <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-file-empty"> </i><span>Settings</span></button>
                                    <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-book"> </i><span>Actions</span></button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <div class="p-3 text-right">
                                        <button class="mr-2 btn-shadow btn-sm btn btn-link">View Details</button>
                                        <button class="mr-2 btn-shadow btn-sm btn btn-primary">Action</button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="inner-bar-right">
                        <ul class="nav">
                            <li class="nav-item">
                                <a href="javascript:void(0);" class="nav-link open-right-drawer">
                                    <span class="hide-text-md">Show right drawer</span>
                                    <i class="fa fa-align-right ml-2"></i>
                                </a>
                            </li>
                        </ul>
                    </div> </div>
                <div class="app-inner-layout__wrapper">
                    <div class="app-inner-layout__sidebar">
                        <div class="app-layout__sidebar-inner dropdown-menu-rounded">
                            <div class="nav flex-column">
                                <div class="nav-item-header text-primary nav-item">
                                    Dashboards Examples
                                </div>
                                <a class="dropdown-item active" href="analytics-dashboard.html">Analytics</a>
                                <a class="dropdown-item" href="management-dashboard.html">Management</a>
                                <a class="dropdown-item" href="advertisement-dashboard.html">Advertisement</a>
                                <a class="dropdown-item" href="index.html">Helpdesk</a>
                                <a class="dropdown-item" href="monitoring-dashboard.html">Monitoring</a>
                                <a class="dropdown-item" href="crypto-dashboard.html">Cryptocurrency</a>
                                <a class="dropdown-item" href="pm-dashboard.html">Project Management</a>
                                <a class="dropdown-item" href="product-dashboard.html">Product</a>
                                <a class="dropdown-item" href="statistics-dashboard.html">Statistics</a>
                            </div> </div>
                    </div>











                    {{--main part starts--}}

                    <div class="app-inner-layout__content">

                        <!--                        tab content goes here-->
                        <div class="tab-content" >
                            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="main-card mb-3 card">
                                                <div class="card-body"><h5 class="card-title">Controls Types</h5>
                                                    @if($errors->any())
                                                        <p class="alert alert-danger">{{ $errors->first() }}</p>
                                                    @endif

                                                    @if( Session::has('success'))
                                                        <p class="alert alert-success">{{ Session::get('success') }} <button class="close" data-dismiss="alert">&times;</button></p>
                                                    @endif
                                                    @if( Session::has('slug_error'))
                                                        <p class="alert alert-success">{{ Session::get('slug_error') }} <button class="close" data-dismiss="alert">&times;</button></p>
                                                    @endif

                                                    <form method="POST" action="{{ route('cta.update',$single_data ->id) }}" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="position-relative form-group">
                                                            <label for="exampleEmail" class="">Header</label>
                                                            <input name="header"  placeholder="Enter your title here." type="text" class="form-control" value="{{ $single_data ->header  }}">
                                                        </div>

                                                        <div class="position-relative form-group">
                                                            <label for="exampleText" class="">Description</label>
                                                            <textarea placeholder="Enter description"class="form-control" name="description">{{ $single_data->description }}</textarea>
                                                            {{--                                                            <input type="text" placeholder="Enter description" name="title_description" id="exampleText" class="form-control" value="{{old('title_description') }}"></input>--}}
                                                        </div>




                                                        <input type="submit" class="mt-1 btn btn-primary" value="Submit">
                                                        <!--                                                        <button class="mt-1 btn btn-primary">Submit</button>-->
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--                        tab content ends here-->

                        <!--                        modal goes here-->
                        <div class="modal" tabindex="-1" role="dialog" id="insert_modal">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Modal body text goes here.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--                        model ends here-->

                    </div>
                </div>
            </div>
        </div>


@endsection
