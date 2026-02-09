document.addEventListener("DOMContentLoaded", () => {

    const form = document.querySelector(".app-form");
    form.addEventListener("submit", async (e) => {


        e.preventDefault();

        const email = document.getElementById("username").value.trim();
        const password = document.getElementById("password").value.trim();

        if (!email || !password) {
                        console.log("Login script loaded");

            alert("Please enter username and password");
            return;
        }

        try {
            const response = await fetch("/work_track/api/auth/login", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "Accept": "application/json"
                },
                body: JSON.stringify({
                    email: email,
                    password: password
                })
            });

            const data = await response.json();

            if (!response.ok) {
                alert(data.error || "Login failed");
                return;
            }

            // Guardar token
            localStorage.setItem("token", data.token);
            localStorage.setItem("user", JSON.stringify(data.user));

            // Redirección post-login
            window.location.href = "/app.php";

        } catch (error) {
            console.error(error);
            alert("Server connection error");
        }
    });

});

