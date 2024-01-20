

<div class="container m-4">
    <table id="myTable" class="table table-hover table-colspan border">
        <thead>
            <tr>
                <th>S.No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Contact No</th>
                <th>City</th>
                <th>Address</th>
                <th>PIN Code</th>
                <th>Requirements</th>
            </tr>
        </thead>
        <script>
            $(document).ready(function () {
                $('#myTable').DataTable();
            });
        </script>
        
        <!-- @foreach () -->
            <tr>
                <td>{{ $row->id }}</td>
                <td>{{ $row->Name }}</td>
                <td>{{ $row->Email }}</td>
                <td>{{ $row->Contact_No }}</td>
                <td>{{ $row->City }}</td>
                <td>{{ $row->Address }}</td>
                <td>{{ $row->PIN_Code }}</td>
                <td>{{ $row->Requirements }}</td>
            </tr>
        <!-- @endforeach -->
    </table>
</div>
