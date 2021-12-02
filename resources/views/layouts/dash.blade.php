
<!DOCTYPE html>
<html class="no-js">
<!--<![endif]-->
<head>
	<html prefix="og: http://ogp.me/ns#">
	<meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @if(isset($title))<title>Docteur v1 | {{ $title }}</title> @else <title>Talabnow Docteur systèm</title> @endif
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link href="{{ asset('static/css/bootstrap.css') }}" rel="stylesheet" media="screen">
	<link href="{{ asset('static/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('static/css/all.css') }}" rel="stylesheet" media="screen">
	<link rel="stylesheet" href="{{ asset('static/css/area.css') }}">
    <link href="{{ asset('static/css/jquery.dataTables.min.css') }}" rel="stylesheet" media="screen">
	<link rel="shortcut icon" href="{{ asset('static/favicon.ico') }}" type="image/x-icon">
	<link rel="icon" href="{{ asset('static/favicon.ico') }}" type="image/x-icon">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<link rel="apple-touch-icon" href="{{ asset('static/favicon.ico') }}"/>
	<meta name="theme-color" content="#dc3545">
	<meta name="msapplication-navbutton-color" content="#dc3545">
	</head>
    <div class="wrapper">

 <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <a href="/">
                    <!--
                <img src="{{ asset('img/logo.png') }}" width="200" height="100">
                -->
                <h1>DoctorV1</h1>
            </div>
            <ul class="list-unstyled components">
                <li class="nav-item ">
                    <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="true" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Dossiers médicaux des patients </a>
                    <div id="submenu-1" class="submenu collapse show" style="">
                        <ul class="nav flex-column">
                      
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('dash.patient') }}">Patient</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" onclick="getHistoPat();" href="#">Historique </a>
                            </li>                                 
                                  
                          
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dash.consultation') }}"  aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i> Consultations &amp;
                 Contrôle </a>
                
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dash.ordonnance') }}" ><i class="fas fa-fw fa-file"></i> Ordonnances</a>
                  
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-fw fa-map-marker-alt"></i> Rendez vous</a>
                
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dash.access') }}" ><i class="fas fa-f fa-folder"></i> Droits d’accès </a>
             
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dash.medicaments') }}">
                       <i class="fas fa-f fa-folder"></i> Médicaments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dash.payments') }}">
                           <i class="fas fa-money-bill-alt"></i> Gestion de paiment</a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="true" data-target="#submenu-8" aria-controls="submenu-8"><i class="fas fa-ambulance"></i> Analyse &amp; radiologique</a>
                            <div id="submenu-8" class="submenu collapse show" style="">
                                <ul class="nav flex-column">
                              
                                    <li class="nav-item">
                                        <a class="nav-link"  href="{{ route('dash.analyse') }}"> Analyse &amp; radiologique Patient </a>
                                    </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dash.radiologie') }}"> Paramétrage d'analyse &amp; radiologique</a>

                        </li>                              

                               


                                  
                                </ul>
                            </div>
                        </li>

            
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="#" class="download"><i class="fas fa-cloud-upload-alt"></i> Cherche mise a jour</a>
                </li>
                <li>
                    <a href="https://github.com/elmahdiouhssain" class="article"><i class="fab fa-dev"></i> Contact developeur</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>List</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="/area/dashboard"><i class="fas fa-home"></i> Dashboard</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="/area/changePassword"><i class="fas fa-id-card-alt"></i> Profile</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="/logout" ><i class="fas fa-sign-out-alt"></i> Deconnecté</a>
                                
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div id="main">
                @yield('content')
             </div>
             </div>
         </div>
         <script src="{{ asset('static/js/jquery.min.js') }}"></script>
         <script src="{{ asset('static/js/popper.min.js') }}"></script>
         <script src="{{ asset('static/js/bootstrap.min.js') }}"></script>
         <script src="{{ asset('static/js/bootstrap.js') }}"></script>
         <script src="{{ asset('static/js/all.js') }}"></script>
     
     
         <script src="{{ asset('static/js/jquery.dataTables.min.js') }}"></script>
         <script type="text/javascript">$(document).ready(function() {
         $('#example').DataTable( {
             "scrollX": true
               } );
               } );</script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').toggleClass('active');
                });
            });
        </script>
         </body>
         </html>
