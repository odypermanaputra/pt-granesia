<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Admin IT PT. Granesia 2019</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Yakin akan keluar dari program?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Pilih "Logout" untuk keluar.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
            </div>
        </div>
    </div>
</div>


<!-- jquery first -->
<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery-3.3.1.js"></script>



<!-- Bootstrap core JavaScript-->
<!-- <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script> -->
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- datetimepicker -->
<!-- <script src="<?= base_url('assets/') ?>vendor/datetimepicker/timepicker/js/bootstrap-datetimepicker.min.js"></script> -->

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

<!-- ajax bro -->
<script src="<?= base_url('assets/'); ?>vendor/ajax/ajax.js"></script>

<!-- bootstrap date picker -->
<script src="<?= base_url('assets/'); ?>vendor/datepicker/js/bootstrap-datepicker.js"></script>

<!-- time picker -->
<!-- <script src="<?= base_url('assets/'); ?>js/timepicker.min.js"></script> -->


<!-- Data Table plugins -->
<script src="<?= base_url('assets/') ?>vendor/datatables/btn/datatables.js"></script>
<script src="<?= base_url('assets/') ?>vendor/datatables/btn/Buttons-1.5.6/js/dataTables.buttons.js"></script>
<script src="<?= base_url('assets/') ?>vendor/datatables/btn/JSZip-2.5.0/jszip.js"></script>
<script src="<?= base_url('assets/') ?>vendor/datatables/btn/pdfmake-0.1.36/pdfmake.js"></script>

<!-- sweetalert -->
<script src="<?= base_url('assets/') ?>vendor/sweetalert8.5/dist/sweetalert2.all.js"> </script>

<script src="<?= base_url('assets/') ?>vendor/Select2/select2.min.js"> </script>





<script type="text/javascript">
// data Tabel semua halaman
$('#dataTable').DataTable({
    dom: 'Bfrtip',
    buttons: [
        'excel', 'pdf', 'csv'
    ],
    pagging: true
});
// ending data tabel semua halaman

// fungsi auto fill
function autofillpesan() {
    var kode_barang = document.getElementById('kode_barang').value;
    $.ajax({
        url: "<?= base_url() ?>autocomplete/cari",
        data: '&kode_barang=' + kode_barang,
        success: function(data) {
            var hasil = JSON.parse(data);
            $.each(hasil, function(key, val) {
                document.getElementById('kode_barang').value = val.kode_barang;
                document.getElementById('nama_barang').value = val.nama_barang;
                // document.getElementById('stok').value = val.stok;
            });
        }
    });
};

// fungsi mencari supplier auto
function autofillsupplier() {
    var kepada = document.getElementById('kepada').value;
    $.ajax({
        url: "<?= base_url('autocomplete/carisupplier') ?>",
        data: '&supplier=' + kepada,
        success: function(data) {
            var hasil = JSON.parse(data);
            $.each(hasil, function(key, val) {
                document.getElementById('kepada').value = val.supplier;
                document.getElementById('alamat').value = val.alamat;
                document.getElementById('kota').value = val.kota;
            });
        }
    });
};
// end of search auto supplier 

$(".datepicker").datepicker({
    format: 'yyyy-mm-dd',
    autoclose: true,
    todayHighlight: true,
});

// var timepicker = new TimePicker('time', {
//     lang: 'en',
//     theme: 'dark'
// });
// timepicker.on('change', function(evt) {

//     var value = (evt.hour || '00') + ':' + (evt.minute || '00');
//     evt.element.value = value;
// });






let utk = $("#formpesanitembarang tbody tr").length;

