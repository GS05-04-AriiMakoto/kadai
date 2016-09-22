var formData = new FormData();
formData.append("name", "email", "naiyou");

$.ajax({
    url: '/08/',
    type: 'post',
    data: formData
})