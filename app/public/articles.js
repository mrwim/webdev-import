function getAllArticles() {
    let articles = fetch('http://localhost/articles')
        .then(result => result.json())
        .then((out) => {
            articles = out;
        }).catch((err) => console.error(err))
}
