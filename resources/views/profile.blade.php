<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link rel="stylesheet" href="styles.css">

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"/>
    
    <link rel="stylesheet" href="/Petago/public/src/output.css"> 

</head>
<link rel="stylesheet" href="./output.css"/>
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f0f2f5;
}

.profile-container {
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    width: 100%;
    max-width: 400px;
    box-sizing: border-box;
}

.profile-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}

.profile-header h1 {
    margin: 0;
}

.profile-header button {
    background: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    transition: background 0.3s ease;
}

.profile-header button:hover {
    background: #0056b3;
}

.profile-info p {
    margin: 10px 0;
}

form {
    display: flex;
    flex-direction: column;
}

form label {
    margin: 10px 0 5px;
}

form input {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-bottom: 15px;
    width: 100%;
    box-sizing: border-box;
}

form button {
    background: #28a745;
    color: #fff;
    border: none;
    padding: 10px;
    border-radius: 5px;
    cursor: pointer;
    transition: background 0.3s ease;
}

form button:hover {
    background: #218838;
}

.hidden {
    display: none;
}

@media (max-width: 480px) {
    .profile-container {
        padding: 15px;
    }

    .profile-header button {
        padding: 8px 15px;
    }

    form input {
        padding: 8px;
    }

    form button {
        padding: 8px;
    }
}

</style>
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
    <div class="profile-container">
        <div class="profile-header">
            <h1>Profile</h1>
            <button id="editBtn">Edit</button>
        </div>
        <div class="profile-info">
            <p><strong>Address:</strong> <span id="address">123 Main St, City, Country</span></p>
            <p><strong>Phone Number:</strong> <span id="phone">123-456-7890</span></p>
            <p><strong>Email:</strong> <span id="email">example@mail.com</span></p>
          
        </div>
        <form id="editForm" class="hidden">
            <label for="editAddress">Address:</label>
            <input type="text" id="editAddress" value="123 Main St, City, Country">
            <label for="editPhone">Phone Number:</label>
            <input type="text" id="editPhone" value="123-456-7890">
            <label for="editEmail">Email:</label>
            <input type="email" id="editEmail" value="example@mail.com">
            <button type="submit">Save</button>
        </form>
    </div>
    <script>
        document.getElementById('editBtn').addEventListener('click', function() {
    document.getElementById('editForm').classList.toggle('hidden');
});

document.getElementById('editForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const newAddress = document.getElementById('editAddress').value;
    const newPhone = document.getElementById('editPhone').value;
    const newEmail = document.getElementById('editEmail').value;
    
    document.getElementById('address').textContent = newAddress;
    document.getElementById('phone').textContent = newPhone;
    document.getElementById('email').textContent = newEmail;
    
    document.getElementById('editForm').classList.add('hidden');
});

    </script>
</body>
</html>
