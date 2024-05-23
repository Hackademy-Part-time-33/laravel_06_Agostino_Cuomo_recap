<x-head></x-head>
<body>
    <x-navbar></x-navbar>
<div> </div>
<ul>

    @foreach ( $services as $element )
    
        <li> <a href="{{route('TuttiServizi', ['singolo'=>$element['uri'] ])}}"> {{ $element['name'] }} </a> </li>
        @endforeach
    
        </ul>

<x-link></x-link>
</body>