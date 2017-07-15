@include('header')
    <body>
      <div class="container ui">
        <table class="ui selectable inverted gray table">
          <thead>
            <th>Id</th>
            <th>Name product</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>More details</th>
            <th>Delete</th>
          </thead>
          <tbody>
            @foreach ($products as $product)
            <tr>
              <td>{{ $product->id }}</td>
              <td>{{ $product->name }}</td>
              <td>{{ $product->quantity }}</td>
              <td>{{ $product->price }}</td>
              <td>
                <a href="product/{{ $product->id }}">
                  <div class="ui animated button" tabindex="0">
                    <div class="visible content">Details</div>
                    <div class="hidden content">
                      <i class="right arrow icon"></i>
                    </div>
                  </div>
                </a>
              </td>
              <td>

                <a href="product/delete/{{ $product->id }}">
                  <div class="ui animated red button" tabindex="0">
                    <div class="visible content">Delete</div>
                    <div class="hidden content">
                      <i class="trash icon"></i>
                    </div>
                  </div>
                </div>
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

      </div>
    </body>
