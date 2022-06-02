<h2>create your question</h2>

<form action="/" method="post">
    @csrf
    <p>title</p>
    <input type="text" name="quest_title" id="quest_title" placeholder="Enter title question">
    <p>slug</p>
    <input type="text" name="slug" id="slug" placeholder="Enter slug" disabled readonly>
    <p>body</p>
    <input type="text" name="quest_body" id="quest_body" placeholder="Enter question">
    <p>image</p>
    <input type="text" name="quest_pict" id="quest_pict" placeholder="Enter image">
    <input type="submit">
</form>

<script>
    const title = document.querySelector('#quest_title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function() {
        fetch('/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });
</script>