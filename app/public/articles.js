window.addEventListener('DOMContentLoaded', (event) => {
    getAllArticles();
});

function getAllArticles() {
    console.log('getting the data');
    const articlesDataElement = document.getElementById('articles-data');
    articlesDataElement.innerHTML = '';
    fetch('http://localhost/articles')
        .then(result => result.json())
        .then((out) => {
            console.log(out);
            displayArticles(out);
        })
        .catch((err) => console.error(err))
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
            name.value = null;
            price.value = null;
            getAllArticles();
        })
        .catch(err => console.error(err));
}

function deleteArticle(id) {
    const url = `http://localhost/articles/${id}`;
    fetch(url, {
        method: 'DELETE',
    })
        .then(out => {
            getAllArticles()
        })
        .catch(err => console.error(err))
}

function displayArticles(data) {
    const articlesDataElement = document.getElementById('articles-data');
    data.forEach(
        article => {
            articlesDataElement.innerHTML +=
                `<tr>
                        <td class="col">${article.id}</td>
                        <td class="col">${article.name}</td>
                        <td class="col">${article.price}</td>
                        <td class="col"><button class="btn btn-outline-danger" onclick="deleteArticle(${article.id})">Delete</button></td>
                </tr>`;
        }
    )
}