$("#saveprimarypesanan").on('click', function() {
    let nomorpemesanan = $('#nomorpemesanan').val();
    let kepada = $("#kepada").val();
    let alamat = $("#alamat").val();
    let kota = $("#kota").val();
    let date_created = $("#date_created").val();
    let jangkawaktu = $("#jangkawaktu").val();
    let lama = $("#lama").val();
    let ppn = $("input[name='ppn']:checked").val();


    if (nomorpemesanan != "" && kepada != "" && alamat != "") {
        $.ajax({
            data: {
                nomorpemesanan: nomorpemesanan,
                kepada: kepada,
                alamat: alamat,
                kota: kota,
                date_created: date_created,
                jangkawaktu: jangkawaktu,
                lama: lama,
                ppn: ppn
            },
            type: 'POST',
            // dataType: 'JSON',
            url: "<?= base_url('Akuntansi/savepemesananbarang') ?>",
            success: function(nopo) {
                $('#nomorpemesanan').innerHTML = nopo;
                $('#carditem').removeClass('d-none');
            },
            error: function() {
                Swal.fire({
                    type: 'error',
                    title: 'Oops...',
                    text: 'Ada Kesalahan data!',
                    footer: '<div class="alert alert-danger col-md" role="alert"><h6 class="text-danger">Pastikan Nomor P.O. (berbeda)</h6></div>'
                });
            }
        });
    } else {
        Swal.fire({
            type: 'error',
            title: 'Oops...',
            text: 'Masih ada data yang Kosong!',
            footer: '<div class="alert alert-danger col-md" role="alert">Pastikan semua field terisi (Nomor PO, Supplier, Alamat, Nama Barang, Kuantitas, Satuan, dan estimasi harga ) pada Form</div>'
        });
    }
});


// cek nomor po jika Kosong
$('#addItem').on('click', function() {
    let kodeBarang = $('#kode_barang').val();
    let namaBarang = $('#nama_barang').val();
    let isi = $('#isi').val();
    let satuanisi = $('#satuanisi').val();
    let kuantitas = $('#kuantiti').val();
    let satuan = $("#satuan").val();
    let estimasiHarga = $("#estimasi_harga").val();
    let date_created = $("#date_created").val();
    let nomor = $('#formpesanitembarang tbody tr').length + 1;
    const jumlah = kuantitas * estimasiHarga;
    if (kuantitas == "" || namaBarang == "" || estimasiHarga == "") {
        Swal.fire({
            type: 'error',
            title: 'Oops...',
            text: 'Masih ada data yang Kosong!',
            footer: '<div class="alert alert-danger col-md" role="alert">Pastikan semua field terisi (Nomor PO, Supplier, Alamat, Nama Barang, Kuantitas, Satuan, dan estimasi harga ) pada Form</div>'
        });
    } else {
        $('#formpesanitembarang tbody:last-child').append('<tr><th scope="row">' + nomor + '</th><td>' +
            kodeBarang + '</td><td>' + namaBarang + '</td><td class="text-right">' + isi +
            '</td><td class="text-right">' + satuanisi + '</td><td class="text-right">' + kuantitas +
            '</td><td class="text-left">' + satuan + '</td><td>' + estimasiHarga + '</td><td>' + jumlah +
            '</td></tr>');
        if (nomor >= 1) {
            $("#itemkosong").remove();
        }
        document.getElementById("kode_barang").value = "";
        document.getElementById("nama_barang").value = "";
        document.getElementById("isi").value = "";
        document.getElementById("kuantiti").value = "";
        document.getElementById("estimasi_harga").value = "";
        $('#kode_barang').focus();
    }
});


$('#saveTabelDatatoDatabase').on('click', function() {
    let tabelData = $('#formpesanitembarang tbody tr').length;
    let nomorpemesanan = $('#nomorpemesanan').value;

    if (tabelData < 1 || nomorpemesanan == "") {
        Swal.fire({
            type: 'error',
            title: 'Oops...',
            text: 'Datanya Masih kosong!',
        });
    } else {
        var table_item_data = [];
        $('#formpesanitembarang tr').each(function(i, data) {
            if ($(data).find('td:eq(0)').text() == "") {

            } else {
                var sub = {
                    'nomorpemesanan': $('#nomorpemesanan').val(),
                    'date_created': $('#date_created').val(),
                    'kode_barang': $(data).find('td:eq(0)').text(),
                    'nama_barang': $(data).find('td:eq(1)').text(),
                    'isi': $(data).find('td:eq(2)').text(),
                    'satuanisi': $(data).find('td:eq(3)').text(),
                    'kuantitas': $(data).find('td:eq(4)').text(),
                    'satuan': $(data).find('td:eq(5)').text(),
                    'estimasiharga': $(data).find('td:eq(6)').text(),
                    'jumlah': $(data).find('td:eq(7)').text()
                };
                table_item_data.push(sub);
            }

        });
        Swal.fire({
            title: 'Simpan Semua Data?',
            text: "Apakah anda ingin menyimpan semua data ke dalam database ?!",
            type: 'info',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Simpan semuanya!'
        }).then((result) => {
            if (result.value) {
                var data = {
                    'isitabel': table_item_data
                };
                $.ajax({
                    data: data,
                    type: 'POST',
                    dataType: 'json',
                    crossOrigin: false,
                    url: '<?= base_url("Akuntansi/insertpemesananbarang ") ?>',
                    success: function(hasil) {

                        if (hasil.status == "success") {
                            Swal.fire(
                                'Pesanan Disimpan!',
                                'Data sudah tersimpan ke Database.',
                                'success'
                            );
                            window.location.href =
                                "<?= base_url('Akuntansi/pemesanan'); ?>";
                        } else {
                            Swal.fire({
                                type: 'error',
                                title: 'Oops...',
                                text: 'wewewewe!'
                            });
                        }

                        console.log(hasil.status);
                    }
                });

            }

        });

    } // ending else

}); //end functions save table to database  

