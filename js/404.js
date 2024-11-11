let canvas = document.getElementById("canvas");
let ctx = canvas.getContext("2d");

function resize() {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
}

function draw() {
    ctx.fillStyle = "black";
    ctx.fillRect(0, 0, canvas.width, canvas.height);
    let imageData = ctx.getImageData(0, 0, canvas.width, canvas.height);
    let data = imageData.data;
    for (let i = 0; i < data.length; i += 4) {
        let color = Math.random() * 255;
        data[i] = color; // red
        data[i + 1] = color; // green
        data[i + 2] = color; // blue
        data[i + 3] = 255; // alpha
    }
    ctx.putImageData(imageData, 0, 0);
    requestAnimationFrame(draw);
}

resize();
draw();
window.addEventListener("resize", resize);
