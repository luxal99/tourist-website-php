const contactForm = document.getElementById('contact');

disableModalBtn()
contactForm.addEventListener('input', () => {
    const formData = new FormData(document.forms.namedItem('contact'));
    if (formData.get('fullName').match("[A-Za-z]{3,}") && formData.get('email').match("[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$") &&
        formData.get('message').length > 10) {
        enableModalBtn();
    } else {
        disableModalBtn()
    }
})

function getValues() {
    const formData = new FormData(document.forms.namedItem('contact'));
    alert(`Full name: ${formData.get('fullName')}, \nEmail:${formData.get('email')} \n Message:${formData.get('message')}`)
    if (confirm('Send data')) {
        sendData()
    }
}

function sendData() {
    const formData = new FormData(document.forms.namedItem('contact'));
    fetch('http://localhost:3000/pages/contact.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded;charset=UTF-8'
        },
        body: new URLSearchParams({
            'fullName': formData.get('fullName'),
            'email': formData.get('email'),
            'message': formData.get('message'),
        })
    }).then(res => {
        if (res.status === 200) {
            alert('Success!')
        } else {
            alert('Error!')
        }
    })
}

function disableModalBtn() {
    document.getElementById('submitBtn').style.pointerEvents = 'none'
    document.getElementById('submitBtn').style.color = '#eee'
}

function enableModalBtn() {
    document.getElementById('submitBtn').style.pointerEvents = 'all'
    document.getElementById('submitBtn').style.color = '#fff'
}