@extends('base')@section('main')
<div class="row">
    <div class="col-sm-12">
        <h1 class="display-3">Contacts</h1>
        <div>
            <a style="margin: 19px;" href="{{ route('contacts.create')}}" class="btn btn-primary">New contact</a>
        </div>
        <table class="table table-striped">
        <thead><tr>
            <td>Type</td>
            <td>Value</td>
            <td colspan = 2>Actions</td>        
        </tr></thead>
        <tbody>        @foreach($contacts as $contact)        <tr>            
            <td>{{$contacts->type}}</td><td>{{$contacts->value}}</td>
            <td><a href="{{ route('contacts.edit',$contacts->id)}}" class="btn btn-primary">Edit</a></td>
            <td><form action="{{ route('contacts.destroy', $contacts->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>            @endforeach        </tbody>
        </table>
    <div>
</div>
@endsection

<div class="col-sm-12">
    @if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
    @endif
</div>