<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/assets/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>Login</title>


</head>

<body>
    <header>

    </header>
    <main>

        <section class="intro">
            <h1>SGI</h1>
            <p>Sistema de Gerenciamento Integrado</p>
        </section>


        <section class="formulario">


            <h2>Acesso</h2>
            <br>
            <br>
            <div class="formulario__interno">
                <form action="" method="post">


                    <label for="usuario">Usuário:</label>
                    <input type="text" id="usuario" name="usuario" placeholder="Digite aqui seu cpf">
                    <label for="password">Senha:</label>

                    <div class="formulario__interno__password">
                        <input type="password" name="password" id="password" placeholder="Digite aqui sua senha">
                        <button type="button" id="togglePassword">
                            <i id="icon" class="fa fa-eye"></i>
                        </button>
                    </div>
                    <a href="" class="formulario__input__esqueceu">Esqueçeu a senha?</a>



                    <button class="formulario__botao">Login</button>


                </form>
            </div>




            </div>
            <!-- JavaScript -->
            <script>
                // Seleciona os elementos
                const passwordInput = document.getElementById('password');
                const togglePasswordButton = document.getElementById('togglePassword');
                const icon = document.getElementById('icon');

                // Adiciona o evento de clique no botão
                togglePasswordButton.addEventListener('click', () => {
                    // Alterna o tipo de input
                    const isPassword = passwordInput.type === 'password';
                    passwordInput.type = isPassword ? 'text' : 'password';

                    // Alterna o ícone
                    icon.className = isPassword ? 'fa fa-eye-slash' : 'fa fa-eye';
                });
            </script>

    </main>

    <footer>

    </footer>
</body>

</html>