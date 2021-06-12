const opinionForm = document.getElementById('opinionForm');

disableModalBtn()
opinionForm.addEventListener('input', () => {
    const formData = new FormData(document.forms.namedItem('opinionForm'));
    if (formData.get('firstName').match("[A-Za-z]{3,}") && formData.get('lastName').match("[A-Za-z]{3,}")
        && formData.get('email').match("[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$") && formData.get('locationOpinion').length > 10 && formData.get('websiteOpinion').length > 10) {
        enableModalBtn();
    } else {
        disableModalBtn()
    }
})

function getValues() {
    const formData = new FormData(document.forms.namedItem('opinionForm'));
    document.getElementById('firstAndLastName').innerText = formData.get('firstName') + formData.get('lastName');
    document.getElementById('email').innerText = formData.get('email');
    document.getElementById('locationOpinion').innerText = formData.get('locationOpinion');
    document.getElementById('websiteOpinion').innerText = formData.get('websiteOpinion');
}

function disableModalBtn() {
    document.getElementById('modalBtn').style.pointerEvents = 'none'
    document.getElementById('modalBtn').style.color = '#eee'
}

function enableModalBtn() {
    document.getElementById('modalBtn').style.pointerEvents = 'all'
    document.getElementById('modalBtn').style.color = '#fff'
}