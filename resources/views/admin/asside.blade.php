<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <style>
    body {
      margin: 0;
      padding: 0;
    }

    aside {
     
      background-color: #f8f9fa;
      height: 100vh;
      position: sticky;
      top: 0;
      padding: 20px;
      text-align: center;
      transition: width 0.3s ease;
   
    }


    aside a {
      
      display: block;
      padding: 10px;
      text-decoration: none;
      color: #000000;
      transition: background-color 0.3s;
    }

    aside a:hover {
      background-color: #dcdcdc;
    }

    header {
        height: 100px;
      background-color:#F5F5F4;
      color: #ffffff;
      padding-bottom: 10px;
      text-align: center;
      z-index: 10;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); 
    }

    .navv{
        padding-right:20px ;
        background-color: white;
        height: 80px;
    }

    main {
      background-color:#F5F5F4;
      padding: 20px;
      min-height: 100vh;
    }

    .card {
    border: none;
      background-color: #ffffff;
      padding: 20px;
      margin-top: 20px;
      border-radius: 5px;
    }
.left{
    width:17%;
    transition: width 0.3s ease;
    text-align: left;
 
}
    .right {
        padding: 0%;
        width: 83%;
        transition: width 0.3s ease;
    }


    #rightBtn{
        display: none;
    }
    .link{
        transition: 3s ease;
    }


.d-flexxx {
  align-items: flex-end; 
}



input {
  border: none; 
  border-bottom: 2px solid gray;
  outline: none;
  transition: border 0.3s; 
}

input:focus {
  border-bottom: 2px solid #007bff; 
}


  </style>
  <title>Bootstrap Example</title>
</head>
<body>

<div class="container-fluid">
  <div class="row">
    <aside class="left shadow " id="myAside">
        <div class="d-flex  gap-2 mb-5">
           
            <h3 class="link">  BOOK</h3>
        </div>
     
      <a href="" class="d-flex gap-3 align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-activity" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M6 2a.5.5 0 0 1 .47.33L10 12.036l1.53-4.208A.5.5 0 0 1 12 7.5h3.5a.5.5 0 0 1 0 1h-3.15l-1.88 5.17a.5.5 0 0 1-.94 0L6 3.964 4.47 8.171A.5.5 0 0 1 4 8.5H.5a.5.5 0 0 1 0-1h3.15l1.88-5.17A.5.5 0 0 1 6 2Z"/>
        </svg>
       <span class="link">Statistique</span>  
      </a>
      <a href="{{route('show.book')}}" class="d-flex gap-3 align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-checklist" viewBox="0 0 16 16"> <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/> <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/> </svg>
        <span class="link">Books</span>  
      </a>
      <a href="{{route('show.resirvation')}}" class="d-flex gap-3 align-items-center"> 
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tags" viewBox="0 0 16 16"> <path d="M3 2v4.586l7 7L14.586 9l-7-7H3zM2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586V2z"/> <path d="M5.5 5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm0 1a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM1 7.086a1 1 0 0 0 .293.707L8.75 15.25l-.043.043a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 0 7.586V3a1 1 0 0 1 1-1v5.086z"/> </svg>  
        <span class="link">Reservations</span>  
      </a>
      
    </aside>
    <div class="right" id="right">
    <header class="">
    <div class="w-full navv d-flex shadow justify-content-between align-items-center">

        <button class="btn btn-light" id="leftBtn" onclick="toggleAside()">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5zM10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5z"/>
            </svg>
        </button>
        <button class="btn btn-light" id="rightBtn" onclick="toggleAside()">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8zm-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5z"/>
            </svg>
        </button>
        <div class="dropdown ">
            <button class="btn btn-dark dropdown-toggle " type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
            </div>

    </div>
</header>

<section>
    @yield('content')
</section>