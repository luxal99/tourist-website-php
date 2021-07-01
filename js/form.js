const opinionForm = document.getElementById('opinionForm');
function send() {
    const firstName = opinionForm.elements.namedItem('firstName').value;
    const lastName = opinionForm.elements.namedItem('lastName').value;
    const email = opinionForm.elements.namedItem('email').value;
    const locationOpinion = opinionForm.elements.namedItem('locationOpinion').value;
    const websiteOpinion = opinionForm.elements.namedItem('websiteOpinion').value;
    alert(`
        First and last name: ${firstName} ${lastName} \n
        Email: ${email}
        Location opinion: ${locationOpinion}
        Web: ${websiteOpinion}
    `)

}
