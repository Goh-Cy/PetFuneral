const form = document.getElementById("login-form");
const email = document.getElementById("email");
const username = document.getElementById("username");
const pass = document.getElementById("password");
const repeatPass = document.getElementById("confirm");

form.addEventListener('submit', function (event){
    event.preventDefault();
    const errors= [];

    if (email.value.trim() === ''){
        errors.push("Please enter your email.");
        email.nextElementSibling.innerHTML = "Please enter your email.";
        email.nextElementSibling.style.color = 'red';
    } else if (!isValidEmail(email.value.trim())) {
        errors.push('Please enter a valid email address');
        email.nextElementSibling.innerHTML = 'Please enter a valid email address';
        email.nextElementSibling.style.color = 'red';
    } else{
        email.nextElementSibling.innerHTML = '';
    }

    if(username.value.trim() === ''){
        errors.push("Please enter your username.");
        username.nextElementSibling.innerHTML = "Please enter your username.";
        username.nextElementSibling.style.color = 'red';
    } else{
        username.nextElementSibling.innerHTML = '';
    }

    if (pass.value.trim() === ''){
        errors.push("Please enter your password.");
        pass.nextElementSibling.innerHTML = "Please enter your password.";
        pass.nextElementSibling.style.color = 'red';
    } else {
        pass.nextElementSibling.innerHTML = '';
    }

    if (repeatPass.value.trim() === ''){
        errors.push("Please enter your password again.");
        repeatPass.nextElementSibling.innerHTML = "Please enter your password again.";
        repeatPass.nextElementSibling.style.color = 'red';
    }
    else{
        if (repeatPass.value.trim() !== pass.value.trim()){
            errors.push("Your password is not the same!");
            repeatPass.nextElementSibling.innerHTML = "Your password is not the same!";
            repeatPass.nextElementSibling.style.color = 'red';
        }
        else{
            repeatPass.nextElementSibling.innerHTML = '';
        }
    }

    if (errors.length === 0){
        form.submit();
    }
});

function isValidEmail(email) {
    const emailRegex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
    return emailRegex.test(email);
}