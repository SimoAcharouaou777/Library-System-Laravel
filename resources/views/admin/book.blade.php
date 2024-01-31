@extends('admin.asside')

@section('content')
    



<main>
  <div class="card shadow-sm">
    <div class="d-flexxx d-flex justify-content-between">
        <button class="btn btn-dark col-md-1" data-bs-toggle="modal" data-bs-target="#addModal">+</button>
        <div>
           
           {{-- Add Modal  --}}
            <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="addBookForm" action="" method="post">
                        
                            @csrf
                        
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
        
                            <div class="mb-3">
                                <label for="auteur" class="form-label">Auteur</label>
                                <input type="text" class="form-control" id="auteur" name="auteur" required>
                            </div>
        
                            <div class="mb-3">
                                <label for="annee_publication" class="form-label">Annee de Publication</label>
                                <input type="date" class="form-control" id="annee_publication" name="annee_publication" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Ajouter</button>
                        </form>
                    </div>
                  
                  </div>
                </div>
            </div>


        <input type="text" id="searchInput" onkeyup="search()" placeholder="rechercher">
        </div>
     
    </div>
  
    <div class="shadow-sm table-responsive p-3 mb-3 bg-body rounded">
        <table class="table align-middle pl-4 mb-4 mt-2 bg-white ">
            <thead class="bg-light">
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Auteur</th>
            <th>annee_publication</th>
            <th>Status</th>
            <th>Action</th>
            				
          </tr>
        </thead>
        <tbody id="category">


          
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
       
                <td class="d-flex gap-2">
                <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editModal" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16"> <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/> </svg></button>
                
                <form action="" method="post" >
                    @csrf @method('DELETE')
                    <button type="submit" name="submit"  class="btn btn-light">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"> <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/> <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/> </svg>
                    </button>
                </form>
                </td>
            </tr>


               {{-- Add Modal  --}}
               <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form  action="" method="post">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="" required>
                            </div>
        
                            <div class="mb-3">
                                <label for="auteur" class="form-label">Auteur</label>
                                <input type="text" class="form-control" id="auteur" name="auteur"  value="" required>
                            </div>
        
                            <div class="mb-3">
                                <label for="annee_publication" class="form-label">Annee de Publication</label>
                                <input type="date" class="form-control" id="annee_publication" value="" name="annee_publication" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Ajouter</button>
                        </form>
                    </div>
                  
                  </div>
                </div>
            </div>

           
              



          
         
           
         
        </tbody>
      </table>

     
    </div>
  </div>



</main>

    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<script>
  function toggleAside() {
    var aside = document.getElementById("myAside");
    var righttt = document.getElementById("right");
    var rightttBtn = document.getElementById("rightBtn");
    var leftBtn = document.getElementById("leftBtn");
    var links = document.querySelectorAll(".link");

    if (aside.style.width === "5%") {
      aside.style.width = "17%";
      righttt.style.width="83%";
      leftBtn.style.display="block";
      rightttBtn.style.display="none";
      links.forEach(function (link) {
            link.style.display = "block";
        });
    
    } else {
      aside.style.width = "5%";
      righttt.style.width="95%";
      leftBtn.style.display="none";
      rightttBtn.style.display="block";
   
        links.forEach(function (link) {
            link.style.display = "none";
        });
    }
  }
  
 


    //     function search() {
               
    //            let input = document.getElementById("searchInput").value;
    //            let url = `?uri=category/search&search=${encodeURIComponent(input)}`;

    //            let xml = new XMLHttpRequest();
    //            xml.onreadystatechange = function () {
    //                if (this.readyState == 4 && this.status == 200) {
    //                    document.getElementById("category").innerHTML = xml.responseText;
    //                }
    //            };
    //            xml.open("GET", url, true);
    //            xml.send();
         
    //    }
</script>
</body>
</html>
@endsection