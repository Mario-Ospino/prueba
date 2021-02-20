$.ajax({
    url: 'controllers/queriesApi.controller.php',
    type: 'GET',
    success: function (response){
        console.log("response",response);
        let contacts = JSON.parse(response);
        console.log("lo que tiene contacts",contacts);
        let template = '';
        contacts.forEach(contact => {
            template += `
            <tr>
                <td>${contact.id}</td>
                <td>${contact.contact_no}</td>
                <td>${contact.lastname}</td>
                <td>${contact.createtime}</td>
            </tr>
            `
        });
        $('#contactslist').html(template);
    }
})