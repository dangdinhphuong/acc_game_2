<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if ($errors->any())
    @foreach ($errors->all() as $error)
        <div>{{ $error }}</div>
    @endforeach
@endif
   <form action="{{route('changePasswordPost')}}" method="post">
    @csrf
    <input type="text" name="current_password" placeholder="current password">
    <input type="text" name="password" placeholder="password">
    <input type="text" name="confirm_password" placeholder="confirm password">
    <button type="submit" >Send</button>
   </form>
   <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
   <script>
    $(document).ready(function () {
    const timeout = 900000;  // 900000 ms = 15 minutes
    var idleTimer = null;
    $('*').bind('mousemove click mouseup mousedown keydown keypress keyup submit change mouseenter scroll resize dblclick', function () {
        clearTimeout(idleTimer);

        idleTimer = setTimeout(function () {
            window.location.href = '{{route("logout")}}'
        }, timeout);
    });
    $("body").trigger("mousemove");
});
   </script>
</body>
</html>
