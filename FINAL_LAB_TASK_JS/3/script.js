function validate_gender() {
    let gender = document.querySelectorAll("input[name += gender]");
    let get_gender = get_element('get_gender');

    gender.forEach(function (gen) {
        if (gen.checked) {
            gender = gen.value;
            return;
        }
    });

    if (typeof gender !== 'string') {
        err_gender.innerHTML = 'Gender is require';
    }else {
        err_gender.innerHTML = '';
        return true;
    }

    return false;
}