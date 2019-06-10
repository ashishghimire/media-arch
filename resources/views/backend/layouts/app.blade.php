<!doctype html>
<html class="no-js" lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', app_name())</title>

    <!-- Meta -->
    <meta name="description" content="@yield('meta_description', 'Default Description')">
    <meta name="author" content="@yield('meta_author', 'Anthony Rappa')">
    @yield('meta')
    <LINK href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
            <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>

    <!-- Styles -->
@yield('before-styles')

<!-- Check if the language is set to RTL, so apply the RTL layouts -->
    <!-- Otherwise apply the normal LTR layouts -->
@langRTL
{{ Html::style(getRtlCss(mix('css/backend.css'))) }}
@else
    {{ Html::style(mix('css/backend.css')) }}
@endif

@yield('after-styles')

<!-- Html5 Shim and Respond.js IE8 support of Html5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    {{ Html::script('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') }}
    {{ Html::script('https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js') }}
    <![endif]-->

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
	'csrfToken' => csrf_token(),
]); ?>
    </script>
</head>
<body class="skin-{{ config('backend.theme') }} {{ config('backend.layout') }}">
@include('includes.partials.logged-in-as')

<div class="wrapper">
@include('backend.includes.header')
@include('backend.includes.sidebar')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            @yield('page-header')

            {{-- Change to Breadcrumbs::render() if you want it to error to remind you to create the breadcrumbs for the given route --}}
            {!! Breadcrumbs::renderIfExists() !!}
        </section>

        <!-- Main content -->
        <section class="content">
            @include('includes.partials.messages')
            @yield('content')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    @include('backend.includes.footer')
</div><!-- ./wrapper -->

<!-- JavaScripts -->
@yield('before-scripts')
{{ Html::script(mix('js/backend.js')) }}
{{-- <script>
     $("[rel='tooltip']").tooltip();
     $('.titlecaption').hover(
             function () {
//                    $(this).find('.caption').slideDown(250); //.fadeIn(250)
                 $(this).find('.caption').slideDown(250); //.fadeIn(250)
             },
             function () {
//                    $(this).find('.caption').slideUp(250); //.fadeOut(205)
                 $(this).find('.caption').slideUp(250); //.fadeOut(205)
             }
     );
 </script>--}}

<!-- <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script> -->


    <script>
            $(document).ready(function() {
                CKEDITOR.replaceClass = 'ckeditor';
            });
      CKEDITOR.replace( 'editor1');
      CKEDITOR.add

      CKEDITOR.replace( 'editor2' );
      CKEDITOR.add
      CKEDITOR.replace( 'editor3' );
      CKEDITOR.add
</script>
@yield('after-scripts')
</body>
</html>