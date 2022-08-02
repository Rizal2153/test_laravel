<!DOCTYPE html>
<html lang="en">
<head>
    <title>Crud Barang</title>
</head>
<body>
    <h2>Edit Barang</h2>

    <a href="/barang">Kembali</a>

    <br/>
    <br/>

    @foreach($barang as $b)
    {{-- <form action="/barang/update" method='post'> --}}
    <form id="form_barang_edit" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $b->id_barang }}"> <br/>
        Kode <input type="varchar" required="required" name="kode" value="{{ $b->kode_barang }}"><br/>
        Nama <input type="varchar" required="required" name="nama" value="{{ $b->nama_barang }}"><br/>
        Harga <input type="varchar" required="required" name="harga" value="{{ $b->harga_barang }}"><br/>
        {{-- Created <input type="date" required="required" name="created" value="{{ $b->created_date }}"><br/>
        Modified <input type="date" required="required" name="modified" value="{{ $b->modified_date }}"><br/> --}}
        <input type="Submit" value="Simpan Data">
    </form>
    @endforeach
</body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
$("form").submit(async function(event){
    event.preventDefault();
    var formData = $(this).serializeArray();
    var id = $("#id_barang").val();
    // console.log(id);
    var url_update = window.location.host+"/barang/update";
    // console.log(url)
    $.ajax({
        url: "http://127.0.0.1:8000/barang/update",
        type:"get",
        data: formData,
        success: function(result) {
            console.log(formData);
            if(result.code == 200)
            {
                console.log(result.massage)
                // alert(result.massage);
                // window.location.href = "/pegawai";
            }
            else
            {
                alert('aw');
                console.log(result.code)
                // alert(result.massage);    
            }
        },
        error: function(res)
        {
            // alert(res);
            alert('test');
            console.log(res)
        }
    })
})
 
</script>