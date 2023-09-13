$('.get-btn').click(function (e){
    e.preventDefault();

    let postId = $('input[name="postId"]').val();

    let formData = new FormData();
    formData.append('postId', postId);

    $.ajax({
        url: 'assets/action.php?method=get',
        type: 'POST',
        dataType: 'json',
        processData: false,
        contentType: false,
        cache: false,
        data: formData,
        success (data) {
            if (data.status === false) {
                alert('Произошла ошибка, введите корректный Post Id');
            }
            else
            {
                $('#get-form')[0].reset();

                let response = JSON.parse(data.response);
                if (response.length > 1) {
                    $("#table > tbody").html("");
                    response.forEach(function (item){
                        $('#table').append("<tr> " +
                            "<th scope='row'>" + item.id + "</th>" +
                            "<td>" + item.userId + "</td>" +
                            "<td>" + item.title + "</td>" +
                            "<td>" + item.body + "</td> </tr>")
                    });
                } else {
                    $("#table > tbody").html("");
                    let response = JSON.parse(JSON.parse(JSON.stringify(data.response)));

                    $('#table').append("<tr> " +
                        "<th scope='row'>" + response.id + "</th>" +
                        "<td>" +  response.userId + "</td>" +
                        "<td>" +  response.title + "</td>" +
                        "<td>" +  response.body + "</td> </tr>");
                }
            }

        }
    });
});

$('.post-btn').click(function (e) {
    e.preventDefault();

    let title = $('input[name="title"]').val(),
        body = $('input[name="body"]').val(),
        userId = $('input[name="userId"]').val();

    let formData = new FormData();
        formData.append('title', title);
        formData.append('body', body);
        formData.append('userId', userId);

    $.ajax({
        url: 'assets/action.php?method=post',
        type: 'POST',
        dataType: 'json',
        processData: false,
        contentType: false,
        cache: false,
        data: formData,
        success (data) {
            console.log(data);
            $('#post-form')[0].reset();
            $("#tablePost > tbody").html("");

            let response = JSON.parse(data);

            $('#tablePost').append("<tr> " +
                "<th scope='row'>" + response.id + "</th>" +
                "<td>" +  response.userId + "</td>" +
                "<td>" +  response.title + "</td>" +
                "<td>" +  response.body + "</td> </tr>");
        }

        });
    });