<table class="table table-bordered">

    <tr>
        <td>{{ _lang('Name') }}</td>
        <td>{{ $category->name }}</td>
    </tr>
    <tr>
        <td>{{ _lang('Slug') }}</td>
        <td>{{ $category->slug }}</td>
    </tr>
    <tr>
        <td>{{ _lang('Description') }}</td>
        <td>{{ $category->description }}</td>
    </tr>
    <tr>
        <td>{{ _lang('Parent') }}</td>
        <td>{{ $category->parent->name }}</td>
    </tr>
    <tr>
        <td>{{ _lang('Status') }}</td>
        <td>
            {!! $category->status == 1 ? status(_lang('Active'), 'success') : status(_lang('In-Active'), 'danger') !!}
        </td>
    </tr>

</table>
