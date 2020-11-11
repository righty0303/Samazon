<h1>New Products</h1>

<form method="POST" action="/products">
    {{ csrf_field() }}
    <input type="text" name="name">
    <textarea name="description"></textarea>
    <input type="number" name="price">
    <button type="submit">Create</button>
</form>

<a href="/products">Back</a>
