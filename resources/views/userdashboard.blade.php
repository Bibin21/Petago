
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!--<title>Registration Form in HTML CSS</title>-->
    <!---Custom CSS File--->
    <link rel="stylesheet" href="user_table.css" />
      <!-- Unicons CSS -->
      <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
      <script src="hscript.js" defer></script>
     <link rel="stylesheet" href="/Petago/public/src/output.css"> 

  </head>
 
  <body>
  <div class="hd">
        <nav class="nav font-bold">
            <i class="uil uil-bars navOpenBtn"></i>
            <a href="#" class="logo "><h3 class="  font-bold">PetaGo</h3></a>
    
            <ul class="nav-links">
                <i class="uil uil-times navCloseBtn"></i>
                <li><a href="#">Home</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Your Orders</a></li>
                <li><a href="#">Help</a></li>
                <li><a href="./login">Login</a></li>
            </ul>
         <button>
            <i class="uil uil-user" style="color: aliceblue; font-size: 1.6rem;" ></i>
         </button>
          
            
        </nav>
    </div>

  <main class="table">

        <section class="table__body">
		<div class="card-body">
	<div class="table-responsive">
		<table>
			<thead>
				<th>ID</th>
				<th>Date-Time</th>
        <th>Category</th>
        <th>Breed</th>
        <th>Status</th>
				<th>Action</th>
			</thead>
			<tbody>
        @isset($orders)
        @foreach($orders as $entry)
        <form action="/view_order/{{$entry->id}}" method="GET">
        
        <tr>
      
          <td>{{ $entry->id}}</td> 
          <td>{{ $entry->created_at}}</td> 
          <td>{{ $entry->category}}</td>
          <td>{{ $entry->breed}}</td>
            <td>{{ $entry->d_name }}</td>
            <td><button type="submit">View</button></td>

           
    
           
    </tr>
    </form>
    @endforeach
    @endisset
	</tbody>
	</table>			
	</div>
</div>

        </section>
    </main>

<script>

const navi = document.querySelector(".navi"),
  searchIcon = document.querySelector("#searchIcon"),
  naviOpenBtn = document.querySelector(".naviOpenBtn"),
  naviCloseBtn = document.querySelector(".naviCloseBtn");

searchIcon.addEventListener("click", () => {
  navi.classList.toggle("openSearch");
  navi.classList.remove("openNavi");
  if (navi.classList.contains("openSearch")) {
    return searchIcon.classList.replace("uil-search", "uil-times");
  }
  searchIcon.classList.replace("uil-times", "uil-search");
});

naviOpenBtn.addEventListener("click", () => {
  navi.classList.add("openNavi");
  navi.classList.remove("openSearch");
  searchIcon.classList.replace("uil-times", "uil-search");
});
naviCloseBtn.addEventListener("click", () => {
  navi.classList.remove("openNavi");
});
</script>

  </body>
</html>
