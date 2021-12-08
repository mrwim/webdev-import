function addItem() {

    const textarea = document.getElementById('todoText');
    const row = document.getElementById('itemList');

    // Create a new column in the row. This is the top element
    const col = document.createElement('div');
    col.className = 'col-md-6 col-xxl-4 p-1';

    // create card, card body, card text, card footer with button
    const card = document.createElement('div');
    card.className = 'card';

    const cardBody = document.createElement('div');
    cardBody.className = 'card-body';

    const cardText = document.createElement('p');
    cardText.innerHTML = textarea.value;

    const cardFooter = document.createElement('div');
    cardFooter.className = 'card-footer';

    // create button and add listener
    const button = document.createElement('button');
    button.className = 'btn btn-outline-danger';
    button.append('Delete')
    button.addEventListener("click", () => row.removeChild(col));

    // compose the card from its children and add it to the DOM
    cardFooter.appendChild(button);
    cardBody.appendChild(cardText);
    card.appendChild(cardBody);
    card.appendChild(cardFooter);
    col.appendChild(card);
    row.appendChild(col);

    // clear textarea
    textarea.value = '';
}