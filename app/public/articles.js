function getAllArticles() {
    fetch('http://localhost/articles')
        .then(result => result.json())
        .then((out) => {
            console.log(out);
        }).catch((err) => console.error(err))
}

function createArticle() {
    const name = document.getElementById('form-name').value;
    const price = document.getElementById('form-price').value;
    const data = {
        'name': name,
        'price': price
    }

    fetch('http://localhost/articles', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(data),
    })
        .then(out => {
            console.log(out)
            name.value = null;
            price.value = null;
        })
        .catch(err => console.error(err));
}

function deleteArticle(id) {
    const url = `http://localhost/articles/${id}`;
    fetch(url, {
        method: 'DELETE',
    })
        .then(out => {
            console.log(`performed delete on ${url}`);
        })
        .catch(err => console.error(err))
}