$("#saveItemPembelian").on('click', function() {
    let beli_username = $('#beli_username').val();
    let beli_tgl_input = $("#beli_tgl_input").val();
    let beli_tanggal = $("#beli_tanggal").val();
    let beli_no_dok = $("#beli_no_dok").val();
    let beli_kode_barang = $("#kode_barang").val();
    let beli_nama_barang = $("#beli_nama_barang").val();
    let beli_stok = $("#beli_stok").val();
    let beli_keterangan = $("#beli_keterangan").val();
    let beli_qty = $("#beli_qty").val();
    let beli_hrg_satuan = $("#beli_hrg_satuan").val();
    let beli_jumlah = $("#beli_jumlah").val();
    let nomor = $("#tableItemPembelian tbody tr").length + 1;
    if (beli_tanggal == "" || beli_no_dok == "" || beli_qty == "") {
        Swal.fire({
            type: 'error',
            title: 'Oops...',
            text: 'Masih ada data yang Kosong!',
            footer: '<div class="alert alert-danger col-md" role="alert">Pastikan semua field terisi pada Form</div>'
        });
    } else {
        $("#tableItemPembelian tbody:last-child").append('<tr><th scope="row">' + nomor + '</th><td>' +
            beli_kode_barang + '</td><<td>' + beli_nama_barang + '</td><td>' + beli_qty + '</td><td>' +
            beli_hrg_satuan + '</td><td>' + beli_jumlah + '</td><td>' + beli_keterangan + '</td></tr>');
        if (nomor >= 1) {
            $("#itemkosong").remove();
        }
        document.getElementById("kode_barang").value = "";
        document.getElementById("beli_nama_barang").value = "";
        document.getElementById("beli_stok").value = "";
        document.getElementById("beli_keterangan").value = "";
        document.getElementById("beli_hrg_satuan").value = "";
        document.getElementById("beli_qty").value = "";
        document.getElementById("beli_jumlah").value = "";
        $('#kode_barang').focus();
    }
});

