<!DOCTYPE html>
<html lang="en">
<head>
    <title>CRUD Barang</title>
</head>
<body>
    <h2>Data Barang</h2>
    
    <a href="/barang">Kembali</a>

    <br/>
    <br/>
    
    <form id="form_barang">
        <?php echo e(csrf_field()); ?>

        Kode Barang <input type="varchar" name="kode_barang" required="required"><br/>
        Nama Barang <input type="varchar" name="nama_barang" required="required"><br/>
        Harga Barang <input type="varchar" name="harga_barang" required="required"><br/>
        
        <input type="Submit" value="Simpan Data">
    </form>
    
</body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
$("form").submit(async function(event){
    event.preventDefault();
    var formData = $('#form_barang').serializeArray();
    $.ajax({
        url:"http://127.0.0.1:8000/barang/store",
        type:"post",
        data: formData,
        success: function(result) {
            if(result.code == 200)
            {
                alert(result.massage);
                window.location.href = "/barang";
            }
            else
            {
                alert(result.massage);    
            }
        },
        error: function(res)
        {
            alert(res.massage);
        }
    })
})

</script><?php /**PATH C:\xampp\htdocs\test_laravel\resources\views/tambah.blade.php ENDPATH**/ ?>