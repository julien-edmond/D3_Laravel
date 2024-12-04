@include('modeles.entete')
        
<body class="theme-invert">
  @include('modeles.menu')
            <!-- container -->
            <section class="section" id="head">
	        <div class="container">
                <!-- Content -->
                @yield('content')
            </div>
            </section>
            
            @include('modeles.pied')
        </body>
        </html>
    