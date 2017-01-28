                  <th>Naam</th>
                  <!-- <th>Adres </th> -->
                  <th>Email</th>
                  <th>Studentnummer</th>
                  <th>Iban</th>
                  <th>T.N.V.</th>
                </tr>

                @foreach($users as $user)
                <tr>
                    <td> {{ $user->name }} </td>
                    <!-- <td> {{ $user->address }}  </td> -->
                    <td> {{ $user->profile->email_address }} </td>
                    <td> {{ $user->profile->student_number }} </td>
                    <td> {{ $user->profile->iban }} </td>
                    <td> {{ $user->profile->tnv }}</td>

                </tr>
                @endforeach
