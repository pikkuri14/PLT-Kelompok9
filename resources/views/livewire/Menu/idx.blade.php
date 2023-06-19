@section('content')
<div>
<x-adminlte-card title="My Profile" theme="dark" icon="fa fa-user-circle" >
    
<div class="row">
<div class= "col-md-3 mt-1  text-center">
    <img src="{{ asset('/fotoku.jpg')}}" class= "rounded-circle" width="140" height="140" >  
    
    <h5>Electrical</h5>
    <h5>Engineering</h5>
    <p class="font-weight-bold"> M Farhan Jundi O </p>
    <a href="#" class="btn btn-dark" >Student</a>
</div>

  <div class="card-body">
  <x-adminlte-card title="Biodata" theme="lightblue" icon="fas fa-address-book" collapsible="collapsed">
    <table class="table table-bordered table-sm  table-striped">
     
      <tbody>
        <tr>
         
          <td>  Nama </td>
          <td> Muhammad Farhan Jundi Osama</td>
        </tr>
        <tr>
          
          <td>NIM</td>
          <td>2007812</td>
          
        </tr>
        <tr>
          <td>Jurusan</td>
          <td>Teknik Elektro</td>
        <tr>
          <td>Tahun Masuk</td>
          <td>2020</td> 
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td>Laki-Laki</td> 
        </tr>
        <tr>
          <td>Tempat/Tanggal Lahir</td>
          <td>Garut, 10 April 2001</td> 
        </tr>
        </tr>
        <tr>
          <td>No HP </td>
          <td>082118332925</td>
        </tr>
        <tr>
          <td>Email</td>
          <td>farhanjo@upi.edu</td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td>Komplek Excello Indah No C9, Kabupaten Garut</td>
        </tr>
        <tr>
          <td>Golongan Darah</td>
          <td>O</td>
        </tr>
        <tr>
          <td>Agama</td>
          <td>ISLAM</td>
        </tr>
      </tbody>
    </table>
    </x-adminlte-card>
</div>     

</x-adminlte-card>
<div class="card-footer text-muted text-center">
        ArSys2023
    </div>
@endsection