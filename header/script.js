 // JavaScript for filtering items
 const filterButtons = document.querySelectorAll('.filter-button');
 const itemContainer = document.getElementById('item-container');

 filterButtons.forEach(button => {
     button.addEventListener('click', () => {
         const category = button.getAttribute('data-category');
         
         itemContainer.querySelectorAll('.item').forEach(item => {
             if (category === 'all' || item.getAttribute('data-category') === category) {
                 item.style.display = 'inline-block';
             } else {
                 item.style.display = 'none';
             }
         });
     });
 });