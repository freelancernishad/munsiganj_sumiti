
<table>
    <thead>
    <tr>
        <th>নাম</th>
        <th>পদবি</th>
        <th>সেশন শুরু (বছর)</th>
        <th>সেশন শেষ (বছর)</th>
        <th>বয়স</th>
        <th>জন্ম তারিখ</th>
        <th>পিতার/স্বামীর নাম</th>
        <th>শিক্ষাগত যোগ্যতা</th>
        <th>পেশা</th>
        <th>সদস্যের বিবরণ</th>
        <th>ফোন নাম্বর</th>
        <th>ইমেইল</th>
        <th>ওয়েবসাইট</th>
        <th>পেশাগত ঠিকানা</th>
        <th>সামজিক উন্নয়ন পূর্ব অভিজ্ঞতা</th>
        <th>বিশেষ সখ</th>
        <th>স্থায়ী গ্রাম</th>
        <th>স্থায়ী ডাকঘর</th>
        <th>স্থায়ী থানা/উপজেলা</th>
        <th>স্থায়ী জেলা</th>
        <th>বর্তমান গ্রাম</th>
        <th>বর্তমান ডাকঘর</th>
        <th>বর্তমান থানা/উপজেলা</th>
        <th>বর্তমান জেলা</th>
        <th>Status</th>
    </tr>
    </thead>
    <tbody>
        @foreach($activecommittee as $committee)
        <tr>
            <td>{{ $committee->name }}</td>
            <td>{{ $committee->Designation }}</td>
            <td>{{ $committee->session_start }}</td>
            <td>{{ $committee->session_end }}</td>
            <td>{{ $committee->age }}</td>
            <td>{{ $committee->dob }}</td>
            <td>{{ $committee->father_name }}</td>
            <td>{{ $committee->education }}</td>
            <td>{{ $committee->occupation }}</td>
            <td>{{ $committee->bio }}</td>
            <td>{{ $committee->phoneNumber }}</td>
            <td>{{ $committee->email }}</td>
            <td>{{ $committee->website }}</td>
            <td>{{ $committee->pesahgot_address }}</td>
            <td>{{ $committee->samagik_unoyon }}</td>
            <td>{{ $committee->hobby }}</td>
            <td>{{ $committee->pr_vill }}</td>
            <td>{{ $committee->pr_post }}</td>
            <td>{{ $committee->pr_thana }}</td>
            <td>{{ $committee->pr_dist }}</td>
            <td>{{ $committee->p_vill }}</td>
            <td>{{ $committee->p_post }}</td>
            <td>{{ $committee->p_thana }}</td>
            <td>{{ $committee->p_dist }}</td>
            <td>{{ $committee->status }}</td>


        </tr>
        @endforeach
    </tbody>
</table>
