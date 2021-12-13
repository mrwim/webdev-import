function getAllArticles() {
    let articles = fetch('http://localhost/articles')
        .then(result => result.json())
        .then((out) => {
            articles = out;
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
        })
        .catch(err => console.error(err));
}
