export function serverResponse(urlRequest) {
    let request = new XMLHttpRequest();
    request.open('GET', urlRequest, false);
    request.send();
    if (request.status !== 200) {
        console.log(request.status + ': ' + request.statusText);
    } else {
        let response = request.responseText;
        response = JSON.parse(response);
        return response;
    }
}

export function sendOrder(name, quantity, price, type) {
    return "https://playground24.ru/dsxt-api/send_order.php?name=" + name + "&quantity=" + quantity + "&price=" + price + "&type=" + type;
}

export function getOrders() {
    return "https://playground24.ru/dsxt-api/get_orders.php?request=true";
}

export function acceptOrders(id) {
    return "https://playground24.ru/dsxt-api/accept_order.php?id=" + id;
}
