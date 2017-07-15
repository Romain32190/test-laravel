@include('header')

<body>
  <div class="ui container">
    <h1 class="center">Customer's groups</h1>
    <form class="ui form" action="/group" method="post">
      {{ csrf_field() }}
      <div class="field">
        <label>Name Group</label>
        <input type="text" name="name" placeholder="Name group">
      </div>
        <button class="ui button green" type="submit">Add group</button>
    </form>
  </div>
</body>
