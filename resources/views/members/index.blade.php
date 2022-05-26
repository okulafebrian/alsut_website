<x-layout>
    <div class="container mt-5 py-4">
        <div class="header my-4">
            <div class="section-line"></div>
            <h2 class="fw-bolder text-teal">Member</h2>
        </div>

        <div class="card">
            <div class=" card-body">
                <div class="row align-middle">
                    <div class="col align-middle">
                        <div class="btn-group">
                            <button class="btn btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Presidency
                            </button>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item">1</li>
                                <li class="dropdown-item">2</li>
                                <li class="dropdown-item">3</li>
                                <li class="dropdown-item">4</li>
                                <li class="dropdown-item">5</li>
                                <li class="dropdown-item">6</li>
                                <li class="dropdown-item">7</li>
                                <li class="dropdown-item">8</li>
                                <li class="dropdown-item">9</li>
                                <li class="dropdown-item active" aria-current="true">10</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="member-table mt-4">
            <table class="table table-sm table-hover" id="members">
                <thead class="thead-light">
                    <tr>
                        <th scope="col" class="align-middle text-center">ID</th>
                        <th scope="col" class="align-middle text-center">
                            Name
                        </th>
                        <th scope="col" class="align-middle text-center">
                            Gender
                        </th>
                        <th scope="col" class="align-middle text-center">
                            NIM
                        </th>
                        <th scope="col" class="align-middle text-center text-wrap">
                            Major
                        </th>
                        <th scope="col" class="align-middle text-center">
                            LINE ID
                        </th>
                        <th scope="col" class="align-middle text-center">
                            Phone Number
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($members as $member)
                        <tr>
                            <td class="align-middle text-center py-3">
                                {{ $member->id }}
                            </td>
                            <td class="align-middle text-center">
                                {{ $member->name }}
                            </td>
                            <td class="align-middle text-center">
                                {{ $member->gender }}
                            </td>
                            <td class="align-middle text-center">
                                {{ $member->nim }}
                            </td>
                            <td class="align-middle text-center">
                                {{ $member->major }}
                            </td>
                            <td class="align-middle text-center">
                                {{ $member->line_id }}
                            </td>
                            <td class="align-middle text-center">
                                {{ $member->phone_number }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>



    </div>
</x-layout>
