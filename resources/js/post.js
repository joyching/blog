$(function() {
    let postId = $('#postId').val()
    $('#btnComment').on('click', function() {
        createComment(postId)
    })

    async function createComment(postId) {
        try {
            $('body').loading()
            let body = $('#commentBody').val()
            let response = await axios.post(`/posts/${postId}/comments`, {
                comment_body: body
            })

            $('#commentBody').val('')

            let template = $('#comment-template').children()
            template.find('.comment-content h5').text(response.data.user.name)
            template.find('.comment-content p').text(response.data.body)
            template.find('.comment-count .comment-at').append(response.data.created_at)
            template.clone().appendTo('#div-comments')

            $('#comment-amount').text(parseInt($('#comment-amount').text()) + 1)
            $('body').loading('stop')
        } catch (errors) {
            $('body').loading('stop')
            alert('Fail.')
        }
    }
})
