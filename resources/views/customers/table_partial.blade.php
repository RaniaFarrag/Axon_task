<table id="numbers">
    <tbody>
    <tr>
        <td>ID</td>
        <td>Country</td>
        <td>State</td>
        <td>Country Code</td>
        <td>Phone num</td>
    </tr>

    @foreach($customers as $customer)
        <tr>
            <td>{{ $customer->id }}</td>
            <td>{{ $customer->country->country_name }}</td>
            <td>{{ $customer->country->state == 1 ? 'Ok' : 'Nok' }}</td>
            <td>{{ $customer->country->country_code }}</td>
            <td>{{ $customer->phone }}</td>
        </tr>
    @endforeach
    </tbody>
</table>

<div > {{ $customers->links() }}</div>
