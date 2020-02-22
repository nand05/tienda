var carrito = document.getElementById('dropdownMenuCar');

if (carrito !== null) {
    if (carrito.className.includes("show")) {
        console.log("bingo");
        carrito.style += "display: block;overflow: scroll;max-height: 10rem;overflow-x: hidden;";
    } 
}

