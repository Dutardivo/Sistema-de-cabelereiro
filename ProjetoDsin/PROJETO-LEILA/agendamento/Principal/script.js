document.addEventListener("DOMContentLoaded", function () {
    var loginForm = document.getElementById("loginForm");

    if (loginForm) {
        loginForm.addEventListener("submit", function (event) {
            event.preventDefault();

            var loginInput = document.getElementById("login");
            var passwordInput = document.getElementById("password");

            if (loginInput.value === "123" && passwordInput.value === "123") {
                window.location.href = "consulta_agendamentos.php";
            } else {
                alert("Login e/ou senha incorretos. Tente novamente.");
            }
        });
    }
});//usei js pois não tive exito em realizar a validação da senhas (apenas para o login)
//basicamente o codigo pega as variaveis pela id libera acesso ou apenas da um span avisando que tem algo incorreto 