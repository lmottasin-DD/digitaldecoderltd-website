<!doctype html>
<html lang="en">

<!-- Mirrored from kero.architectui.com/demo/kero-html-sidebar-pro/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Dec 2021 09:19:20 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->



<!--head part goes here-->
@include('backend.layouts.partial.head')

<!--head part end here-->

<body>


<!--login form starts here-->
<div class="app-container app-theme-white body-tabs-shadow">
    <div class="app-container">
        <div class="h-100 bg-plum-plate bg-animation">
            <div class="d-flex h-100 justify-content-center align-items-center">
                <div class="mx-auto app-login-box col-md-8">
                    <div class="app-logo-inverse mx-auto mb-3"></div>
                    <div class="modal-dialog w-100 mx-auto">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="h5 modal-title text-center">
                                    <h4 class="mt-2">
                                        <div>Digital Decoder Ltd.</div>
                                        <span>Please sign in to your account below.</span>
                                    </h4>
<!--                                    testing purporse-->
                                    {{--@if($errors->any())
                                        <p>{{ $errors->first() }}</p>
                                    @endif--}}
                                </div>
                                <form method="POST" action="{{ route('login') }}" >
                                    @csrf
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <div class="position-relative form-group">
                                                <input name="email" id="exampleEmail" placeholder="Email here..." type="email" class="form-control" value="{{ old('email') }}">
                                                @if( $errors->has('email'))
                                                    <p class="alert alert-danger">{{ $errors->first('email') }} <button class="close" data-dismiss="alert">&times;</button></p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="position-relative form-group">
                                                <input name="password" id="examplePassword" placeholder="Password here..." type="password" class="form-control" >


                                                @if( $errors->has('password'))
                                                    <p class="alert alert-danger">{{ $errors->first('password') }} <button class="close" data-dismiss="alert">&times;</button></p>
                                                @endif




                                            </div>
                                        </div>
                                    </div>
                                    <div class="position-relative form-check"><input name="check" id="exampleCheck" type="checkbox" class="form-check-input"><label for="exampleCheck" class="form-check-label">Keep me logged in</label></div>
                                   <!-- <input class="btn btn-primary btn-lg" type="submit" value="Login to Dashboard">-->
                                    <div class="modal-footer clearfix">
                                        <div class="float-left"><a href="javascript:void(0);" class="btn-lg btn btn-link">Recover Password</a></div>
                                        <div class="float-right">
                                            <button class="btn btn-primary btn-lg" type="submit">Login to Dashboard</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="divider"></div>
                                <h6 class="mb-0">No account? <a href="javascript:void(0);" class="text-primary">Sign up now</a></h6>
                            </div>
                <!--<div class="modal-footer clearfix">
                                <div class="float-left"><a href="javascript:void(0);" class="btn-lg btn btn-link">Recover Password</a></div>
                                <div class="float-right">
                                    <button class="btn btn-primary btn-lg">Login to Dashboard</button>
                                </div>
                            </div>-->
                        </div>
                    </div>
                    <div class="text-center text-white opacity-8 mt-3">Copyright © Digital Decoder Ltd. 2019</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--login form end here-->



<!--script part goes here-->
@include('backend.layouts.partial.scripts')
<!--script part end here-->


</body>

<!-- Mirrored from kero.architectui.com/demo/kero-html-sidebar-pro/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Dec 2021 09:19:24 GMT -->
</html>
