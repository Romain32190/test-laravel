@include('header')
    <body>
      <div class="container ui">
        <table class="ui selectable inverted table">
          <thead>
            <th>Id</th>
            <th>Name Group</th>
            <th>Delete Group</th>
          </thead>
          <tbody>
            @foreach ($groups as $group)
            <tr>
              <td>{{ $group->id }}</td>
              <td>{{ $group->name }}</td>
              <td>
                <a href="group/delete/{{ $group->id }}">
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
