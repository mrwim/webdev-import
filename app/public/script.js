document.onload = () => {
    changeBackground();
}

function addElement() {
    console.log('In addElement');
    const newDiv = document.createElement('div');
    const newContent = document.createTextNode("Hi there, and greetings");
    newDiv.appendChild(newContent);
    const currentDiv = document.getElementById('div1');
    document.body.insertBefore(newDiv, currentDiv);
}

function changeBackground() {

    const slider1 = document.getElementById('slider1');
    const slider2 = document.getElementById('slider2');
    const slider3 = document.getElementById('slider3');

    document.getElementById('text1').innerHTML = slider1.value;
    document.getElementById('text2').innerHTML = slider2.value;
    document.getElementById('text3').innerHTML = slider3.value;

    document.body.style.background = 'rgb(' + [slider1.value, slider2.value, slider3.value].join(',') + ')';
}