$("#saveAllpembelianDatatoDatabase").on('click', function() {
    let tableItemBeli = $("#tableItemPembelian tbody tr").length;

    // cek isi tabel item pembelian jika data item belum diisi
    if (tableItemBeli < 1) {
        swal.fire({
            type: 'error',
            title: 'Oops... xxx',
            text: 'Datanya masih kosong!',
        });
    }
    // akhir cek isi tabel item pembelian jika tabel item kosong
    else
    // cek jika ada item pada tabel tersedia
    {
        var table_item_beli = []; // variabel penampung untuk item pada tabel
        $('#tableItemPembelian tr').each(function(i, data) {
            // looping data perbaris
            if ($(data).find('td:eq(0)').text() == "") {
                // jika data pada item tabel baris pertama kosong
            } else
            // jika item pada baris tabel lebih dari atau sama dengan 1 
            {
                var subbeli = {
                    'tgl_input': $('#beli_tgl_input').val(),
                    'tanggal': $('#beli_tanggal').val(),
                    'no_dok': $('#beli_no_dok').val(),
                    'kode_barang': $(data).find('td:eq(0)').text(),
                    'nama_barang': $(data).find('td:eq(1)').text(),
                    'qty': $(data).find('td:eq(2)').text(),
                    'hrg_satuan': $(data).find('td:eq(3)').text(),
                    'jumlah': $(data).find('td:eq(4)').text(),
                    'keterangan': $(data).find('td:eq(5)').text(),
                    'tgl_update': "0",
                    'verifikasi': "0",
                    'username': $('#beli_username').val()
                };
                table_item_beli.push(subbeli);
            }
            // ditampung dalam variabel ini
        });
        Swal.fire({
            title: 'Simpan semua data ?',
            text: 'Data akan di simpan ke database',
            type: 'info',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Simpan semua !'
        }).then((result) => {
            if (result.value) {
                var data = {
                    'isitableitembeli': table_item_beli
                };
                $.ajax({
                    data: data,
                    type: 'POST',
                    dataType: 'json',
                    crossOrigin: false,
                    url: '<?= base_url("user/simpanItemDataPembelian") ?>',
                    success: function(hasil) {
                        if (hasil.status == "success") {
                            Swal.fire(
                                'Data Disimpan !',
                                'Data sudah disimpan ke Database',
                                'success'
                            );
                            window.location.href = "<?= base_url('user/index') ?>";
                        } else if (hasil.status == "failed") {
                            swal.file({
                                type: 'error',
                                title: 'Oooops.....',
                                text: 'gagal disimpan ke database'
                            });
                        }
                    }
                });
            }
        });
    }
});


$('#addItemPakai').on('click', function() {
    let pakai_username = $('#pakai_username').val();
    let pakai_tanggal_input = $('#pakai_tgl_input').val();
    let pakai_tanggal = $('#pakai_tgl_dok').val();
    let pakai_no_dok = $('#pakai_no_dok').val();
    let pakai_kode_barang = $('#kode_barang').val();
    let pakai_nama_barang = $('#pakai_nama_barang').val();
    let pakai_ket_pemakaian = $('#pakai_ket_barang').val();
    let pakai_bagian = $('#pakai_departemen').val();
    let pakai_qty = $('#pakai_qty').val();
    let pakai_satuan = $('#pakai_satuan').val();
    let nomor = $("#tableItemPakai tbody tr").length + 1;
    if (pakai_tanggal == "" || pakai_no_dok == "" || pakai_qty == "") {
        Swal.fire({
            type: 'error',
            title: 'Oops...',
            text: 'Masih ada data yang Kosong!',
            footer: '<div class="alert alert-danger col-md" role="alert">Pastikan semua field terisi pada Form</div>'
        });
    } else {
        $("#tableItemPakai tbody:last-child").append('<tr><th scope="row">' + nomor + '</th><td>' +
            pakai_kode_barang + '</td><td>' + pakai_nama_barang + '</td><td>' + pakai_qty + '</td><td>' +
            pakai_satuan + '</td><td>' + pakai_bagian + '</td><td>' + pakai_ket_pemakaian + '</td></tr>');
        if (nomor >= 1) {
            $("#itemkosong").remove();
        }
        document.getElementById('kode_barang').value = "";
        document.getElementById('pakai_nama_barang').value = "";
        document.getElementById('pakai_ket_barang').value = "";
        document.getElementById('pakai_stok').value = "";
        document.getElementById('pakai_qty').value = "";
        $('#kode_barang').focus();
    }
});

