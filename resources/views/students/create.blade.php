<form action={{ route('students.store') }} method="POST">

    @csrf
    <label>Enter Name</label>
    <input name="name" type="text" />
    <label>Enter Roll No</label>
    <input name="roll_no" type="number" />
    <label>Enter Address</label>
    <input name="address" type="text" />

    <input type="submit" />
</form>
