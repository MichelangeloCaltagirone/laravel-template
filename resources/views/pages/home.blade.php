@extends("layouts.app")

@section("page-title", "Homepage")


@section("main-content")

    {{-- concatenazione dei file 'partials' --}}
    @include("partials.focusProduct")
    @include("partials.mainProduct")
    @include("partials.distributors")
    @include("partials.remainder")

@endsection

