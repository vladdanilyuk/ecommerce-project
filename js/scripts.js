function showDetails(productId) {
    fetch('product_details.php?id=' + productId)
        .then(response => response.text())
        .then(data => {
            document.getElementById('modal-details').innerHTML = data;
            document.getElementById('productModal').style.display = 'block';
        });
}

function closeModal() {
    document.getElementById('productModal').style.display = 'none';
}
