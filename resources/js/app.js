import './bootstrap';

window.togglePassword = function(fieldId, toogleIcon){
    const field = document.getElementById(fieldId);
    const icon = toogleIcon.querySelector('i');

    if (field.type === 'password') {
        field.type = 'text';
        icon.classList.remove('b1', 'bi-eye');
        icon.classList.add('bi', 'bi-eye-slash');
    } else {
        field.type = 'password';
        icon.classList.remove('bi', 'bi-eye-slash');
        icon.classList.add('b1', 'bi-eye');
    }
}
