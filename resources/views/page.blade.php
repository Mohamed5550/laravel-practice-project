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
    {{-- <link rel="stylesheet" href="{{mix("css/all.css")}}" /> --}}
    

  <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
  {{-- <script src="assets('js/app.js')"></script> --}}
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('2848b1e4d2c60efee612', {
      cluster: 'eu'
    });

    var channel = pusher.subscribe('my-channel');
    
    channel.bind('my-event', function(data) {
      console.log("hi");
      alert(JSON.stringify(data));
    });
  </script>
  
  
@endpush

@push("footer-scripts")
    <script src="footer-script.js"></script>
@endpush
