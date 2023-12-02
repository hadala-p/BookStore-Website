// Pobierz wszystkie przyciski "Usu�"
const removeButtons = document.querySelectorAll('.remove-button');

// Obs�u� klikni�cie przycisku "Usu�" dla ka�dej ksi��ki w koszyku
removeButtons.forEach(button => {
    button.addEventListener('click', () => {
        // Pobierz identyfikator ksi��ki z atrybutu data
        const bookId = button.getAttribute('data-book-id');

        // Wy�lij identyfikator ksi��ki do PHP za pomoc� zapytania AJAX
        fetch('cart_functions.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: 'book_id=' + bookId,
        })
        .then(response => {

            location.reload(); // od�wie� strone
        })
        .catch(error => {
            console.error('B��d AJAX:', error);
        });
    });
});