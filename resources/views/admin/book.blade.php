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
                      <div>
                        @if($errors->any())
                        <ul>
                          @foreach($errors->all() as $error)
                          <li>
                            {{$error}}
                          </li>
                          @endforeach
                        </ul>
                        @endif
                      </div>
                        <form id="addBookForm" action="{{route('book.store')}}" method="post">
                        
                            @csrf
                        
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title" required>
                            </div>
                            <div class="mb-3">
                              <label for="genre" class="form-label">genre</label>
                              <input type="text" class="form-control" id="genre" name="genre" required>
                          </div>
        
                            <div class="mb-3">
                                <label for="author" class="form-label">Author</label>
                                <input type="text" class="form-control" id="author" name="author" required>
                            </div>
        
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <input type="text" class="form-control" id="description" name="description" required>
                            </div>
                            <div class="mb-3">
                              <label for="publication_year" class="form-label">Publication Year</label>
                              <input type="date" class="form-control" id="publication_year" name="publication_year" required>
                          </div>
                          <div class="mb-3">
                            <label for="total_copies" class="form-label">Total Copies</label>
                            <input type="number" class="form-control" id="total_copies" name="total_copies" required>
                        </div>
                        <div class="mb-3">
                          <label for="available_copies" class="form-label">Available Copies</label>
                          <input type="number" class="form-control" id="available_copies" name="available_copies" required>
                      </div>
                            <button type="submit" class="btn btn-primary" name="submit">ADD</button>
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
            <th>title</th>
            <th>genre</th>
            <th>Author</th>
            <th>Description</th>
            <th>Publication Year</th>
            <th>Total Copies</th>
            <th>Available Copies</th>
            <th>Action</th>
            				
          </tr>
        </thead>
        <tbody id="category">


          @foreach($books as $book)
            <tr>
                <td>{{$book->id}}</td>
                <td>{{$book->title}}</td>
                <td>{{$book->genre}}</td>
                <td>{{$book->author}}</td>
                <td>{{$book->description}}</td>
                <td>{{$book->publication_year}}</td>
                <td>{{$book->total_copies}}</td>
                <td>{{$book->available_copies}}</td>
       
                <td class="d-flex gap-2">
                <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editModal{{$book->id}}" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16"> <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/> </svg></button>
                
                <form action="{{route('delete.book', $book->id)}}" method="post" >
                    @csrf 
                    @method('DELETE')
                    <button type="submit" name="submit"  class="btn btn-light">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"> <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/> <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/> </svg>
                    </button>
                </form>
                </td>
            </tr>
            @endforeach


               {{-- Edite Modal  --}}
               @foreach($books as $book)
               <div class="modal fade" id="editModal{{$book->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form  action="{{route('edite.book', $book->id)}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="title" class="form-label">Tiltle</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{$book->title}}" required>
                            </div>

                            <div class="mb-3">
                              <label for="title" class="form-label">Genre</label>
                              <input type="text" class="form-control" id="genre" name="genre" value="{{$book->genre}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="author" class="form-label">Author</label>
                                <input type="text" class="form-control" id="author" name="author"  value="{{$book->author}}" required>
                            </div>
        
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <input type="text" class="form-control" id="description" value="{{$book->description}}" name="description" required>
                            </div>
                            <div class="mb-3">
                              <label for="publication_year" class="form-label">Publication Year</label>
                              <input type="date" class="form-control" id="publication_year" value="{{$book->publication_year}}" name="publication_year" required>
                          </div>
                          <div class="mb-3">
                            <label for="total_copies" class="form-label">Total Copies </label>
                            <input type="number" class="form-control" id="total_copies" value="{{$book->total_copies}}" name="total_copies" required>
                        </div>
                        <div class="mb-3">
                          <label for="available_copies" class="form-label">Available Copies </label>
                          <input type="number" class="form-control" id="available_copies" value="{{$book->available_copies}}" name="available_copies" required>
                      </div>
                            <button type="submit"  class="btn btn-primary">Edite</button>
                        </form>
                    </div>
                  
                  </div>
                </div>
            </div>
            @endforeach

           
              



          
         
           
         
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
  
 

</script>
</body>
</html>
@endsection