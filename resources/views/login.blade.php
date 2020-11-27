<form action="{{action('Practica@validarLogin')}}" method="post" >
        {{csrf_field()}}
        <label for="user">Usuario</label>
        <input type="text" name="user">
        <br>
        <label for="password">Password</label>
        <input type="password" name="password">
        <br>
        <br>
        <input type="submit" value="submit">
    </form>