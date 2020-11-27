<table class="table table-bordered">

    <tr>
        <td colspan="2" class="text-center">
            <img class="img-thumbnail img-lg" src="{{ asset('public/uploads/images/' . $user->profile) }}">
        </td>
    </tr>
    <tr>
        <td>{{ _lang('First Name') }}</td>
        <td>{{ $user->first_name }}</td>
    </tr>
    <tr>
        <td>{{ _lang('Last Name') }}</td>
        <td>{{ $user->last_name }}</td>
    </tr>
    <tr>
        <td>{{ _lang('Email') }}</td>
        <td>{{ $user->email }}</td>
    </tr>
    <tr>
        <td>{{ _lang('User Type') }}</td>
        <td>{{ ucfirst($user->user_type) }}</td>
    </tr>
    <tr>
        <td>{{ _lang('Status') }}</td>
        <td>
            {!! $user->status == 1 ? status(_lang('Active'), 'success') : status(_lang('In-Active'), 'danger') !!}
        </td>
    </tr>

</table>
