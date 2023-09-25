const itemsPerPage = 10;
        const content = document.getElementById('item-container');
        const pagination = document.getElementById('pagination');
        const items = Array.from(content.getElementsByClassName('item'));
        
        let currentPage = 1;
        
        function displayItems() {
            const start = (currentPage - 1) * itemsPerPage;
            const end = start + itemsPerPage;
            
            items.forEach((item, index) => {
                if (index >= start && index < end) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        }
        
        function createPaginationLinks() {
            const pageCount = Math.ceil(items.length / itemsPerPage);
            
            for (let i = 1; i <= pageCount; i++) {
                const li = document.createElement('li');
                li.textContent = i;
                li.addEventListener('click', () => {
                    currentPage = i;
                    displayItems();
                    updatePaginationLinks();
                });
                pagination.appendChild(li);
            }
        }
        
        function updatePaginationLinks() {
            const links = pagination.getElementsByTagName('li');
            for (let i = 0; i < links.length; i++) {
                if (i === currentPage - 1) {
                    links[i].classList.add('active');
                } else {
                    links[i].classList.remove('active');
                }
            }
        }
        
        createPaginationLinks();
        displayItems();
        updatePaginationLinks();