<html>
    <head>
        <style type='text/css'>
            body, html {
                margin: 0;
                padding: 0;
            }
            body {
                color: black;
                display: table;
                font-family: Georgia, serif;
                font-size: 24px;
                text-align: center;
            }
            .container {
                border: 20px solid tan;
                width: 750px;
                height: 563px;
                /* display: table-cell; */
                vertical-align: middle;
            }
            .logo {
                color: tan;
                padding-top: 12px;
            }

            .marquee {
                color: tan;
                font-size: 48px;
                margin: 20px;
            }
            .assignment {
                margin: 20px;
            }
            .person {
                border-bottom: 2px solid black;
                font-size: 32px;
                font-style: italic;
                margin: 20px auto;
                width: 400px;
            }
            .course {
                border-bottom: 2px solid black;
                font-size: 35px;
                font-style: Bold;
                margin: 20px auto;
                width: 400px;
            }
            .reason {
                margin: 20px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="logo">
                {{-- <img src="{{'data:image/png;base64,' . base64_encode(asset('assets/images/logo/vortex.png'))}}" alt="image" >
                <img src="http://localhost:8000/assets/images/logo/vortex.png" alt="Logo"> --}}
                <img src="data:image/png;base64,{{ $image }}"/>
                {{-- Federal Ministry of Transportation --}}
            </div>

            <div class="marquee">
                License Certificate
            </div>

            <div class="assignment">
                This is to certify that
            </div>

            <div class="person">
               {{$vehicle->first_name}}  {{$vehicle->middle_name}}  {{$vehicle->last_name}}
            </div>

            <div class="reason">
                with the Vehicle Engine Number <b>{{$vehicle->engine_number}}</b> <br/> has been attributed the License Number

            </div>
            <div class="course">
            {{$license->license_number}}
            {{-- {{dd($vehicle->license())}} --}}
            </div>

            <div class="reason">
                Issued on  {{ date('M j, Y g:ia', strtotime($license->issue_date)) }} <br/> by  <b>{{$vehicle->inspector->name}}</b>

            </div>

        </div>
    </body>
</html>
