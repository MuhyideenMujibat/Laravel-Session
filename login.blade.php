<h1> Users' Login </h1>

<form action="user" method="POST"> 
    <!-- {{method_field('DELETE')}} -->
@csrf
<input type="text" name="fullname" placeholder="Name"/></br>
</br>

<input type="password" name="password" placeholder="Password"/></br>
</br>

<button type="submit"> Login </button>


</form>
