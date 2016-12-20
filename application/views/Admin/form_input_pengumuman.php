<h3>Tambah Pengumuman</h3>
<?php
echo form_open('Admin/Pengumuman/post');
?>
<table class="table table-borderless">
    <tr><td width="130">Judul</td>
        <td><div class="col-sm-4""><input type="text" name="judul_pengumuman" class="form-control" placeholder="Judul Pengumuman"></div>

        <tr><td width="130">Isi Pengumuman</td>
        <td><div class="col-sm-4"><textarea name="isi_pengumuman" class="form-control" rows="5" id="alamat" placeholder="Isi Pengumuman"></textarea></div>





       </td></tr>
    <tr><td colspan="2"><button type="submit" class="btn btn-primary btn-sm" name="submit">Simpan</button>
        <?php echo anchor('Admin/Pengumuman','Kembali',array('class'=>'btn btn-primary btn-sm'))?>
        </td></tr>
</table>
</form>
