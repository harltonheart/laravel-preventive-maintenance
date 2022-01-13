<div class="table-responsive">
    <table class="table">
        <thead class="border border-dark thead-dark">
        <tr>
            <th>ID</th>
            <th class="col-6">Department</th>
            <th class="col-2"><center>Total Computer</center></th>
            <th class="col-2"><center>Total Records</center></th>
            <th class="col-2"><center>Year Added</center></th>
        </tr>
        </thead>
        <tbody class="border">
            @foreach($dept as $departments)
                <tr class='clickable-row @if($loop->even) stripe-table text-white @else text-odd @endif' data-href='/summary/{{$departments->id}}'>
                    <td>{{$departments->id}}</td>
                    <th><a href="/summary/{{$departments->id}}" class="@if($loop->even) text-light @else text-primary @endif'">{{$departments->department}}</a></th>
                    <td><center>{{ $departments->computers_count_pcname }}</center></td>
                    <td><center>{{ $departments->computers_count }}</center></td>
                    <td><center>{{ $departments->created_at->year }}</center></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<script>
    $(document).ready(function($) {
        $(".clickable-row").click(function() {
            window.location = $(this).data("href");
        });
    });
</script>