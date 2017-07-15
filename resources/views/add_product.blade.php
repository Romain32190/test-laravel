@include('header')

<body>
  <div class="ui container">
    <h1 class="center">Customer's products</h1>
    <form class="ui form" action="/product" method="post">
      {{ csrf_field() }}
      <div class="field">
        <label>Name product</label>
        <input type="text" name="name" placeholder="Name product">
      </div>
      <div class="field">
        <label>Quantity</label>
        <input type="text" name="quantity" placeholder="Quantity">
      </div>
      <div class="field">
        <label>Price</label>
        <input type="text" name="price" placeholder="Price">
      </div>
        <button class="ui button green" type="submit">Add product</button>
    </form>
  </div>
</body>
