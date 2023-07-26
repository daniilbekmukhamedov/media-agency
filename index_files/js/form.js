const userName = document.getElementById("nameInput")
const contacts = document.getElementById("contactsInput")
const industry = document.getElementById("industryNameInput")
const message = document.getElementById("messageNameInput")
const form = document.getElementById("formQuery")
const error = document.getElementById("errorLog")

form.addEventListener('submit', (e) => {
    let messages = []
    let textInputs = [
        userName,
        contacts,
        industry,
        message
    ]
    
    let requiredInputs = [
        userName,
        contacts
    ]

    var requiredInputsMessage = false
    for (let index = 0; index < requiredInputs.length; index++) {
        let element = requiredInputs[index];
        let trimmedElement = element.value.replace(/\s/g, '')
        
        if (trimmedElement === ''|| trimmedElement == null) {
            element.value = ''
            element.classList.add("red")
            requiredInputsMessage = true
        } else {
            element.classList.remove("red")
        }
    }

    if (requiredInputsMessage) {
        messages.push('Заполните обязательные поля')
    }

    let phoneNumber = contacts.value.replace(/[^0-9]/g, "")
    if (phoneNumber === '' || phoneNumber == null || phoneNumber.length < 10) {
        contacts.classList.add("red")
        messages.push('Не верный номер телефона')
    } else {
        contacts.classList.remove("red")
    }
    contacts.value = phoneNumber

    var lengthMessage = false
    for (let index = 0; index < textInputs.length; index++) {
        let TextElement = textInputs[index]

        if (TextElement.value.length > 256) {
            TextElement.classList.add("red")
            lengthMessage = true
        }
    }

    if (lengthMessage) {
        messages.push('Количество символов должно быть менее 256')
    }

    if (messages.length > 0) {
        e.preventDefault()
        error.innerText = messages.join(', ')
    }
})