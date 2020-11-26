

function sendCORS() {
    const xhr = new XMLHttpRequest();
    const origin = document.getElementById('origin').value;
    const headers = document.getElementById('headers').value;
    const methods = document.getElementById('methods').value;
    const url = `https://lab.local/cors/resource?origin=${origin}&headers=${headers}&methods=${methods}`;
    const data = {
        "username": "username",
        "password": "password"
    }
    xhr.open('POST', url);
    xhr.setRequestHeader("Content-Type", "application/json")
    xhr.send(JSON.stringify(data));
}