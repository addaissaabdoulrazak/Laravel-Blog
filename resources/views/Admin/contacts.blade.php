@include('head')
<table border="1" style="width:50%;" class="table table-success table-striped">


    <tr>
        <th>Nom</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Subject</th>
        <th>Message</th>
        <th>Create_at</th>
        <th>Action</th>
    </tr>
    @foreach ($contacts as $contact)
    <tr>
        <td>{{ $contact->name }}</td>
        <td>{{ $contact->email }}</td>
        <td>{{ $contact->phone }}</td>
        <td>{{ $contact->subject}}</td>
        <td>{{ $contact->message}}</td>
        <td>{{ $contact->create_at}}</td>
        <td><a href="{{route('contacts.detail',$contact->id)}}" role="button" class="btn btn-info my-1">Edit</a></td>
        <td><a href="{{route('contacts.delete',$contact->id)}}" role="button" class="btn btn-danger">Delete</a></td>
    </tr>
    @endforeach
</table>
@include('foot')