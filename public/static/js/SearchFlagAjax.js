let iptSearchFlag = document.querySelector('#search-flag');
let containerDataFlags = document.querySelector('#container-data-flags');


iptSearchFlag.addEventListener('input', (e) =>{
    let url = 'http://localhost:8000/search-flag?search-value='+e.target.value;
    
    fetch(url, {
        method: 'GET'
    })
    .then(response => response.json())
    .then(data => renderDataFlags(data));
})

function renderDataFlags(data){
    containerDataFlags.innerHTML = '';
    data.forEach(flag => {
        containerDataFlags.innerHTML += `
         <tr>
            <th>${flag['id']}</th>
            <td>${flag['country_name']}</td>
            <td>${flag['code']}</td>
            <td>${flag['flag_filename']}</td>
            <td>${flag['updated_at']}</td>                    
            <td>${flag['created_at']}</td>                                
            <td>${flag['fk_users']}</td>                                
        </tr> 
        
        `
    });
}