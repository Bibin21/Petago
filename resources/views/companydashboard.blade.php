<html style="width:100%;height:100vh; background-color:bisque;">
    <div class="modal">
        <div class="modal-content">
            <span class="close-button">×</span>
  
          <h1>{{$error}}</h1>

        </div>
    </div>
    <table  border="1">
        <tr>
<th colspan="4">
Destination
</th>
<th colspan="3">
Pickup
</th>
        </tr>
<tr>
    <th>Name:</th>
    <th>Email:</th>
    <th>Phone:</th>
    <th>Address:</th>
    <th>Name:</th>
    <th>Phone:</th>
    <th>Address:</th>
</tr>
        @foreach($entries as $entry)
        <form action="/transportconfirm" method="POST">
            @csrf
            <input type="number" name="id" hidden value="{{$entry->id}}" >
        <tr>
            <td>{{ $entry->d_name }}</td>
            <td>{{ $entry->d_email}}</td>
            <td>{{ $entry->d_phone}}</td>
            <td>{{ $entry->d_addr}}</td>
            <td>{{ $entry->p_name}}</td> 
            <td>{{ $entry->p_phone}}</td>
            <td>{{ $entry->p_addr}}</td>

            <td ><button class="confirm" >Confirm</button></td>
    </tr>
</form>
    @endforeach
</table>

</html>
<script>

    var modal = document.querySelector(".modal");
    var trigger = document.querySelector(".trigger");
    var closeButton = document.querySelector(".close-button");
    
    function toggleModal() {
        modal.classList.toggle("show-modal");
    }
    
    function windowOnClick(event) {
        if (event.target === modal) {
            toggleModal();
        }
    }
    
    
    closeButton.addEventListener("click", toggleModal);
    window.addEventListener("click", windowOnClick);
    
    </script>
    <?php
    if($error!="")
    echo '<script>
    toggleModal();
</script>';
?>

<style>
    .confirm{
        background: rgb(52, 157, 52);
        color:whitesmoke;

    }
button:hover{
background: white;
color: black;

}
.trigger{
      text-align: center;
    padding: 7px 13px;
    background: #3e3e3e;
    color: #fff;
    font-size: 15px;
    outline: none;
    border: none;
    border-radius: 5px;
    font-family: cursive;
}

.modal {
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    opacity: 0;
    visibility: hidden;
    transform: scale(1.1);
    transition: visibility 0s linear 0.25s, opacity 0.25s 0s, transform 0.25s;
}
.modal-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: white;
    padding: 1rem 1.5rem;
    width: 24rem;
    border-radius: 0.5rem;
}
.close-button {
    float: right;
    width: 1.5rem;
    line-height: 1.5rem;
    text-align: center;
    cursor: pointer;
    border-radius: 0.25rem;
    background-color: lightgray;
}
.close-button:hover {
    background-color: darkgray;
}
.show-modal {
    opacity: 1;
    visibility: visible;
    transform: scale(1.0);
    transition: visibility 0s linear 0s, opacity 0.25s 0s, transform 0.25s;
}


</style>

