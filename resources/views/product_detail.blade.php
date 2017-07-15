@include('header')
  <body>
    <div class="row">
      <div class="container ui">
        <table class="ui celled table">
          <thead>
            <th>id</th>
            <th>Name product</th>
            <th>Quantity</th>
            <th>Price</th>
          </thead>
          <tbody>
            <td>{{ $product[0]->id }}</td>
            <td>{{ $product[0]->name }}</td>
            <td>{{ $product[0]->quantity }}</td>
            <td>{{ $product[0]->price }}</td>
          </tbody>
        </table>
      </div>
    </div>

    <div class="row">
      <div class="container ui">
        <form class="ui form" action="update/{{ $product[0]->id }}" method="post">
          {{ csrf_field() }}
          <div class="field">
            <label>Name product</label>
            <input type="text" name="name" placeholder="Name product" value="{{ $product[0]->name }}">
          </div>
          <div class="field">
            <label>Quantity</label>
            <input type="text" name="quantity" placeholder="Quantity" value="{{ $product[0]->quantity }}">
          </div>
          <div class="field">
            <label>Price</label>
            <input type="text" name="price" placeholder="Price" value="{{ $product[0]->price }}">
          </div>
          <button class="ui button green" type="submit">Update</button>
        </form>
      </div>
    </div>
  </body>
