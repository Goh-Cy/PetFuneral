const form = document.getElementById("login");
const username = document.getElementById("username");
const pass = document.getElementById("password");

form.addEventListener('submit', function (event){
    event.preventDefault();
    const errors= [];

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

    if (errors.length === 0){
        form.submit();
    }
});