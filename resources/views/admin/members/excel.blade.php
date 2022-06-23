<table>
    <thead>
        <tr>
            <th>memberId</th>
            <th>Reference</th>
            <th>name</th>
            <th>age</th>
            <th>dob</th>
            <th>father_name</th>
            <th>Spouse_name</th>
            <th>education</th>
            <th>occupation</th>
            <th>bio</th>
            <th>permanent_vill</th>
            <th>permanent_post</th>
            <th>permanent_thana</th>
            <th>permanent_dist</th>
            <th>permanent_division</th>

            {{-- <th>p_vill</th>
            <th>p_post</th>
            <th>p_thana</th>
            <th>p_dist</th>
            <th>p_division</th> --}}


            <th>Present_address</th>
            <th>phoneNumber</th>
            <th>phoneNumber2</th>
            <th>email</th>
            <th>website</th>
            <th>pesahgot_address</th>
            <th>blood_group</th>
            <th>nid</th>
            <th>samagik_unoyon</th>
            <th>hobby</th>
            <th>fee</th>
            <th>image</th>
            <th>status</th>
            <th>created_at</th>
            <th>updated_at</th>


        </tr>
    </thead>
    <tbody>
        @foreach ($members as $member)
            <tr>

                <td>{{ $member->memberId }}</td>
                <td>{{ $member->Reference }}</td>
                <td>{{ $member->name }}</td>
                <td>{{ $member->age }}</td>
                <td>{{ $member->dob }}</td>
                <td>{{ $member->father_name }}</td>
                <td>{{ $member->Spouse_name }}</td>
                <td>{{ $member->education }}</td>
                <td>{{ $member->occupation }}</td>
                <td>{{ $member->bio }}</td>
                <td>{{ $member->pr_vill }}</td>
                <td>{{ $member->pr_post }}</td>
                <td>{{ $member->pr_thana }}</td>
                <td>{{ $member->pr_dist }}</td>
                <td>{{ $member->pr_division }}</td>
                {{-- <td>{{ $member->p_vill }}</td>
                <td>{{ $member->p_post }}</td>
                <td>{{ $member->p_thana }}</td>
                <td>{{ $member->p_dist }}</td>
                <td>{{ $member->p_division }}</td> --}}
                <td>{{ $member->Present_address }}</td>
                <td>{{ $member->phoneNumber }}</td>
                <td>{{ $member->phoneNumber2 }}</td>
                <td>{{ $member->email }}</td>
                <td>{{ $member->website }}</td>
                <td>{{ $member->pesahgot_address }}</td>
                <td>{{ $member->blood_group }}</td>
                <td>{{ $member->nid }}</td>
                <td>{{ $member->samagik_unoyon }}</td>
                <td>{{ $member->hobby }}</td>
                <td>{{ $member->fee }}</td>
                <td>{{ $member->image }}</td>
                <td>{{ $member->status }}</td>
                <td>{{ $member->created_at }}</td>
                <td>{{ $member->updated_at }}</td>



            </tr>
        @endforeach
    </tbody>
</table>
