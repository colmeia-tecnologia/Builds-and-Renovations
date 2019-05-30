function like(id, action, token) {
    $.ajax
    ({
        type: "POST",
        url: "/blog/post-like",
        data: 
        {
            id: id,
            action: action,
            _token: token
        },
        success: function(data)
        {
            id = data[0]['id'];
            action = data[0]['action'];
            token = data[0]['_token'];
            likes = data[1];

            if(action == 'like') {
                $('#likeLink').attr("onclick","like('"+id+"', 'dislike', '"+token+"')");
                $('#likeIcon').removeClass('fa-heart-o');
                $('#likeIcon').addClass('fa-heart');
                $('#likesCount').html(likes);
            }
            else if(action == 'dislike') {
                $('#likeLink').attr("onclick","like('"+id+"', 'like', '"+token+"')");
                $('#likeIcon').removeClass('fa-heart');
                $('#likeIcon').addClass('fa-heart-o');
                $('#likesCount').html(likes);
            }
        }
    });
}