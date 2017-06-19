<table class="table table-responsive" id="tags-table">
    <thead>
        <th>Name</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($tags as $tag)
        <tr>
            <td>{!! $tag->name !!}</td>
            <td>
                {!! Form::open(['route' => ['tags.destroy', $tag->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tags.show', [$tag->id]) !!}" class='btn btn-default'>Show</a>
                    <a href="{!! route('tags.edit', [$tag->id]) !!}" class='btn btn-primary'>Edit</a>
                    {!! Form::button('Delete', ['type' => 'submit', 'class' => 'btn btn-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>