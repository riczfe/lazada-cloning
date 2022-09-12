for (var i = 0, len = localStorage.length; i < len; ++i) {
    var element = document.createElement("p")
    element.textContent = localStorage.getItem(localStorage.key(i))
    output.appendChild(element)
}