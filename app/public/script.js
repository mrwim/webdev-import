function addItem() {

    const textarea = document.getElementById('todoText');

    const container = document.getElementById('itemList');

    const card = document.createElement('div');
    card.className = 'col-md-6 col-xxl-4 p-1';

    const cardElement = document.createElement('div');
    cardElement.className = 'card';

    const cardBody = document.createElement('div');
    cardBody.className = 'card-body';

    const cardText = document.createElement('p');
    cardText.innerHTML = textarea.value;

    cardBody.appendChild(cardText);
    cardElement.appendChild(cardBody);
    card.appendChild(cardElement);

    container.appendChild(card);

    textarea.value = '';

}