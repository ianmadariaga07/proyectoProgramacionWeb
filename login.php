<?php include('./head.php'); ?>

<div class="container">
    <div class="row">
        <div class="section"></div>
        <div class="section"></div>

        <div class="col s12 m8 offset-m2 l6 offset-l3">
            
            <div class="card z-depth-4" style="border-radius: 10px;">
                <div class="card-content">
                    
                    <div class="center-align">
                        <i class="material-icons large orange-text">account_circle</i>
                        <span class="card-title black-text" style="display:block; margin-top:10px;">Iniciar Sesión</span>
                    </div>
                    
                    <div class="section"></div>

                    <form action="./logica/ValidarLogin.php" method="POST">
                        
                        <div class="input-field">
                            <i class="material-icons prefix">person</i>
                            <input type="text" id="nombre_usuario" name="nombre_usuario" required>
                            <label for="nombre_usuario">Nombre de Usuario</label>
                        </div>

                        <div class="input-field">
                            <i class="material-icons prefix">lock</i>
                            <input type="password" id="password" name="password" required>
                            <label for="password">Contraseña</label>
                        </div>

                        <br>

                        <div class="center-align">
                            <button class="btn waves-effect waves-light orange block" type="submit" style="width: 100%; border-radius: 20px;">
                                Entrar
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                        
                        <br>
                        <div class="center-align">
                            <a href="#" class="grey-text text-darken-1" style="font-size: 0.9rem;">¿Olvidaste tu contraseña?</a>
                        </div>

                    </form>
                </div>
            </div>

        </div>
        <div class="section"></div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        M.updateTextFields();
    });
</script>

<?php include('./footer.php'); ?>