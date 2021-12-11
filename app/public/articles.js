document.addEventListener('load', fetch('https://swapi.dev/api/people/')
    .then(result => result.json())
    .then((out) => {
        console.log('Output: ', out);
    }).catch((err) => console.error(err)));