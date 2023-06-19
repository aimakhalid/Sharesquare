
<!DOCTYPE html>
<html>
<head>
    
    <title>ShareSquare</title>
    <script>
        function incrementCount(type, postId) {
            var countElement = document.getElementById(type + '-count-' + postId);
            var count = parseInt(countElement.textContent);
            count++;
            countElement.textContent = count;
        }

        function toggleCommentInput(postId) {
            var commentInput = document.getElementById('comment-input-' + postId);
            var commentButton = document.getElementById('comment-button-' + postId);

            if (commentInput.style.display === 'none') {
                commentInput.style.display = 'block';
                commentButton.textContent = 'Save';
            } else {
                var commentContent = commentInput.value;

                // Update the UI with the comment
                var commentDisplay = document.getElementById('comment-display-' + postId);
                var commentItem = document.createElement('li');
                commentItem.textContent = commentContent;
                commentDisplay.appendChild(commentItem);

                commentInput.style.display = 'none';
                commentButton.textContent = 'Comment';
                commentInput.value = '';
            }
        }

        function deletePost(postId) {
            var postElement = document.getElementById('post-' + postId);
            postElement.remove();
        }
    </script>
</head>
<body style="font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: beige;">
<header style= "background-color: #C4A484; padding: 10px; color: #fff; text-align: center;" >
        <div style="max-width: 960px;  margin: 0 auto;  padding: 20px;">
            <div style="text-align: left;">
                <h1 style="text-align: center; font-family: monospace;">ShareSquare</h1>
            </div>
            <div style="text-align: left;">
                <a style="color: #fff; text-decoration: none; margin-left: 10px;" href="index.php">Logout</a>
                <a style="color: #fff; text-decoration: none; margin-left: 10px;" href="addpost.php">Add Post</a>
                <a style="color: #fff; text-decoration: none; margin-left: 10px;" href="file.php">Profile</a>
            </div>
        </div>
    </header>

    <div style="max-width: 960px;  margin: 0 auto;  padding: 20px;">
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); grid-gap: 20px;">
            <div style=" margin-bottom: 20px; border: 1px solid #ccc; padding: 10px;" id="post-1">
                <div style="text-align: center;
            margin-bottom: 10px;">
                    <img src="image1.jpg" alt="Image 1" width="300">
                </div>
                <!-- <p>Post 1 content goes here...</p> -->
                <div style="display: flex;
            justify-content: space-between;">
                    <a style="color: #333; text-decoration: none; margin-right: 10px;" href="#" onclick="incrementCount('like', 1)">Like</a>
                    <a style="color: #333; text-decoration: none; margin-right: 10px;" href="#" onclick="incrementCount('dislike', 1)">Dislike</a>
                    <a style="color: #333; text-decoration: none; margin-right: 10px;" href="#" onclick="toggleCommentInput(1)" id="comment-button-1">Comment</a>
                    <a style="color: #333; text-decoration: none; margin-right: 10px;" href="#" onclick="deletePost(1)">Delete</a>
                </div>
                <div>
                    <span id="like-count-1">0</span> Likes |
                    <span id="dislike-count-1">0</span> Dislikes
                </div>
                <div id="comment-display-1">
                    <ul style="list-style-type: none; padding: 0; margin-top: 10px;"></ul>
                </div>
                <textarea style=" display: none; margin-top: 10px;" id="comment-input-1" rows="2"></textarea>
            </div>

            <div style=" margin-bottom: 20px; border: 1px solid #ccc; padding: 10px;" id="post-2">
                <div style="text-align: center;
            margin-bottom: 10px;">
                    <img src="image2.jpg" alt="Image 2" width="300">
                </div>
                <!-- <p>Post 2 content goes here...</p> -->
                <div style="display: flex;
            justify-content: space-between;">
                    <a style="color: #333; text-decoration: none; margin-right: 10px;" href="#" onclick="incrementCount('like', 2)">Like</a>
                    <a style="color: #333; text-decoration: none; margin-right: 10px;" href="#" onclick="incrementCount('dislike', 2)">Dislike</a>
                    <a style="color: #333; text-decoration: none; margin-right: 10px;" href="#" onclick="toggleCommentInput(2)" id="comment-button-2">Comment</a>
                    <a style="color: #333; text-decoration: none; margin-right: 10px;" href="#" onclick="deletePost(2)">Delete</a>
                </div>
                <div>
                    <span id="like-count-2">0</span> Likes |
                    <span id="dislike-count-2">0</span> Dislikes
                </div>
                <div id="comment-display-2">
                    <ul style="list-style-type: none; padding: 0; margin-top: 10px;"></ul>
                </div>
                <textarea style="  display: none; margin-top: 10px;" id="comment-input-2" rows="2"></textarea>
            </div>

            <div style=" margin-bottom: 20px; border: 1px solid #ccc; padding: 10px;" id="post-3">
                <div style="text-align: center;
            margin-bottom: 10px;">
                    <img src="image3.jpg" alt="Image 3" width="300">
                </div>
                <!-- <p>Post 3 content goes here...</p> -->
                <div style="display: flex;
            justify-content: space-between;">
                    <a style="color: #333; text-decoration: none; margin-right: 10px;" href="#" onclick="incrementCount('like', 3)">Like</a>
                    <a style="color: #333; text-decoration: none; margin-right: 10px;" href="#" onclick="incrementCount('dislike', 3)">Dislike</a>
                    <a style="color: #333; text-decoration: none; margin-right: 10px;" href="#" onclick="toggleCommentInput(3)" id="comment-button-3">Comment</a>
                    <a style="color: #333; text-decoration: none; margin-right: 10px;" href="#" onclick="deletePost(3)">Delete</a>
                </div>
                <div>
                    <span id="like-count-3">0</span> Likes |
                    <span id="dislike-count-3">0</span> Dislikes
                </div>
                <div id="comment-display-3">
                    <ul style="list-style-type: none; padding: 0; margin-top: 10px;"></ul>
                </div>
                <textarea style=" display: none; margin-top: 10px;" id="comment-input-3" rows="2"></textarea>
            </div>

            <div style=" margin-bottom: 20px;
            border: 1px solid #ccc;
            padding: 10px;" id="post-4">
                <div style="text-align: center;
            margin-bottom: 10px;">
                    <img src="image4.jpg" alt="Image 4" width="300">
                </div>
                <!-- <p>Post 4 content goes here...</p> -->
                <div style="display: flex;
            justify-content: space-between;">
                    <a style="color: #333; text-decoration: none; margin-right: 10px;" href="#" onclick="incrementCount('like', 4)">Like</a>
                    <a style="color: #333; text-decoration: none; margin-right: 10px;" href="#" onclick="incrementCount('dislike', 4)">Dislike</a>
                    <a style="color: #333; text-decoration: none; margin-right: 10px;" href="#" onclick="toggleCommentInput(4)" id="comment-button-4">Comment</a>
                    <a style="color: #333; text-decoration: none; margin-right: 10px;" href="#" onclick="deletePost(4)">Delete</a>
                </div>
                <div>
                    <span id="like-count-4">0</span> Likes |
                    <span id="dislike-count-4">0</span> Dislikes
                </div>
                <div id="comment-display-4">
                    <ul style="list-style-type: none; padding: 0; margin-top: 10px;"></ul>
                </div>
                <textarea style="display: none; margin-top: 10px;" id="comment-input-4" rows="2"></textarea>
            </div>
        </div>
    </div>

    <footer style="background-color: #C4A484; padding: 10px; color: #fff; text-align: center; position: relative; bottom: 0; left: 0; width: 100%;">
        <div style="max-width: 960px;  margin: 0 auto;  padding: 20px;">
            <p>&copy; 2023 ShareSquare. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