$('#saveAllpemakaianDatatoDatabase').on('click', function() {
    const tableItemPakai = $("#tableItemPakai tbody tr").length;
    // cek isi tabel item pembelian jika data item belum diisi
    console.log(tableItemPakai);
    if (tableItemPakai < 1) {
        swal.fire({
            type: 'error',
            title: 'Oops...',
            text: 'Datanya masih kosong!',
        });
    } // akhir cek isi tabel item pembelian jika tabel item kosong
    else
    // cek jika ada item pada tabel tersedia
    {
        let table_item_pakai = []; // variabel penampung untuk item pada tabel
        $('#tableItemPakai tr').each(function(i, data) {
            // looping data perbaris
            if ($(data).find('td:eq(0)').text() == "") {
                // jika data pada item tabel baris pertama kosong
            } else
            // jika item pada baris tabel lebih dari atau sama dengan 1 
            {
                var subpakai = {
                    'tgl_input': $('#pakai_tgl_input').val(),
                    'no_dok': $('#pakai_no_dok').val(),
                    'tgl_dok': $('#pakai_tgl_dok').val(),
                    'kode_barang': $(data).find('td:eq(0)').text(),
                    'nama_barang': $(data).find('td:eq(1)').text(),
                    'qty': $(data).find('td:eq(2)').text(),
                    'satuan': $(data).find('td:eq(3)').text(),
                    'bagian': $(data).find('td:eq(4)').text(),
                    'keterangan': $(data).find('td:eq(5)').text(),
                    'user': $('#pakai_username').val()
                };
                table_item_pakai.push(subpakai);
            }
        });
        // console.log(table_item_pakai);
        console.log(table_item_pakai);
        Swal.fire({
            title: 'Simpan semua data ?',
            text: 'Data akan di simpan ke database',
            type: 'info',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Simpan semua !',
        }).then((result) => {
            var data = {
                'isitableitempakai': table_item_pakai
            };
            $.ajax({
                data: data,
                type: 'POST',
                dataType: 'json',
                crossOrigin: false,
                url: '<?= base_url("user/simpanItemDataPemakaian") ?>',
                success: function(hasil) {
                    if (hasil.status == "success") {
                        Swal.fire(
                            'Data Disimpan !',
                            'Data sudah disimpan ke Database',
                            'success'
                        );
                        window.location.href = "<?= base_url('user/pemakaian') ?>";
                    } else if (hasil.status == "failed") {
                        swal.file({
                            type: 'error',
                            title: 'Oooops.....',
                            text: 'gagal disimpan ke database'
                        });
                    }
                }
            });

        });
    }

});

const flashData = $('.flash-data').data('flashdata')
if (flashData) {
    Swal.fire({
        title: 'Selamat!',
        text: 'Data berhasil ' + flashData,
        imageUrl: '<?= base_url("assets/img/profile/") ?>w644.jpg',
        imageWidth: 656,
        imageHeight: 200,
        imageAlt: 'Custom image',
    })
}

// tombol-hapus data
$('.tomboldelete').on('click', function(e) {
    e.preventDefault();
    const href = $(this).attr('href');
    Swal.fire({
        title: 'Yakin Akan menghapus data?',
        text: "Data yang sudah dihapus tidak dapat dikembalikan!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, hapus saja!'
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })
})
// end tombol hapus data


// tombol verifikasi akuntansi
$('.klikverifikasi').on('click', function() {
    const idver = $(this).data("idver");
    const verifikasi = $(this).data("verifikasi");
    console.log(idver, verifikasi);
    if (verifikasi == 0) {
        const set_verifikasi = 1;
        $.ajax({
            type: "post",
            data: {
                id: idver,
                set_verifikasi: set_verifikasi,
            },
            url: "<?= base_url('akuntansi/setverifikasi') ?>",
            success: function() {
                Swal.fire({
                    title: "Verifikasi Pembelian",
                    text: "Data Sudah Berhasil di Verfikasi",
                    type: "success",
                    showConfirmButton: true,
                });
            }
        });
        document.location.href = "<?= base_url('Akuntansi/index') ?>";
    }
});
// end of tombol verifikasi akuntansi

// pemakaian kertas
$('#nomorator_web').on('keyup', function() {
    const gramatur = $('#gramatur').val();
    const lebar = $('#lebar').val();
    const cutoff = $('#cutoff').val();
    const rumus = (gramatur * lebar * cutoff) / 10000;
    const hasil = 1000 / rumus;
    const nomorator = $(this).val();
    const pemakaian_kertas_cetak_web = nomorator / hasil;
    const berat_asal = $('#berat_roll').val();
    console.log(berat_asal);
    $('#pemakaian_roll').val(pemakaian_kertas_cetak_web);
})
// akhir pemakaian kertas 

$('#kode_roll').on('change', function() {
    const koderoll = $(this).find(":selected").val();
    // console.log(koderoll)
    $.ajax({
        url: "<?= base_url('autocomplete/koderoll') ?>",
        data: '&ambil_koderoll=' + koderoll,
        success: function(data) {
            var hasil = JSON.parse(data);
            $.each(hasil, function(key, val) {
                document.getElementById('berat_roll').value = val.sisa;
                document.getElementById('as_selongsong').value = val.weight_as_selongsong;
            });
        }
    });
});

