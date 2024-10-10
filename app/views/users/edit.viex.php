<from action="" metod="post">
    <div>
        <label form="email">Email</label>
        <input type="text" id="email" value="<? $data['user']['email'] ?>">
    </div>
    <div>
        <label form="username">Usuario</label>
        <input type="text" id="username" name="username" value="<? $data['user']['email'] ?>">
    </div>
    <div>
        <label form="password">Contraseña</label>
        <input type="password" id="password" name="password">
    </div>
    <div>
        <button form="password">Contraseña</button>
    </div>
</from>