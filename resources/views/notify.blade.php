<html>
<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/toastr.css') }}">
</head>
<body>
<center>

    <h2>Notification Shower App</h2>
    <form method="post" action="z">
        {{ csrf_field() }}
        <input type="text" name="name">
        <button type="submit">Submit</button>

    </form>
    <p><b>Tpye : info</b> for info notification </p>
    <p><b>Tpye : success </b> for success notification</p>
    <p><b>Tpye : error </b> for error notification</p>
    <p><b>Tpye : warning </b> for warning notification</p>
    <a class="btn btn-primary" href="{{ url('se')}}">Second</a>
</center>


<script src="{{ asset('/js/jquery.min.js') }}"></script>
<script src="{{ asset('/js/toastr.min.js') }}"></script>
@yield('section');
<script>
            @if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}";
    switch (type) {
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;

        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;

        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;

        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
    @endif

</script>


</body>

</html>
