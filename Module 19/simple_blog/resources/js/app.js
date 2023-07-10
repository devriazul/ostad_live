import './bootstrap';

import axios from 'axios';

// Handle comment form submission
const commentForm = document.getElementById('comment-form');

commentForm.addEventListener('submit', async (event) => {
    event.preventDefault();

    const blogPostId = document.getElementById('blog-post-id').value;
    const content = document.getElementById('comment-content').value;

    try {
        const response = await axios.post('/api/comments', {
            blog_post_id: blogPostId,
            content: content
        });

        alert(response.data.message);

        document.getElementById('comment-content').value = '';
    } catch (error) {
        console.error(error);
        alert('An error occurred while submitting the comment.');
    }
});

