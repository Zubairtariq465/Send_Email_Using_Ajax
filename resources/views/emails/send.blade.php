<!DOCTYPE html>
<html>
<head>
    <title>Send Email</title>
</head>
<body>
    @if (session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif

     <form method="GET" action="{{ route('emails.send') }}"> 
        @csrf
        <button onclick = "sendEmail()" >Send Email</button>
     </form> 

    {{-- <script>
        function sendEmail() {
         alert();
        }
     </script> --}}
</body>

</html>