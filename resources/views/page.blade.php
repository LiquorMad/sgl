@extends('master')

@inject('layoutHelper', 'JeroenNoten\LaravelAdminLte\Helpers\LayoutHelper')

@section('adminlte_css')
    @stack('css')
    @yield('css')
@stop

@section('classes_body', $layoutHelper->makeBodyClasses())

@section('body_data', $layoutHelper->makeBodyData())

@section('body')
    <div class="wrapper">

        {{-- Preloader Animation --}}
        @if(false)
            @include('partials.common.preloader')
        @endif

        {{-- Top Navbar --}}
        @if($layoutHelper->isLayoutTopnavEnabled())
            @include('partials.navbar.navbar-layout-topnav')
        @else
            @include('partials.navbar.navbar')
        @endif

        {{-- Left Main Sidebar --}}
        @if(true)
            @include('partials.sidebar.left-sidebar')
        @endif

        {{-- Content Wrapper --}}
        @empty($iFrameEnabled)
            @include('partials.cwrapper.cwrapper-default')
        @else
            @include('partials.cwrapper.cwrapper-iframe')
        @endempty

        {{-- Footer --}}
        @if(true)
            @include('partials.footer.footer')
        @endif

        {{-- Right Control Sidebar --}}
        @if(false)
            @include('partials.sidebar.right-sidebar')
        @endif

    </div>
@stop

@section('adminlte_js')
    @stack('js')
    @yield('js')
@stop
