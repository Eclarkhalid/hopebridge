// assets/js/blog.js
function createComment(postId, content) {
  fetch('/api/blog/comments.php', {
      method: 'POST',
      headers: {
          'Content-Type': 'application/json'
      },
      body: JSON.stringify({
          post_id: postId,
          content: content
      })
  })
  .then(response => response.json())
  .then(result => {
      if(result.success) {
          location.reload();
      }
  });
}