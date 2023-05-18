document.getElementById("opcion").addEventListener("change", function() {
    var opcionSeleccionada = this.value;
    var valoresCuadrado = document.getElementById("valores-cuadrado");
    var valoresRectangulo = document.getElementById("valores-rectangulo");

    if (opcionSeleccionada === "a") {
        valoresCuadrado.style.display = "block";
        valoresRectangulo.style.display = "none";
    } else if (opcionSeleccionada === "b") {
        valoresCuadrado.style.display = "none";
        valoresRectangulo.style.display = "block";
    }
});