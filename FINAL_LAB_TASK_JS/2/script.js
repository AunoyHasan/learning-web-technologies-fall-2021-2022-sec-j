function validate_email() {
    let value = get_element('email').value;
    let get_email = get_element('get_email');

    if (value == '') {
        get_email.innerHTML = 'Email is required';
    } else {
        get_email.innerHTML = '';
        return true;
    }

    return false;
}