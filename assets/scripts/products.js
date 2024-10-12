// products dynamic popup 

document.addEventListener('DOMContentLoaded', function() {
    var cards = document.querySelectorAll('.card');
    cards.forEach(function(card) {
        card.addEventListener('click', function() {
            var title = card.getAttribute('data-title');
            var image = card.getAttribute('data-image');
            var description = card.getAttribute('data-description');
            
            document.getElementById('modal-title').innerText = title;
            document.getElementById('modal-image').src = image;
            document.getElementById('modal-image').alt = title;
            document.getElementById('modal-description').innerText = description;
            
            document.getElementById('modal').style.display = 'block';
        });
    });
    
    var modalClose = document.getElementById('modal-close');
    modalClose.addEventListener('click', function() {
        document.getElementById('modal').style.display = 'none';
    });
    
    var modal = document.getElementById('modal');
    modal.addEventListener('click', function(event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    });
});
