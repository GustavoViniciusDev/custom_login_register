function togglePostContainer() {
    var postContainer = document.getElementById('postContainer');
    var newPostButton = document.getElementById('newPostButton');

    postContainer.style.display = 'block';
    newPostButton.style.display = 'none';
  }

  function closePostContainer() {
    var postContainer = document.getElementById('postContainer');
    var newPostButton = document.getElementById('newPostButton');

    postContainer.style.display = 'none';
    newPostButton.style.display = 'block';
  }