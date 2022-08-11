@extends("base")

@section("page-title", "First blade page")

@section("content")
@testy
Click here to die
@slot("warning")
If you don't die, I will kill you
@endslot
@endtesty
@endsection

@push("header-scripts")
    <script src="header.js"></script>
    <link rel="stylesheet" href="{{mix("css/all.css")}}" />
@endpush

@push("footer-scripts")
    <script src="footer-script.js"></script>
@endpush
