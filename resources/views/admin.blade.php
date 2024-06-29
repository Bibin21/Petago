
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!--<title>Registration Form in HTML CSS</title>-->
    <!---Custom CSS File--->
    <link rel="stylesheet" href="css/admin.css" />
      <!-- Unicons CSS -->
      <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
      
      <script src="hscript.js" defer></script>
     <div class="hed">
      <nav class="navi">
        <i class="uil uil-bars naviOpenBtn"></i>
        <a href="#" class="logo">website</a>
  
        <ul class="navi-links">
          <i class="uil uil-times naviCloseBtn"></i>
          <li><a href="">1</a></li>
          <li><a href="">2</a></li>
		  <li><a href="">3</a></li>
      <li><a href="">4</a></li>



          <li><a href="login.php" name="logout">Logout</a></li>

        </ul>
  
        <i class="uil uil-search search-icon" id="searchIcon"></i>
        <div class="search-box">
          <i class="uil uil-search search-icon"></i>
          <input type="text" placeholder="Search here..." />
        </div>
      </nav>
  </div>

  </head>
 
  <body>


  <main class="table">
        <section class="table__header" style=" background-color: lightblue;">
            <h1>Admin</h1>
            <div class="input-group">
                <input type="search" placeholder="Search Data...">
            </div>
            <div class="export__file">
                <label for="export-file" class="export__file-btn" title="Export File"></label>
                
            </div>
			<div class="btn">  				

              <button type="button" name="submitpage" class="btn">button</button>
              </div>
        </section>
        <section class="table__body">
		<div class="card-body">
	<div class="table-responsive">
		<table>
			<thead>
				<th>ID</th>
				<th>Name</th>
				<th>FileName</th>
				<th>Date</th>
				<th>Action</th>
			</thead>
			<tbody>
        <tr>
				<td>1</td>
        <td>2</td>
        <td>3</td>
        <td>4</td>
        <td>              <button type="button" name="submitpage" class="btn">edit</button>
        </td>

</tr>
<tr>
				<td>1</td>
        <td>2</td>
        <td>3</td>
        <td>4</td>
        <td>              <button type="button" name="submitpage" class="btn">edit</button>
        </td>

</tr>  <tr>
				<td>1</td>
        <td>2</td>
        <td>3</td>
        <td>4</td>
        <td>              <button type="button" name="submitpage" class="btn">edit</button>
        </td>

</tr>
			</tbody>
		</table>			
	</div>
</div>

        </section>
    </main>


    <script>

const search = document.querySelector('.input-group input'),
    table_rows = document.querySelectorAll('tbody tr'),
    table_headings = document.querySelectorAll('thead th');

// 1. Searching for specific data of HTML table
search.addEventListener('input', searchTable);

function searchTable() {
    table_rows.forEach((row, i) => {
        let table_data = row.textContent.toLowerCase(),
            search_data = search.value.toLowerCase();

        row.classList.toggle('hide', table_data.indexOf(search_data) < 0);
        row.style.setProperty('--delay', i / 25 + 's');
    })

    document.querySelectorAll('tbody tr:not(.hide)').forEach((visible_row, i) => {
        visible_row.style.backgroundColor = (i % 2 == 0) ? 'transparent' : '#0000000b';
    });
}
</script>


  

  </body>
</html>
