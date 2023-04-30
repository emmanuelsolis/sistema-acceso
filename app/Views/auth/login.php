<?= $header ?>
<style>
    body {
        height: 100vh;
    }
    h1 {
        text-align : center ;
        margin-bottom: 50px;
    }
    .login__container {
        margin : auto ;
        border : 1px solid #aaaa ;
        padding : 20px ;
        border-radius : 10px ;
    }
</style>
<h1>Ingresa tus datos</h1>
<div class="login__container col-3 ">
    <form action="<?= base_url('comprobar') ?> method="post">
        <div class="mb-3">
            <label for="name" class="form-label">Nombre de usuario</label>
            <input type="text" class="form-control" id="name" name="nombre" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Correo electrónico</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary mb-5 col-5">Entrar</button>
    </form>
</div>

<?= $footer ?>