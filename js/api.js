let url = location.href;
axios.get(`${url}/api/api.php`)
    .then(function (response) {
        console.log(response.data);
                
        const tbody = document.getElementById('userTable').querySelector('tbody');


        response.data.forEach(user => {
            const row = document.createElement('tr');
            row.innerHTML = `
                <td class="text-center">${user.id}</td>
                <td class="text-center">${user.username}</td>
                <td class="text-center">${user.email}</td>
            `;
            tbody.appendChild(row);
        });
    })
    .catch(function (error) {
            // handle error
            console.error('Error:', error.response ? error.response.data : error.message);
    });
