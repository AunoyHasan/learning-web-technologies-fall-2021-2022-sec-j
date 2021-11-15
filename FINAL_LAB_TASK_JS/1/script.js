function validate_name() {
    let value = get_element('name').value;
    let err_name = get_element('err_name');

    if (value.length === 0) {
        err_name.innerHTML = 'Name is required';
    } else if (value.length < 2) {
        err_name.innerHTML = 'Name must be at least 2 characters';
    } else {
        err_name.innerHTML = '';
        return true;
    }

    return false;
}