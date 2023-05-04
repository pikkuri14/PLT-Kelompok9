@section('content')
<x-adminlte-card title="Profile" theme="info" icon="fas fa-lg fa-bell" footer-class='bg-gradient-dark' maximizable>

<div>

    <img src="fotokotak.jpg" alt="Avatar" style="width:200px">
    <h5 align="center">Fauzi Aminuddin</h5>
    <p class="font-weight-bold" align="center"> Electrical Engineering </p>

<style>
    img{
        border-radius: 50%;
        display: block;
        margin-left:auto;
        margin-right:auto;
        border: 5px solid black;
    }
</style>

<style>
    table{
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
    }
    th, td{
        text-align: left;
        padding: 16px;
    }
    tr:nth-child(odd){
        background-color: lightgrey;
    }
</style>
<table>
<tr>
    <th>Nama</th>
    <td>Fauzi Aminuddin</td>
</tr>
  <tr>
    <th>NIM</th>
    <td>2007220</td>
  </tr>
  <tr>
    <th>Instansi</th>
    <td>Universitas Pendidikan Indonesia</td>
  </tr>
  <tr>
    <th>Email</th>
    <td>fauziaminuddin4@gmail.com</td>
  </tr>
  <tr>
    <th>No. Telepon</th>
    <td>081313215823</td>
  </tr>
</table>
    <x-slot name="footerSlot">
        Arsys2023
    </x-slot>
</div>

</x-adminlte-card>

@endsection