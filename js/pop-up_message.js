let showMessage = (messageText) =>
{
    let messagesDiv = document.querySelector('.messages');

    if (!messagesDiv)
    {
        messagesDiv = document.createElement('div');
        messagesDiv.classList.add('messages');

        document.body.insertAdjacentElement('beforeEnd', messagesDiv);
    }

    let messageP = document.createElement('p');
    messageP.textContent = messageText;
    messagesDiv.insertAdjacentElement('beforeEnd', messageP);

    setInterval(() =>
    {
        messageP.remove();
    }, 1500);
}