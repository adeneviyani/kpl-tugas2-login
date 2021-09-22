<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>form login</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <meta name="" content="">
</head>

<body class="text-center">
    <div class="container">
            <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
            <form action="validasilogin.php" class="form-signin" method="POST">
                    <input type="email" id="email" name="email" placeholder="Masukan Email" required>
                    <input type="password" id="password" name="password" placeholder="Masukan Password" required>
                    <label for="lupa-password">
                        <a href="#">Lupa Password?</a>
                    </label>
                    <br>
                    <button class="btn btn-lg btn-primary" type="submit">Login</button>
                    <br>
                    <label for="akun">
                        Belum punya akun? <a href="">Daftar Sekarang</a>
                    </label>
            </form>
    </div>

    <div class="container">
        <h1 class="h3 mb-3 font-weight-normal">Please Register First</h1>
        <form action="registuser.php" class="form-signin" method="POST">
                <input type="email" id="emailbaru" name="emailbaru" placeholder="Masukan Email" required>
                <input type="password" id="passwordbaru" name="passwordbaru" placeholder="Masukan Pasword" required>
                <input type="password" placeholder="Konfirmasi Pasword" required>
                <br>
                <button class="btn btn-lg btn-primary" type="submit">Sign-up</button>
        </form>
    </div>

    <script>
    const logintext = document.querySelector(".title-text .login");
    const logiform = document.querySelector("form .login");
    const loginbtn = document.querySelector("label -text .login");
    const signupbtn = document.querySelector("title-text .login");
    const signuplink = document.querySelector("form .signup-link a");
    signupbtn.onclick(() => {
        loginform.style.marginleft = "-50%";
        logintext.style.marginleft = "-50%";
    });
    loginbtn.onclick(() => {
        logiform.style.marginleft = "0%";
        logitext.style.marginleft = "0%";
    });
    signuplink.onclick(() => {
        signupbtn.onclick();
        return false;
    });
    </script>
</body>

</html>