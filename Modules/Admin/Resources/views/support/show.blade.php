@extends('admin::layout')

@component('admin::components.page.header')
@slot('title', 'Support')

<li class="active">{{ 'Support' }}</li>
@endcomponent

@component('admin::components.page.index_table')
<table class="table table-striped table-dark">
    <thead>
        <tr>
            <th scope="col">Title</th>
            <th scope="col">Info</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>First Name: </td>
            <td>{{ $support->f_name}}</td>
        </tr>
        <tr>
        <tr>
            <td>Last Name: </td>
            <td>{{ $support->l_name}}</td>
        </tr>
        <tr>

        <tr>
            <td>Email: </td>
            <td>{{ $support->email}}</td>
        </tr>
        <tr>
        <tr>
            <td>Phone: </td>
            <td>{{ $support->phone}}</td>
        </tr>
        <tr>

        <tr>
            <td>Subject: </td>
            <td>{{ $support->subject}}</td>
        </tr>
        <tr>
        <tr>
            <td>Message: </td>
            <td>{{ $support->message}}</td>
        </tr>
        <tr>
            <td>Status: </td>
            <td>
                <select name="" id="status" data-id="{{$support->id}}">
                    <option value="open" {{$support->status == 'open' ? 'selected' : ''}}>open</option>
                    <option value="closed" {{$support->status == 'closed' ? 'selected' : ''}}>closed</option>
                </select>
            </td>
        </tr>


    </tbody>
</table>
<hr>
<div class="">
    <h4 class="mb-4">Replay to ticket</h4>
    <form action="{{ route('admin.support.replay') }}" method="POST" class="text-right">
        @csrf
        <input type="hidden" name="email" value="{{$support->email}}">
        <textarea style="width: 100%" name="replay" id=""  rows="3"></textarea>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
</div>


@endcomponent




@push('scripts')
<script>
    $("#status").on('change', function(){
        var status = $(this).val();
        var id = $(this).data('id');
        $.ajax({
            url: "/admin/support/"+id,
            type: 'POST',
            data: {
                status: status,
                _token: "{{ csrf_token() }}"
            },
            success: function(data){
                console.log(data);
            }
        });
    });
</script>
@endpush