// hitung pemakaian kertas
$('#waste').on('keyup', function() {
    var avel = parseFloat($('#avel').val());
    var berat_roll = parseFloat($('#berat_roll').val());
    var waste = parseFloat($(this).val());
    var awas = avel + waste;
    var pemakaian_kertas = parseFloat($('#pemakaian_roll').val());
    var pemakaian = parseFloat(berat_roll - (awas + pemakaian_kertas));
    $('#berat_sisa_roll').val(pemakaian);
})
// end function of hitung pemakaian kertas



// simpan laporan web
$('#simpanlaporanwebgoss').on('click', function() {
    const no_order = $('#no_order').val();
    const id_mesinweb = $('#id_mesinweb').val();
    const velt = $('#velt').val();
    const tgl_cetak_web = $('#tgl_cetak_web').val();
    const jml_plate = $('#jml_plate').val();
    const pasang_plate_web = $('#pasang_plate_web').val();
    const mulai_cetak_web = $('#mulai_cetak_web').val();
    const selesai_cetak_web = $('#selesai_cetak_web').val();
    const insit = $('#insit').val();
    const speed = $('#speed').val();
    const nomorator_web = $('#nomorator_web').val();
    const avel = $('#avel').val();
    const waste = $('#waste').val();
    const kode_roll = $('#kode_roll').val();
    const pemakaian_roll = $('#pemakaian_roll').val();
    const berat_sisa_roll = $('#berat_sisa_roll').val();
    const web_cyan = $('#web_cyan').val();
    const web_magenta = $('#web_magenta').val();
    const web_yellow = $('#web_yellow').val();
    const web_black = $('#web_black').val();
    if (speed == "" || nomorator_web == "" || web_cyan == "" || velt == "" || jml_plate == "") {
        Swal.fire({
            title: 'Oooops.....',
            imageUrl: '<?= base_url("assets/img/profile/") ?>w644.jpg',
            text: 'Masih ada data yang kosong'
        });
    } else {
        $.ajax({
            data: {
                no_order: no_order,
                id_mesinweb: id_mesinweb,
                velt: velt,
                tgl_cetak_web: tgl_cetak_web,
                jml_plate: jml_plate,
                pasang_plate_web: pasang_plate_web,
                mulai_cetak_web: mulai_cetak_web,
                selesai_cetak_web: selesai_cetak_web,
                insit: insit,
                speed: speed,
                nomorator_web: nomorator_web,
                avel: avel,
                waste: waste,
                kode_roll: kode_roll,
                pemakaian_roll: pemakaian_roll,
                berat_sisa_roll: berat_sisa_roll,
                web_cyan: web_cyan,
                web_magenta: web_magenta,
                web_yellow: web_yellow,
                web_black: web_black,
            },
            type: 'POST',
            url: "<?= base_url('Admum/savealllaporanadmum') ?>",
            success: function() {
                $('#no_order').val("");
                $('#mesin').val("");
                $('#velt').val("");
                $('#tgl_cetak_web').val("");
                $('#jml_plate').val("");
                $('#pasang_plate_web').val("");
                $('#mulai_cetak_web').val("");
                $('#selesai_cetak_web').val("");
                $('#insit').val("");
                $('#speed').val("");
                $('#nomorator_web').val("");
                $('#avel').val("");
                $('#waste').val("");
                $('#kode_roll').val("");
                $('#pemakaian_roll').val("");
                $('#berat_sisa_roll').val("");
                $('#web_cyan').val("");
                $('#web_magenta').val("");
                $('#web_yellow').val("");
                $('#web_black').val("");
                Swal.fire({
                    title: 'Selamat!',
                    text: 'Data berhasil Disimpan',
                    imageUrl: '<?= base_url("assets/img/profile/") ?>w644.jpg',
                    imageWidth: 656,
                    imageHeight: 200,
                    imageAlt: 'Custom image',
                });
            },
        });
    }
})
// akhir simpan laporan web
</script>
<script src="<?= base_url('assets/') ?>js/script.js">
</script>

</body>

</html>