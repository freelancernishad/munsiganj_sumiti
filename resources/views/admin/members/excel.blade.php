
<table>
    <thead>
    <tr>
        <th>Member Id</th>
        <th>Name</th>
        <th>Birthday</th>
        <th>Father's Name</th>
        <th>Spouse Name</th>
        <th>Educational Qualifications</th>
        <th>Occupation</th>
        <th>Contact Number 1</th>
        <th>Contact Number 2</th>
        <th>Email</th>
        <th>Website</th>
        <th>Professional address</th>
        <th>Blood group</th>
        <th>National ID NO</th>
        <th>District</th>
        <th>Thana/Upazila</th>
        <th>Union</th>
        <th>Village</th>
        <th>Present address</th>
        <th>Short Bio</th>
        <th>Reference Id</th>
    </tr>
    </thead>
    <tbody>
        @foreach($members as $member)
        <tr>
            <td>{{ $member->memberId }}</td>
            <td>{{ $member->name }}</td>
            <td>{{ $member->dob }}</td>
            <td>{{ $member->father_name }}</td>
            <td>{{ $member->Spouse_name }}</td>
            <td>{{ $member->education }}</td>
            <td>{{ $member->occupation }}</td>
            <td>{{ $member->phoneNumber }}</td>
            <td>{{ $member->phoneNumber2 }}</td>
            <td>{{ $member->email }}</td>
            <td>{{ $member->website }}</td>
            <td>{{ $member->pesahgot_address }}</td>
            <td>{{ $member->blood_group }}</td>
            <td>{{ $member->nid }}</td>
            <td>{{ $member->pr_dist }}</td>
            <td>{{ $member->pr_thana }}</td>
            <td>{{ $member->pr_post }}</td>
            <td>{{ $member->pr_vill }}</td>
            <td>{{ $member->Present_address }}</td>
            <td>{{ $member->bio }}</td>
            <td>{{ $member->Reference }}</td>

        </tr>
        @endforeach
    </tbody>
</table>
