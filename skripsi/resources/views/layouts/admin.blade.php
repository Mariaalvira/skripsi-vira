<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>admin</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link href="{{ asset('css/styleadmin.css') }}" rel="stylesheet">
    <style type="text/css">
    body {
      font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
    }
    
    /* Table */
    table {
      margin: auto;
      font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
      font-size: 12px;

    }
    .demo-table {
      border-collapse: collapse;
      font-size: 13px;
    }
    .demo-table th, 
    .demo-table td {
      border-bottom: 1px solid #e1edff;
      border-left: 1px solid #e1edff;
      padding: 7px 17px;
    }
    .demo-table th, 
    .demo-table td:last-child {
      border-right: 1px solid #e1edff;
    }
    .demo-table td:first-child {
      border-top: 1px solid #e1edff;
    }
    .demo-table td:last-child{
      border-bottom: 0;
    }
    caption {
      caption-side: top;
      margin-bottom: 10px;
    }
    
    /* Table Header */
    .demo-table thead th {
      background-color: #508abb;
      color: #FFFFFF;
      border-color: #6ea1cc !important;
      text-transform: uppercase;
    }
    
    /* Table Body */
    .demo-table tbody td {
      color: #353535;
    }
    
    .demo-table tbody tr:nth-child(odd) td {
      background-color: #f4fbff;
    }
    .demo-table tbody tr:hover th,
    .demo-table tbody tr:hover td {
      background-color: #ffffa2;
      border-color: #ffff0f;
      transition: all .2s;
    }
  </style>
  </head>
  <body>
    <div class="wrapper">
      <nav class="navbar navbar-default">
        <div class="navbar">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Admin Dashboard</a>
          <a href="#" class="navbar-brand right">Logout</a>
        </div>
      </nav>
      <aside class="sidebar">
        <menu>
          <ul class="menu-content">
            <li><a href="#"><i class="fa fa-home"></i> Dashboard</a></li>
            <li><a href="#"><i class="fa fa-user"></i> Daftar Umat</a></li>
            <li><a href="#"><i class="fa fa-money"></i> Pembayaran</a></li>
            <li><a href="#"><i class="fa fa-bell"></i> Notifikasi</a></li>
            <li><a href="#"><i class="fa fa-check"></i> Sakramen</a></li>
            <!-- <li>
              <a href="#"><i class="fa fa-cube"></i> <span>Data Master</span> <i class="fa fa-angle-down pull-right"></i></a>
              <ul>
                <li><a href="">Umat</a></li>
                <li><a href="">Kategori Sakramen</a></li>
                <li><a href="">Pembayaran</a></li>
              </ul>
            </li> -->
          </ul>
        </menu>
      </aside>
      <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!– Include all compiled plugins (below), or include individual files as needed –>
    <!– Latest compiled and minified JavaScript –>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script>
    $("menu li > a").click(function(e){
    $("menu ul ul").slideUp(),$(this).next().is(":visible") || $(this).next().slideDown(),e.stopPropagation()
    });
    </script>
    </body>
</html>