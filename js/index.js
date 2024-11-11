const backgrounds = [
    '../img/background1.jpg', 
    '../img/background2.jpg', 
    '../img/background3.jpg' 
];

const randomIndex = Math.floor(Math.random() * backgrounds.length);
document.body.style.backgroundImage = `url('${backgrounds[randomIndex]}')`;
