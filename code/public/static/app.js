

function sendCORS() {
    const xhr = new XMLHttpRequest();
    const acao = document.getElementById('acao').value;
    const url = `/cors/resource?acao=${acao}`;

    xhr.open('GET', url);
    xhr.send();

}