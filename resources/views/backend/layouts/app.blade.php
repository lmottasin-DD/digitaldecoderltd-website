<!doctype html>
<html lang="en">

<!-- Mirrored from kero.architectui.com/demo/kero-html-sidebar-pro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Dec 2021 09:19:17 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    @include('backend.layouts.partial.head')
</head>
<body>





    {{-- sidebar starts--}}
       @include('backend.layouts.sidebar')


        {{--sidebar ends--}}








     @section('main-content')
         @show()

    {{--main part ends--}}





            {{--footer starts--}}
  @include('backend.layouts.footer')
    {{--footer ends here--}}







        {{--theme settings starts--}}

    @include('backend.layouts.partial.theme_settings')
{{--    theme settings ends--}}



@include('backend.layouts.partial.scripts')
</body>

<!-- Mirrored from kero.architectui.com/demo/kero-html-sidebar-pro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Dec 2021 09:19:17 GMT -->
</html>
